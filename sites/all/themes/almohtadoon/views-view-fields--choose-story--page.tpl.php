<?php if($id == 1){ ?>
<div class="right-big-section" style="width: 940px; margin-bottom: 20px; margin-right: 20px;">  

<div class="box" style="position: relative; float: left; margin-left: 23px;">
  <div class="img-place">
		<a href="<?php print strip_tags($fields['path']->content); ?>">
			<img src="<?php print image_style_url('220x240-bigthumb', $row->_field_data['nid']['entity']->field_image['und'][0]['uri']);?>" />
		</a>
  </div>
    <div class="title"><?php print strip_tags($fields['title']->content, '<a>'); ?></div>
    <p><?php print strip_tags($fields['field_manchet']->content); ?></p>
     <div class="sharing-buttons" style="position: absolute; top: 200px; width: 197px; right: 245px; height: 30px;">
				<span style="float: right;">
					<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="<?php print strip_tags($fields['path']->content); ?>" data-text="<?php print strip_tags($fields['title']->content) . ' ' . strip_tags($fields['path']->content); ?>" data-via"almohtadon">Tweet</a>
				</span>
				<span style="float: right; margin-top: 2px; margin-right: 7px;">
					<fb:share-button type="button_count" href="<?php print strip_tags($fields['path']->content); ?>"></fb:share-button>
				</span>
			</div>
</div>

</div>

<?php }else{ ?>

<div class="box" style="position: relative;">
	<div class="img-place"><?php print strip_tags($fields['field_image']->content, '<img>, <a>'); ?></div>
	<div class="title"><?php print strip_tags($fields['title']->content, '<a>'); ?></div>
	<p style="width: 150px;"><?php print strip_tags($fields['field_manchet']->content); ?></p>
	<div class="sharing-buttons" style="position: absolute; top: 108px; width: 197px; right: 55px; height: 30px;">
		<span style="float: right;">
			<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="<?php print strip_tags($fields['path']->content); ?>" data-text="<?php print strip_tags($fields['title']->content) . ' ' . strip_tags($fields['path']->content); ?>" data-via"almohtadon">Tweet</a>
		</span>
		<span style="float: right; margin-top: 2px; margin-right: 7px;">
			<fb:share-button type="button_count" href="<?php print strip_tags($fields['path']->content); ?>"></fb:share-button>
		</span>
	</div>
</div>

<?php } ?>