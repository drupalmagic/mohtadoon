<style type="text/css">
  .quran-banner{ 
    padding-top: 20px;
  }
</style>
<div id="wrapper">
  <div id="menu">
    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
  </div>
  <div id="header">
  	<div class="logo">
     <a href="<?php print $front_page; ?>"><img src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/almohtadoon/images/logo2.png" /></a>
    </div>      <div class="social-network">
      	<?php if($page['social_btns']): ?>
          <?php print render($page['social_btns']); ?>
        <?php endif; ?>
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

  <div id="container">

    <div class="left-section big-section" style="width: 940px;">
     	<?php if($page['content']): ?>
        <?php print render($page['content']); ?>
      <?php endif; ?>
    </div>

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
