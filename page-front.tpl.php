<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <link rel="stylesheet" type="text/css" href="<?php print base_path() . path_to_theme() ?>/master.css"/>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
</head>
<body class="<?php print $body_classes; ?>" id="mainbody" >

<div id="container">

<div id="head">

<div id="hleft">

<div id="titles">
  <?php if ($logo) { ?><div id="logocontainer"><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a></div><?php } ?>
 <?php if ($site_name) { ?><h1 class='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
      <?php if ($site_slogan) { ?><div class='site-slogan'><?php print $site_slogan ?></div><?php } ?>
</div>

</div>

<div id="hright">

    <div id="secondary-links">
        <?php if (isset($secondary_links)) : ?>
          <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
        <?php endif; ?>

</div>

<div id="header_block">
<?php print $header ?>
</div>

</div>

</div><!--head-->

<div id="mast">

<div id="menu">
	        <?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?><?php } ?>
</div>

<div id="sidebars" class="clear-block">
 <div id="left-column" class="clear-block">
   <div id="front-top-1" ><?php echo $home_a; ?></div>
   <div id="front-bottom-1" ><?php echo $home_b; ?>
     <a id="sponsors" href="sponsors">Support the Cruise</a>
   </div>
 </div>
 <div id="right-column" class="clear-block">
   <div id="front-top-2" ><?php echo $home_c; ?> 
     <a id="autopalooza" href="events/auto-events">Can you perform? Tell us now.</a>
   </div>
   <div id="front-top-3" ><?php echo $home_d; ?>
     <!-- Remove Pre Cruise Car Show Schedule per Shanon 2/12/2012
     <a id="pedal-car" href="pre-cruise-car-shows">Pre Cruise Car Show Schedule</a>
     <!-->
   </div>
   <div id="front-bottom-2" class="clear-block" ><?php echo $home_e; ?>
     <a id="carshow" href="car-show">Get the best parking spot on the strip at Cruise Headquarters.</a>
   </div>
 </div>
 <div id="bottom-column" class="clear-block">
   <div id="left-info"><?php echo $left_info; ?>
     <!-- Remove Cruise Passport Information per Shanon 2/12/2012
     <a id="left-info" href="cruise-passport">Cruise Passport.</a>
     <!-->
   </div>
   <div id="right-info"><?php echo $right_info; ?>
     <a id="right-info" href="the-midway">Latest News.</a>
   </div>
 </div>
</div><!--sidebars-->

</div>

</div>

<div id="footer-container">
  <div id="footer-a">
    <a id="dorian" target="_blank" href="http://www.dorianford.net">Dorian Ford</a>
  </div>
  <div id="footer-a1">
    <a id="moran" target="_blank" href="http://www.moranchevrolet.com">Moran Chevrolet</a>
  </div>
  <div id="footer-b">
    <a id="dda" target="_blank" href="http://www.gratiotinclinton.com">Clinton Township DDA</a>
  </div>
  <div id="footer-c">
    <a id="cruise" href="http://www.ctgratiotcruise.com">Clinton Township Gratiot Cruise</a>
  </div>
  <div id="footer-d">
    <a id="autopalooza-footer" target="_blank" href="http://www.autopalooza.org">AutoPalooza</a>
  </div>
</div>

<div id="footer">              
    <?php if ($footer): ?> <div id="foot-block"><?php print $footer ?> </div><?php endif; ?><?php if ($footer_message): ?> <?php print $footer_message ?> <?php endif; ?> 
</div>

</div> <!--container-->
  <?php print $closure ?>
</body>
</html>
