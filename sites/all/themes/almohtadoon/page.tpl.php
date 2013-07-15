<?php if(arg(0) == 'node' && (arg(1) == 'add' || arg(1) == 'edit' )): ?>
<link rel="stylesheet" type="text/css" href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/almohtadoon/form.css">
<?php endif; ?>
<?php if(arg(0) == 'search' && arg(1) == 'content') {
  print '<style type="text/css">';
  print '#block-system-main ul {
    direction: rtl; padding-right: 25px;
  }
  ';
  print '</style>';
}
?>
<div id="wrapper">
  <div id="header">
  	<div class="logo">
     <a href="<?php print $front_page; ?>"><img src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/almohtadoon/images/almohtadoon-logo.png" /></a>
    </div>      <div class="social-network">
      	<?php if($page['social_btns']): ?>
          <?php print render($page['social_btns']); ?>
        <?php endif; ?>
      </div>
      
      <a href="<?php print url('node/26', array('absolute' => true)); ?>" class="donate"></a>
      
      <div id="menu">
      	<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
      </div>
  </div>

  <div class="quran-banner">
    <?php if($page['news_ticker']): ?>
      <?php print render($page['news_ticker']); ?>
    <?php endif; ?>
  </div>

  <div class="search-bar">
    <?php if($page['search']): ?>
      <?php print render($page['search']); ?>
    <?php endif; ?>      
      <a href="<?php print url('node/add/stories', array('absolute' => true)); ?>" class="publishing-story"></a>
  </div>

  <div id="content">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

    <?php if($page['content']): ?>
      <?php print render($page['content']); ?>
    <?php endif; ?>
  </div>          

  <div style="clear:both; height: 5px;"></div>

  <div id="footer">
  	<div class="copyrights">
      <?php if($page['footer']): ?>
        <?php print render($page['footer']); ?>
      <?php endif; ?>
    </div>
  </div>
</div>