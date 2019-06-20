<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
<head>
	<title>Viking Robotics Society -- Portland State University</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="/assets/css/main.css" />
	<link rel="icon" href="/images/vrs_logo_white_icon.png"/> 
</head>

<body class="is-preload">
<?php
include "./parts/header.html";
?>
	<!-- Banner -->
	<section id="banner">
		<div class="inner">
			<h1>Viking Robotics Society</h1>
			<p>We are the Robotics Club at Portland State University</p>
		</div>
		<video autoplay loop muted playsinline src="/images/banner.mp4"></video>
	</section>

	<!-- Highlights -->
	<section class="wrapper">
		<div class="inner">
			<header class="special">
				<h2>Calendar</h2>
				<iframe src="https://calendar.google.com/calendar/embed?src=pdx.edu_v68cnhjp6329n0o48pqgsiaric%40group.calendar.google.com&ctz=America%2FLos_Angeles" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
			</header>
    </div>
<?php 
include "./parts/events.html";
?>

		<!-- Scripts -->
		<script src="/assets/js/jquery.min.js"></script>
		<script src="/assets/js/browser.min.js"></script>
		<script src="/assets/js/breakpoints.min.js"></script>
		<script src="/assets/js/util.js"></script>
		<script src="/assets/js/main.js"></script>
	</section>
	<!-- Footer -->
<?php
include "./parts/footer.html";
?>
</body>
</html>
