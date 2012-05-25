<?php
	define("ETHERPAD_TAG", "etherpad");

	function etherpad_random_id() {
		$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
		$randomstring = '';
		for($i = 0; $i < 10; $i++)
			$randomstring .= $chars[rand(0, strlen($chars))];
		return $randomstring;
	}
	
	function etherpad_add_random_ids($text) {
		return preg_replace_callback("/(\[".preg_quote(ETHERPAD_TAG, "/").")=?(\])/", "etherpad_add_random_id", $text);
	}
	
	function etherpad_add_random_id($m) {
		return $m[1]."=".etherpad_random_id().$m[2];
	}
	
	function etherpad_require_language() {
		global $forum_user;
		
		global $lang_etherpad;
		$dir = dirname(__FILE__)."/lang/";
		if(file_exists($dir.$forum_user['language'].'.php'))
			require_once($dir.$forum_user['language'].'.php');
		else
			require_once($dir.'English.php');
	}
	
	function etherpad_is_enabled() {
		global $forum_config;
		
		return !!$forum_config['o_etherpad_url'];
	}
	
	function etherpad_make_url($id) {
		global $forum_config;
		
		$url = $forum_config['o_etherpad_url'];
		if(substr($url, -1) != "/")
			$url .= "/";
		$url .= rawurlencode($forum_config['o_etherpad_prefix'].$id);
		return $url;
	}