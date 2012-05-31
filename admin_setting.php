<?php
	require_once(dirname(__FILE__)."/common.php");
	
	ethercalc_require_language();
	
	// Reset counter
	$forum_page['group_count'] = $forum_page['item_count'] = 0;
?>
<div class="content-head">
	<h2 class="hn"><span><?php echo $lang_ethercalc['admin_settings_heading'] ?></span></h2>
</div>
<fieldset class="frm-group group<?php echo ++$forum_page['group_count'] ?>">
	<div class="sf-set set<?php echo ++$forum_page['item_count'] ?>">
		<div class="sf-box text">
			<label for="fld<?php echo ++$forum_page['fld_count'] ?>"><span><?php echo $lang_ethercalc['Ethercalc URL'] ?></span><small><?php echo $lang_ethercalc['ethercalc_url_description']; ?></small></label><br />
			<span class="fld-input"><input type="text" id="fld<?php echo $forum_page['fld_count'] ?>" name="form[ethercalc_url]" size="35" value="<?php echo forum_htmlencode($forum_config['o_ethercalc_url']) ?>" /></span>
		</div>
	</div>
	<div class="sf-set set<?php echo ++$forum_page['item_count'] ?>">
		<div class="sf-box text">
			<label for="fld<?php echo ++$forum_page['fld_count'] ?>"><span><?php echo $lang_ethercalc['ID prefix'] ?></span></label><br />
			<span class="fld-input"><input type="text" id="fld<?php echo $forum_page['fld_count'] ?>" name="form[ethercalc_prefix]" size="35" value="<?php echo forum_htmlencode($forum_config['o_ethercalc_prefix']) ?>" /></span>
		</div>
	</div>
</fieldset>
