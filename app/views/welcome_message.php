<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Welcome to CodeIgniter</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<style>
body{
	padding-top:40px;
}
</style>
</head>
<body>
<div class="container">
	<div class="jumbotron">
		<h1>Welcome to CI_Lite!</h1>
		<p>CI_Lite is a slimmed down version of <a href="https://github.com/EllisLab/CodeIgniter">Codeigniter 3.0-dev</a>.</p>
		<p>If you would like to edit this page you'll find it located at: <kbd>app/views/welcome_message.php</kbd></p>
		<p>The corresponding controller for this page is found at: <kbd>app/controllers/Welcome.php</kbd></p>
	</div>
	<p class="text-center">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' :'' ?></p>
</div>
</body>
</html>