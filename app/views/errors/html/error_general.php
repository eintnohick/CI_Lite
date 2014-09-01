<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Error</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<style>
body{
	padding-top:40px;
}
</style>
</head>
<body>
<div class="container">
	<div class="alert alert-danger">
		<h2 class="media-heading"><?php echo $heading; ?></h2>
		<p><?php echo $message; ?></p>
	</div>
</div>
</body>
</html>