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

  <div class="banner">
  	<?php if($page['slider']): ?>
      <?php print render($page['slider']); ?>
    <?php endif; ?>
  </div>

  <div class="quran-banner">
  <span>
  	بسم الله الرحمن الرحيم   وَإِنْ يُرِيدُوا أَنْ يَخْدَعُوكَ فَإِنَّ حَسْبَكَ اللَّهُ هُوَ الَّذِي أَيَّدَكَ بِنَصْرِهِ وَبِالْمُؤْمِنِينَ * وَأَلَّفَ بَيْنَ قُلُوبِهِمْ لَوْ أَنْفَقْتَ مَا فِي الْأَرْضِ جَمِيعًا مَا أَلَّفْتَ بَيْنَ قُلُوبِهِمْ وَلَكِنَّ اللَّهَ أَلَّفَ بَيْنَهُمْ إِنَّهُ عَزِيزٌ حَكِيمٌ
      </span>
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

  <div id="container">
  	<div class="right-section">
      <?php if($page['right_side']): ?>
        <?php print render($page['right_side']); ?>
      <?php endif; ?>
    </div>
      
      
    <div class="left-section">
     	<?php if($page['front_page']): ?>
        <?php print render($page['front_page']); ?>
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