<?php // $Id: page.tpl.php,v 1.15.4.7 2008/12/23 03:40:02 designerbrent Exp $ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
<head>
	<title><?php print $head_title ?></title>
	<meta http-equiv="content-language" content="<?php print $language->language ?>" />
	<?php print $meta; ?>
  <?php print $head; ?>
  <?php print $styles; ?>
  <!--[if lte IE 7]>
    <link rel="stylesheet" href="<?php print $path; ?>blueprint/blueprint/ie.css" type="text/css" media="screen, projection">
  	<link href="<?php print $path; ?>css/ie.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
  <![endif]-->  
  <!--[if lte IE 6]>
  	<link href="<?php print $path; ?>css/ie6.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
  <![endif]-->  
</head>

<body class="<?php print $body_classes; ?>">



<div id="header_wrap"><!--header_wrap to contain header outside of main container div-->

  <div id="header">
  <?php print l('', '<front>', array('attributes' => array('class' => 'home-link'))); ?>  
  <h1 id="logo">
    <a title="<?php print $site_name; ?><?php if ($site_slogan != '') print ' &ndash; '. $site_slogan; ?>" href="<?php print url(); ?>"><?php print $site_name; ?><?php if ($site_slogan != '') print ' &ndash; '. $site_slogan; ?></a>
  </h1>
  <div id="headerinner"><?php print $header; ?></div>

    
   
  </div>
  
   <div id="menu">
    
    <?php if (isset($primary_links)) : ?>
      <?php print theme('links', $primary_links, array('id' => 'nav', 'class' => 'header_links')) ?>
    <?php endif; ?>
    <?php if (isset($secondary_links)) : ?>
      <?php print theme('links', $secondary_links, array('id' => 'subnav', 'class' => 'header_links')) ?>
    <?php endif; ?>    
    </div>
</div><!--end #header_wrap-->

<div id="page" class="container">

  <?php if ($left): ?>
    <div class="<?php print $left_classes; ?>"><?php print $left; ?></div>
  <?php endif ?>
  
  <div class="<?php print $center_classes; ?>">
	<?php if ($breadcrumb != '') { print $breadcrumb; } ?>

    <div id="main-content">

    <?php if ($tabs != '') { print '<div class="tabs">'. $tabs .'</div>'; } ?>

    <?php if ($messages != '') { print '<div id="messages">'. $messages .'</div>';} ?>
      
    <?php if ($title != '') { print '<h2 class="page-title">'. $title .'</h2>'; } ?>      

    <?php print $help; // Drupal already wraps this one in a class  ?>

	 <?php print $content; ?>
	 </div>
     <?php print $feed_icons; ?>

  </div>

  <?php if ($right): ?>
    <div class="<?php print $right_classes; ?>"><?php print $right; ?></div>
  <?php endif ?>
  

  <?php print $scripts ?>
  <?php print $closure; ?>

</div>

  <div id="footer">
    <div id="footer2" class="container">
		
	<?php print $footer_links; ?>

	  
    <?php if ($footer): ?>
	  <?php print $footer; ?>
	<?php endif; ?>        
	<?php if ($footer_message): ?>
		<?php print $footer_message; ?>
	<?php endif; ?>

	  
	  <div id="attribution">
		<a href="http://drupal.org"><?php print theme('image', path_to_theme() . '/images/powered-by-vozmob.gif', t('Powered by VozMob'), t('Powered by VozMob')); ?></a>
		<a href="http://drupal.org"><?php print theme('image', path_to_theme() . '/images/powered-by-drupal.png', t('Drupal'), t('Powered by Drupal')); ?></a>
	  </div>

  	</div>
  </div>
</body>
</html>

