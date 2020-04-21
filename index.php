<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Massively by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

		<!-- <link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css"> -->
			</head>
			
		<body class="is-preload">
			
				
			<div id="wrapper" class="fade-in">
<div id="v">
				<img src="images/log17-2.svg" alt="Golden" class="logo" height="40">

			
				
				<div class="reg">
					<?php
		require "db.php";
		?>
		<?php if( isset($_SESSION['logged_user'])): ?>
		<span id="p">Авторизован</span><br>
			 <?php echo $_SESSION['logged_user']->login; ?>
						<a href="/logout.php"style="text-decoration: none;">Выйти</a><br>
			<?php else : ?>
			<span id="p">Вы не авторизованы!</span><br>
		<a href="/login.php" style="text-decoration: none; 
		"><span> </span>Вход <span>  </span> </a>
	<a href="/signup.php" style="text-decoration: none;"> Регистрация</a>
	<?php endif; ?>
			</div> 
</div>

									<div id="intro">
									
			
			<a href="#" class="image main"><img src="images/m2.png" style="margin-bottom: -130px;"; /></a>

						<!-- <h1>агентство кибернетических<br />
						технологий</h1> -->

						<p>Турнир киберспортивной CRM-платформы <a href="https://twitter.com/ajlkn">@ajlkn</a> для долгосрочных обязательств <a href="https://html5up.net">HTML5 UP</a><br />
						 <a href="https://html5up.net/license">Creative Commons license</a></p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo">Массивно</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.html">Это массово</a></li>
							<li><a href="generic.html">Общая страница</a></li>
							<li><a href="elements.html">Справочник элементов</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date" style="color: #FFDD00">
									 25 Апреля 2017</span>
									<h2><a href="#" style="color: #00FCFF">Мы знаем,<br />
									как захватить аудиторию</a></h2>
									<p style="color: #FFDD00">Интеграция white-label решения<br />
									фирменной CRM-платформы esport на вашем сайте<br />
									вывод продукции на новые рынки.</p>
								</header>
								<a href="#" class="image main"><img src="images/KiberUSA.jpg" alt="" /></a>
								<ul class="actions special">
									<li><a href="#" class="button large" style="border-color: #00FCFF">Полная история</a></li>
								</ul>
							</article>

						<!-- Posts -->
							<section class="posts">
								<article>
									<header>
										<span class="date">25 Апреля 2017</span>
										<h2><a href="#">Однако, с<br />
										самыми челюстями</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/171.jpg" alt="" /></a>
									<p>Собственный инструмент: ПО для управления LAN-центрами

Прямая интеграция с платформой киберспорта

Встроенная система лояльности (CRM)

</p>
									<ul class="actions special">
										<li><a href="#" class="button">Полная история</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date" style="color: #fff">25 Апреля 2017</span>
										<h2><a href="#">
										необходимо финансирование АВ</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/172.jpg" alt="" /></a>
									<p>Нанимать эффективные и экономичные стримеры на Twitch, YouTube, VK и Facebook
									новости, обзоры и статьи на известных IT</p>
									<ul class="actions special">
										<li><a href="#" class="button">Полная история</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">7 Апреля 2017</span>
										<h2><a href="#">Ante mattis<br />
										interdum dolor</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Полная история</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">10 Апреля 2017</span>
										<h2><a href="#">Tempus sed<br />
										nulla imperdiet</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Полная история</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">11 Апреля 2017</span>
										<h2><a href="#">Odio magna<br />
										sed consectetur</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Полная история</a></li>
									</ul>
								</article>
								<article>
									<header>
										<span class="date">April 7, 2017</span>
										<h2><a href="#">Augue lorem<br />
										primis vestibulum</a></h2>
									</header>
									<a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
									<ul class="actions special">
										<li><a href="#" class="button">Полная история</a></li>
									</ul>
								</article>
							</section>

						<!-- Footer -->
							<footer>
								<div class="pagination">
									<!--<a href="#" class="previous">Prev</a>-->
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra" style="color: red ">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next" style="color: red;">Next</a>
								</div>
							</footer>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" style="border-color: red" value="Send Message" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>1234 Somewhere Road #87257<br />
								Nashville, TN 00000-0000</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(000) 000-0000</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">info@untitled.tld</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<script src="js/jquery-3.3.1.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
					 <script type="text/javascript"></script>	

	</body>
</html>