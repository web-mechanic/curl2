<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>This is a website for sharing stuffs</title>
	<meta name="author" content="Thomas Lissens">
    <meta name="robots" content="index,follow" />    
    <meta name="keywords" content="webdesign, portfolio, thomas lissens, web, print, belgique, liege"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Voici une application qui vous permettra de partager vos liens. ">
	<link rel="stylesheet" type="text/css" href="<?php echo(site_url().STYLE_DIR); ?>" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	
	<?php echo $vue;?>
<div class="footer">
<footer>	
<p>If you have something to share, just do it!</p>
</footer>	
</div>
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
	<script src='<?php echo site_url(); ?>web/js/code.js'></script>
</body>
</html>