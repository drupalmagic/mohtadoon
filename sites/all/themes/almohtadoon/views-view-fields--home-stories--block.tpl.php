<div class="box" style="position: relative;">
	<div class="img-place"><?php print strip_tags($fields['field_image']->content, '<img>'); ?></div>
	<div class="title"><?php print strip_tags($fields['title']->content, '<a>'); ?></div>
	<p><?php print strip_tags($fields['field_manchet']->content); ?></p>
	<div class="sharing-buttons" style="position: absolute; top: 112px; width: 197px; right: 55px; height: 30px;">
		<span style="float: right; margin-top: 2px;">
			<fb:share-button type="button_count" href="<?php print strip_tags($fields['path']->content); ?>"></fb:share-button>
		</span>
		<span style="float: right;">
			<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="h<?php print strip_tags($fields['path']->content); ?>" data-text="<?php print strip_tags($fields['title']->content) . ' ' . strip_tags($fields['path']->content); ?>" data-via"almohtadon">Tweet</a>
		</span>
	</div>
</div>