<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title><?php echo $title ?></title>
  <meta name="keywords" content="<?php echo $keywords ?>" />
  <meta name="description" content="<?php echo $description ?>" />
  <?php 
  foreach($styles as $style) {
   echo HTML::style('themes/default/css/'.$style.'.css');
  } 
  /*
  foreach($scripts as $script) {
   echo HTML::script('themes/default/css/'.$script.'.js');
  } 
  */
  ?>
 </head> 
 <body>
 <div id="container">
  <header>
  <div id="header">	
		<h1>PEGAS <span>CMS</span></h1>
		<p>Based on framework Kohana 3.2</p>		
		<div id="topmenu">
		<ul>
			<li><?php echo HTML::anchor('/#', 'Главная'); ?></li>	
			<li><?php echo HTML::anchor('/about/', 'О Pegas CMS'); ?></li>	
		</ul>	
		</div>

  </div>
  </header>
 
 <div id="contentcontainer">
		
		<div id="content">
	
		<!-- ### Post Entry Begin ###  -->
		
		<div class="post">
		<?php if(!empty($content))echo $content; ?>
		</div>
		
		</div>

		<!-- ### Sidebar Begin ### -->
		
		<?php echo View::factory('/main/sidebar'); ?>
		
		<!-- ### Sidebar End ### -->

	</div>
 </div>
  <footer>
  <div id="footer">
    &copy; Pegas CMS 2011-<?php echo date('Y'); ?> г
  </div>
  </footer>
 </body> 
</html>