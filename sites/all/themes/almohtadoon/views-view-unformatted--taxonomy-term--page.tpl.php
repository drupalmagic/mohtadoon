<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<script language="javascript" type="text/javascript" src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<div id="fb-root"></div>

<script>!function(d,s,id){
var js,fjs=d.getElementsByTagName(s)[0];
    if(!d.getElementById(id)){js=d.createElement(s);
    js.id=id;js.src="https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js,fjs);
    }
}(document,"script","twitter-wjs");</script>

<?php foreach ($rows as $id => $row): ?>
  <?php print $row; ?>
<?php endforeach; ?>