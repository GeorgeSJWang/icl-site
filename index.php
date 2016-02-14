<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Internatioanl Companions for Learning</title>
<link rel="shortcut icon" href="imgages/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
* {
	margin:  0;
	border:  0;
	padding: 0;
}
body {
	background: #f0f0f0;
	font: 14px/20px Arial, San-Serif;
	color: #555;
	margin: 0;
}
h1 {
	text-align: center;
	font-size: 180%;
	line-height: 120%;
	padding: 5% 0;
}
h2 {
	text-decoration: underline;
	line-height: 280%;
	padding-left: 2%;
}
h3 {
	line-height: 110%;
	padding: 5% 0;
}
p {
	padding: 1%;
}
img {
	text-align: center;
	max-width: 100%;
	height: auto;
	width: auto;
}
a {
	color: #FFF;
	text-decoration: none;
	font-weight: bold;
}
a:hover {
	color: #FFF;
	text-decoration: underline;
}
header {
	background: #405580;
	width: 100%;
	height: 86px;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 100;
	opacity: 0.9;
}
#logo {
	margin-left: 45px;
	margin-top: 12px;
	float: left;
	width:  161px;
	height: 70px;
	background: url("images/ICL-logo.png");
	background-size: contain;
	background-repeat: no-repeat center;
}
nav {
	float: right;
	padding: 35px 20px 20px 0;
}
#menu-icon {
	display: hidden;
	margin-right: -15px;
	margin-top: -38px;
	width: 100px;
	height: 100px;
	background: url("images/icon.png");
}
a:hover #menu-icon {
	border-radius: 4px 4px 0 0;
}
ul {
	list-style: none;
}
nav ul li {
	display: inline-block;
	float: left;
	padding: 10px;
}
.current {
	color: #FFF;
	text-decoration: underline;
}
#doc {
	margin: 40px 40px 0 0;
}
#content {
	margin: 0 auto;
	max-width: 1140px;
}
.blueberry {
	max-width: 960px;
	margin: 110px;
}
section {
	width: 29%;
	float: left;
	margin: 2% 2%;
	text-align: center;
}
.clear {
	clear: both;
}
article {
	float: left;
	margin: 0 auto;
	width: 50%;
	height: auto;
	padding: 4%;
}
aside {
	float: right;
	margin: 0 auto;
	width: 35%;
	height: 30%;
	padding: 3%;
	text-align: center justify;

}
ul.gym li {
	padding-left: 3%;
}
footer {
	background: #333333;
	width: 100%;
	overflow: hidden;
	opacity: 0.90;
}
footer p, footer h3 {
	color: #FFF;
}
footer p a {
	color: #FFF;
	text-decoration: none;
}
ul.social li {
	display: inline;
}
ul.social li img {
	height: 50px;
}
footer.second {
	border-top: 1px solid #4D4E50;
	background-color: #333333;
	max-height: 50px;
	text-align: center;
	opacity: 0.95; 
}
@media screen and (max-width: 478px) {
	body {
		position: absolute;
	}
}
@media screen and (max-width: 740px) {
	header {
		position: absolute;
	}
	#menu-icon {
		display: inline-block;
	}
	nav ul, nav:active ul {
		display: none;;
		position: absolute;
		padding: 20px;
		background: #405580;
		border: 1px solid #FFF;
		right: 20px;
		top: 60px;
		width: 50%;
		border-radius: 2px 0 2px 2px;
	}
	nav li {
		text-align: center;
		width: 100%;
		padding: 10px 0;
		margin: 0;
	}
	nav:hover ul {
		display: block;
	}
	section {
		float: left;
		width: 100%;
		margin: 0;
		padding: 0;
	}
	article {
		float: left;
		width: 100%;
		margin: 0;
		padding: 0;
	}
	aside {
		float: left;
		width: 100%;
		margin: 0;
		padding: 0;
	}
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
</head>
<body>
	<header>
 		<a href="#" id="logo"></a>
 		<nav>
 			<a href="#" id="menu-icon"></a>
 			<ul>
				<li><a href="#" class = "current">Home</a></li>
				<li><a href="#">介紹</a></li>
				<li><a href="#">學生專區</a></li>
				<li><a href="#">Student Section</a></li>
				<li><a href="#">Facility</a></li>
				<li><a href="#">Contact </a></li>
 			</ul>
 		</nav>
 	</header>
 	<div id="doc">
 		<div id="content">
 			<div class="blueberry">
 				<ul class="slides">
 					<li><img src="images/ICL.png" /><li>
 				</ul>
 			</div>
 		</div>
 	</div>
	<div class="clear"></div>
	<article>
		<img src="images/ICL-info.jpg" />
	</article>
	<aside>
		<h3>教育部國教署委辦臺灣大學之「國際學伴」計畫：</h3>
		<ul class="gym">
			<p>媒合臺灣的國際學生與本地中小學生，以每週視訊進行文化交流及教學輔導，一學期為一期，以每學期末的相見歡為高潮，以提升本地生的國際觀及國際行動力。</p>
			<p>ICL aims to build up a bridge between the international students in Taiwan and the students from schools. This is not only for the international students to share their culture with the local students, but also for them to learn the Taiwanese culture by being the students' companions. ICL promotes the values of cultural awareness and service learning in an international format.</p>
		</ul>
	</aside>
	<div class="clear"></div>
	<section>
		<h1>視訊教學</h1>
		<img src="images/skype/photo-1.jpg" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus sodales accumsan. Maecenas accumsan malesuada pulvinar. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
	</section>
	<section>
		<h1>相見歡</h1>
		<img src="images/visit/visit-1.jpg" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae quam sed ex vehicula dictum. Vivamus congue, mi quis fringilla pellentesque, ante est sollicitudin nulla, sed scelerisque eros dui vel nunc.</p>
	</section>
	<section>
		<h1>結業式</h1>
		<img src="images/final-ceremony/photo-1.jpg" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu molestie mi. Sed at dignissim dolor. Phasellus sollicitudin nibh in nibh venenatis, ut eleifend nibh fringilla. Mauris condimentum neque at ante cursus tristique.</p>
	</section>
	<footer>
		<section>
			<h3><b>International Companions for Learning</b></h3>
			<p><b>Tel: +886-02-33668629</b><br><br>
				No.1 Sec.4 Roosevelt Road<br>
				Da’an District<br>
				Taipei, Taiwan<br>
		</section>
		<section>
			<h3>Follow Us</h3>
			<ul class="social">
				<li><a href="https://www.facebook.com/InternationalCompanionsforLearning" target="_blank"><img src="images/logos/facebook.png" /></li>
				<li><a href="https://www.youtube.com/watch?v=MB_0tw64H4U" target="_blank"><img src="images/logos/youtube.png" /></li>
				<li><a href="mailto:service.icl.tw@gmail.com" target="_blank"><img src="images/logos/gmail.png" /></li>
			</ul>
		</section>
		<section>
			<img src="images/ntu-logo.png" />
		</section>
	</footer>
	<footer class="second">
		<p>@Copyright</p>
	</footer>
</body>
</html>
