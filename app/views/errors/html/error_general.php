<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Error</title>
<link rel="stylesheet" href="/assets/css/bootstrap.css">
<link rel="stylesheet" href="/assets/css/app.css">
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