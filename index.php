<?php

php?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Albin Hubsch">

	<meta name="theme-color" content="#12292A">

	<title>Albin Hübsch</title>

	<!-- INCLUDE STYLESHEETS -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="./style/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./style/base.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="./"><h1>Albin Hübsch</h1></a>
				</div>
			</div>
		</div>
	</header>
	<section id="main-nav">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<nav>
						<a id="" class="iconbox-link" href="mailto:albin.hubsch@gmail.com" title="Send an email to Albin"><img src="./images/mail-icon.svg" alt="email-icon"></a>

						<a id="" class="iconbox-link" href="https://se.linkedin.com/in/albinhubsch" target="_blank" title="Albin's LinkedIn"><img src="./images/linkedin-icon.svg" alt="linkedin-icon"></a>

						<a class="iconbox-link" href="https://dribbble.com/albinhubsch" target="_blank" title="Albin's Dribbble"><img src="./images/dribbble-icon.svg" alt="dribbble-icon"></a>

						<a class="iconbox-link" href="https://github.com/albinhubsch" target="_blank" title="Albin's GitHub"><img src="./images/github-icon.svg" alt="github-icon"></a>

						<a id="" class="iconbox-link" href="https://instagram.com/albinhubsch/" target="_blank" title="Albin's Instagram"><img src="./images/instagram-icon.svg" alt="instagram-icon"></a>

						<!-- <a id="" class="iconbox-link" href="skype:albin.hubsch?call"><img src="./images/skype-icon.svg" alt="skype-icon"></a> -->
					</nav>
				</div>
			</div>
		</div>
	</section>
	<section id="my-work">
		<div class="container">
			<ul class="row my-work-canvas">
			</ul>
			<div class="col-md-12 text-center rm-mp">
				<a href="https://dribbble.com/albinhubsch" target="_blank"><img src="/images/grid-icon.svg" alt="">See more work by me</a>
			</div>
		</div>
	</section>
	<section id="about-me">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2>Hi, my name is Albin</h2>
					<hr class="short-hr">
					<p>
						So, apparently you already know my name and that's an awesome start! But I guess you don't know much about my education and experiences. I'm in my fifth year and close to receive my Master of Science in Engineering, Interaction & Design. Beside my studies I have years of work experience as an Web-Developer, Designer and also Interaction Designer. I'm proud of what I've achieved and love all what I do. I love making new friends so please, don't hesitate to get in touch!
					</p>
				</div>
			</div>
		</div>
	</section>
	<div class="section-title"></div>
	<div class="shots"></div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p style="font-size:12px;">Copyright &copy; Albin Hübsch <?=date('Y')?></p>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="./js/portfolio-js.js"></script>
	<script src="./js/jribbble.js"></script>
	<script>
		header.setHeight();

		$.jribbble.setToken('0dffa499fe2fef6b34901a3717ca64a305706432e70075441c8a747e84230993');

		$.jribbble.users('albinhubsch').shots({per_page: 8}).then(function(shots) {
			var html = [];

			shots.forEach(function(shot) {
				html.push('<li class="work-object col-md-3 col-sm-4 col-xs-6">');
				html.push('<a href="' + shot.html_url + '" target="_blank">');
				html.push('<img src="' + shot.images.normal + '">');
				html.push('</a></li>');
			});
		  
			$('.my-work-canvas').html(html.join(''));
		});

	</script>
</body>
</html>