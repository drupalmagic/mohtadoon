<div id="wrapper">
  <div id="header">
  	<div class="logo">
     <a href="<?php print $front_page; ?>"><img src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/almohtadoon/images/almohtadoon-logo.png" /></a>
    </div>      <div class="social-network">
      	<?php if($page['social_btns']): ?>
          <?php print render($page['social_btns']); ?>
        <?php endif; ?>
      </div>
      
      <a href="" class="donate"></a>
      
      <div id="menu">
      	<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
      </div>
  </div>

  <div class="search-bar">
    <?php if($page['search']): ?>
      <?php print render($page['search']); ?>
    <?php endif; ?>
  	<form>
          <input type="text" name="search" class="search-box" />
          <input type="submit" name="submit" class="search-btn" value=" " />
      </form>
      
      <a href="" class="publishing-story"></a>
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