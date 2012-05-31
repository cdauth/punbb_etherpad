<?php
	define("ETHERCALC_TAG", "ethercalc");

	function ethercalc_random_id() {
		$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
		$randomstring = '';
		for($i = 0; $i < 10; $i++)
			$randomstring .= $chars[rand(0, strlen($chars))];
		return $randomstring;
	}
	
	function ethercalc_add_random_ids($text) {
		return preg_replace_callback("/(\[".preg_quote(ETHERCALC_TAG, "/").")=?(\])/", "ethercalc_add_random_id", $text);
	}
	
	function ethercalc_add_random_id($m) {
		return $m[1]."=".ethercalc_random_id().$m[2];
	}
	
	function ethercalc_require_language() {
		global $forum_user;
		
		global $lang_ethercalc;
		$dir = dirname(__FILE__)."/lang/";
		if(file_exists($dir.$forum_user['language'].'.php'))
			require_once($dir.$forum_user['language'].'.php');
		else
			require_once($dir.'English.php');
	}
	
	function ethercalc_is_enabled() {
		global $forum_config;
		
		return !!$forum_config['o_ethercalc_url'];
	}
	
	function ethercalc_make_url($id) {
		global $forum_config;
		
		$url = $forum_config['o_ethercalc_url'];
		if(substr($url, -1) != "/")
			$url .= "/";
		$url .= rawurlencode($forum_config['o_ethercalc_prefix'].$id);
		return $url;
	}
