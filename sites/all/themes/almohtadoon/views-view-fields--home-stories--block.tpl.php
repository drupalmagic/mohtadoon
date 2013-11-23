<?php 
	$tiny_url = file_get_contents('http://tinyurl.com/api-create.php?url='.strip_tags($fields['path']->content)); 
	$twitter_share_url = 'http://twitter.com/home?status=';
	$twitter_share_url .= urlencode(strip_tags($fields['title']->content));
	$twitter_share_url .= urlencode($tiny_url);

	$facebook_share_url = 'http://www.facebook.com/share.php?u='.urlencode($tiny_url).'&title='.urlencode(strip_tags($fields['title']->content));
?>
<div class="box" style="position: relative;">
	<div class="img-place"><?php print strip_tags($fields['field_image']->content, '<img>, <a>'); ?></div>
	<div class="title"><?php print strip_tags($fields['title']->content, '<a>'); ?></div>
	<p><?php print strip_tags($fields['field_manchet']->content); ?></p>
	<div class="sharing-buttons" style="position: absolute; top: 108px; width: 125px; right: 155px; height: 30px;">
		<span style="float: right;">
			<a href="<?php print $twitter_share_url; ?>" target="_blank">
				<img src="<?php print $GLOBALS['base_url'] . '/sites/all/themes/almohtadoon/images/tshare.jpg'; ?>">
			</a>
		</span>
		<span style="float: right; margin-top: 2px; margin-right: 7px;">
			<a href="<?php print $facebook_share_url; ?>" target="_blank">
				<img src="<?php print $GLOBALS['base_url'] . '/sites/all/themes/almohtadoon/images/fshare.jpg'; ?>">
			</a>
		</span>
	</div>
</div>