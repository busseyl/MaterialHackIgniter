<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Hack'ing CodeIgniter + Bootstrap Material Design">
    <meta name="author" content="@busseyl (GitHub) ~ Team Of Monkeys Consulting Inc">

	<title>Welcome to CodeIgniter</title>

	<!-- Material Design fonts -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Bootstrap Material Design -->
	<link rel="stylesheet" type="text/css" href="/bower_components/tether/dist/css/tether.min.css">
	<link rel="stylesheet" type="text/css" href="/bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.min.css">
	<link rel="stylesheet" type="text/css" href="/bower_components/bootstrap-material-design/dist/css/ripples.min.css">
	
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="header">Welcome to CodeIgniter!</h1>

			<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

			<p>If you would like to edit this page you'll find it located at:</p>
			<code>application/views/welcome_message.php</code>

			<p>The corresponding controller for this page is found at:</p>
			<code>application/controllers/Welcome.php</code>

			<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>

			<p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

			<button class="btn btn-raised btn-primary" id="reload"><i class="material-icons">refresh</i> Reload</button>
		</div>
	</div>
</div>

<!-- jQuery -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Javascript -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Bootstrap Material Design Javascript -->
<script src="/bower_components/tether/dist/js/tether.min.js"></script>
<script src="/bower_components/bootstrap-material-design/scripts/material.js"></script>
<script src="/bower_components/bootstrap-material-design/scripts/ripples.js"></script>

<!-- Custom Javascript -->
<script>
$(function() {
	// Material Design initialization
	$.material.init();

	$('#reload').click(function() {
		window.location = '/index.php';
	});
});
</script>

</body>
</html>