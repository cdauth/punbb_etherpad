<?php
	require_once(dirname(__FILE__)."/common.php");

	ethercalc_require_language();
?>
<div class="ct-box help-box">
	<h3 class="hn"><span><?php echo $lang_ethercalc['ethercalc_info'] ?></span></h3>
	<div class="entry-content">
		<p><?php printf($lang_ethercalc['%s displays an editable Ethercalc spreadsheet'], "<code>[".ETHERCALC_TAG."]</code>") ?></p>
		<p><?php printf($lang_ethercalc['%s displays an editable Ethercalc spreadsheet with a fixed ID (so it can be reused in different posts)'], "<code>[".ETHERCALC_TAG."=ID]</code>"); ?></p>
	</div>
</div>
