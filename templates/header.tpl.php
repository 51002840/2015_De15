<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title><?php if( $iv && $iv->image && $iv->image['tags']){ echo htmlspecialchars($iv->image['tags'])?> - <?php } ?><?php echo Config::$siteTitle; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Config::$absolutePath; ?>media/styles.css" />
	<link rel="icon" href="<?php echo Config::$absolutePath; ?>media/favicon.ico"/>
	<script type="text/javascript" src="<?php echo Config::$absolutePath; ?>media/picturelicious.js"></script>
</head>
<body>

<div id="menu">
	<a href="<?php echo Config::$absolutePath; ?>" id="home"><img title="Home" id="logo" alt="" src="<?php echo Config::$absolutePath; ?>media/logo.png"/></a>
	
	
	
	<div class="menuItems">
		<a href="<?php echo Config::$absolutePath; ?>upload">Upload</a>
		<a href="<?php echo Config::$absolutePath; ?>users">Users</a>
		
		<a href="<?php echo Config::$absolutePath; ?>static/bookmarklet">Slide Show</a> 
		
	</div>

	<div class="userMenu">
		<?php if( $user->id ) { ?>
			Hello
			<a href="<?php echo Config::$absolutePath; ?>user/<?php echo $user->name; ?>"><?php echo $user->name; ?></a>
			(<a href="<?php echo Config::$absolutePath; ?>profile">profile</a> /
			<a href="<?php echo Config::$absolutePath; ?>logout">logout</a>)
		<?php } else { ?>
			Hello Anonymous 
			(<a href="<?php echo Config::$absolutePath; ?>login">login</a> / 
			<a href="<?php echo Config::$absolutePath; ?>register">register</a>)
		<?php } ?>
		<?php if( $user->admin ) { ?>
			<br/>Admin:
			
			<a href="<?php echo Config::$absolutePath; ?>imageimport.php">Import</a>
		<?php } ?>
	</div>
	
	<div style="clear:both;"></div>
</div>

<div id="content">




