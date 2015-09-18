<?php

php?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
				<nav>
					<a id="" class="iconbox-link" href="mailto:albin.hubsch@gmail.com"><img src="./images/mail-icon.svg" alt="email-icon"></a>

					<a id="" class="iconbox-link" href="#"><img src="./images/linkedin-icon.svg" alt="linkedin-icon"></a>

					<a id="" class="iconbox-link" href="#"><img src="./images/dribbble-icon.svg" alt="dribbble-icon"></a>

					<a id="" class="iconbox-link" href="#"><img src="./images/instagram-icon.svg" alt="instagram-icon"></a>

					<a id="" class="iconbox-link" href="#"><img src="./images/skype-icon.svg" alt="skype-icon"></a>
				</nav>
			</div>
		</div>
	</section>
	<section id="my-work">
		<div class="container">
			<ul class="row my-work-canvas">
			</ul>
		</div>
	</section>
	<section id="about-me">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2>Hi, my name is Albin</h2>
					<p>
						So, apparently you already know my name and that's an awesome start! But I guess you don't know much about my education and experiences. I'm in my fifth year and close to receive my Master of Engineering in Interaction & Design. Beside my studies I have years of work experience as a Web-Developer, Designer and Interaction Designer. I'm proud of what I've achieved and love all what I do. I love making new friends so please, don't hesitate to get in touch!
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
					<p>Copyright &copy; Albin Hübsch <?=date('Y')?></p>
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

		$.jribbble.users('Kodagrux').shots({per_page: 12}).then(function(shots) {
			var html = [];

			shots.forEach(function(shot) {
				html.push('<li class="work-object col-md-3 col-sm-6">');
				html.push('<a href="' + shot.html_url + '" target="_blank">');
				html.push('<img src="' + shot.images.normal + '">');
				html.push('</a></li>');
			});
		  
			$('.my-work-canvas').html(html.join(''));
		});

	</script>
</body>
</html>