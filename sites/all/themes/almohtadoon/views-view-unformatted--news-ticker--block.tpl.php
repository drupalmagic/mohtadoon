<!--
<link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/almohtadoon/jquery_news_ticker/styles/ticker-style.css" rel="stylesheet" type="text/css" />
<script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/almohtadoon/jquery_news_ticker/includes/jquery.ticker.js" type="text/javascript"></script>
<script type="text/javascript">
	(function($){
		$(function () {
      $('#js-news').ticker();
    });
	})(jQuery);
</script> -->
<ul id="js-news" class="js-hidden">
<marquee behavior="scroll" direction="left">
	<?php foreach($rows as $id => $row): ?>
		<?php print $row; ?>
	<?php endforeach; ?>
</marquee>
</ul>



