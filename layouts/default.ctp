<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
	 <title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>
<?php 
		echo $layout->meta(); 
		echo $layout->feed();
		echo $html->css(array('bootstrap.min','midnight'));
		echo $html->script(array('bootstrap.min'));
		echo $layout->js();
		echo $scripts_for_layout;
	?>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<meta charset="utf-8">
</head>

    <body>
    
        <div class="row">
		<header id="header">

		        <div class="span6">
			        <h1 id="logo"><?php echo $html->link(Configure::read('Site.title'), '/'); ?></h1>
			    </div>
			    <div id="tagline" class="span3"><?=Configure::read('Site.tagline')?></div>

			    <div id="menu" class="pull-right">
				    <?php echo $layout->menu('main'); ?>
			    </div> <!--! end of #container -->
		````
		</header>
        </div>


        <div class="row">
		<div id="main" class="span12">
			<div id="content" class="span8">
				<?php echo $content_for_layout; ?>
			</div>
		
			<div id="sidebar" class="span4">
				<?php echo $layout->blocks('right'); ?>
			</div>
		</div> <!-- end of main -->
		</div>
    <div class="clear"></div>
    
		<footer id="footer" class="span12">
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
