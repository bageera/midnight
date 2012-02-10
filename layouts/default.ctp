<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
	 <title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>
<?php 
		echo $layout->meta(); 
		echo $layout->feed();
		echo $html->css(array('reset','960','style'));
		echo $html->script(array('libs/jquery-1.4.2.min', 'libs/modernizr-1.6.min','plugins','script'));
		echo $layout->js();
		echo $scripts_for_layout;
	?>
	<meta charset="utf-8">
</head>

    <body>
    
    
		<header class="container_12">
			<h1 id="logo" class="grid_6"><?php echo $html->link(Configure::read('Site.title'), '/'); ?></h1>
			<div id="tagline" class="grid_5"><?=Configure::read('Site.tagline')?></div>
			<div class="clear"></div>
			<div id="menu" class="container_12">
				<?php echo $layout->menu('main'); ?>	
			</div> <!--! end of #container -->
		</header>
    <div class="clear"></div>
    
		<div id="main" class="container_12">
			<div id="content" class="grid_9 alpha">
				<?php echo $content_for_layout; ?>
			</div>
		
			<div id="sidebar" class="grid_3 omega">
				<?php echo $layout->blocks('right'); ?>
			</div>
		</div> <!-- end of main -->
    <div class="clear"></div>
    
		<footer id="footer" class="grid_12">
	         <div class="left">Copyright &copy; <?=date('Y')?> <?=Configure::read('Site.title')?>, All Rights Reserved.</div>
		</footer>
  


  <!-- Javascript at the bottom for fast page loading -->
  
  
 
  
  
  <!--[if lt IE 7 ]>
    
    <? 
    echo $html->script(array('libs/dd_belatedpng.js')); 
    ?>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->
    
    
    </body>
</html>
