<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			<?php
				echo $title;
				if(isset($pageTitle)) {
					echo $titleSeparator . $pageTitle;
				}
			?>
		</title>

		<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
		<style>
			body {
				padding-top: 60px;
			}
		</style>
		<link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

		<!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="#"><?php echo $title; ?></a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#doc">Documentation</a></li>
							<li><a href="#download">Download</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<?php echo $content; ?>
		</div>
	</body>
</html>
