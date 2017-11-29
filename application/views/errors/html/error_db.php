<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!--?php $ci = new CI_Controller(); $ci =& get_instance(); $ci->load->helper('url'); ?-->

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Database Error</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Error 404 Page Asmith Web" />
		<link rel="shortcut icon" href="http://localhost/asmith.my.id/assets/images/items/favicon.png">
		
		<!-- css files -->
		<link href="http://localhost/asmith.my.id/assets/css/error-style.css" rel="stylesheet" type="text/css" media="all">
		<link href="http://localhost/asmith.my.id/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
		<!-- online-fonts -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
		<!--//online-fonts -->

	</head>

	<body>
		<div class="header">
			<h1>Asmith Web</h1>
		</div>
		
		<div class="w3-main">
			<div class="agile-info">
		
				<h2><?php echo $heading; ?></h2>
				<p><?php echo $message; ?></p>
				
				<div class="social">
					<ul>
						<li><a href="https://www.facebook.com/ASU.mithro" class="link facebook" target="_parent"><span class="fa fa-facebook-square"></span></a></li>
						<li><a href="https://twitter.com/ASU_mitro" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a></li>
						<li><a href="https://github.com/aasumitro" class="link github" target="_parent"><span class="fa fa-github"></span></a></li>
						<li><a href="https://www.linkedin.com/in/aasumitro/" class="link linkedin" target="_parent"><span class="fa fa-linkedin"></span></a></li>
						<div class="clear"></div>
					</ul>
				</div>
						
				<a href="http://localhost/asmith.my.id/">go home</a>
			</div>
		</div>

	</body>

</html>