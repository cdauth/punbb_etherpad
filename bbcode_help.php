<?php
	require_once(dirname(__FILE__)."/common.php");

	etherpad_require_language();
?>
<div class="ct-box help-box">
	<h3 class="hn"><span><?php echo $lang_etherpad['etherpad_info'] ?></span></h3>
	<div class="entry-content">
		<p><?php printf($lang_etherpad['%s displays an editable Etherpad'], "<code>[".ETHERPAD_TAG."]</code>") ?></p>
		<p><?php printf($lang_etherpad['%s displays an editable Etherpad with a fixed ID (so it can be reused in different posts)'], "<code>[".ETHERPAD_TAG."=ID]</code>"); ?></p>
	</div>
</div>