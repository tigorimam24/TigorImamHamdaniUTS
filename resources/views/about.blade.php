<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<style>

* {
	padding:0;
	margin:0;
	font-family: sans-serif;
}
a {
	color: inherit;
	text-decoration: none;
}
.medsos {
	padding:5px 0;
	background-color: #34495E;
}
.medsos ul li {
	display: inline-block;
	color: #fff;
	margin-right: 10px;
}
.container {
	width:80%;
	margin:0 auto;
}
.container:after {
	content:'';
	display: block;
	clear: both;
}
header h1 {
	float: left;
	padding:15px 0;
	color: #34495E;
}
header ul {
	float: right;
}
header ul li {
	display: inline-block;
}
header ul li a {
	padding:25px 20px;
	display: inline-block;
}
header ul li a:hover {
	background-color: #34495E;
	color: #fff;
}
.active {
	background-color: #34495E;
	color: #fff;
}
.banner {
	height: 60vh;
	background-image: url('img/background.jpg');
	background-size: cover;
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}
.banner:after {
	content:'';
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: rgba(20, 143, 119, .6);
}
.banner h2 {
	color: #fff;
	z-index: 1;
	padding: 20px 25px;
	border:3px solid #fff;
}
section {
	padding:50px 0;
}
section h3 {
	text-align: center;
	padding:20px 0;
	color: #34495E;
	margin-bottom: 25px;
}
.about p {
	color: #666;
	word-spacing: 2px;
	line-height: 25px;
	margin-bottom: 20px;
	text-align: center;
}
.box {
	color: #34495E;
}
.box:after {
	content: '';
	display: block;
	clear: both;
}
.box .col-4 {
	width:25%;
	padding:20px;
	box-sizing: border-box;
	text-align: center;
	float: left;
}
.icon {
	width:70px;
	height:70px;
	border:1px solid;
	border-radius: 50%;
	text-align: center;
	line-height: 70px;
	font-size: 20px;
	margin:0 auto;
}
.box .col-4 h4 {
	margin:20px 0;
}
footer {
	padding:30px 0;
	background-color: #333;
	color: #fff;
	text-align: center;
}
.bg-loader {
	background-color: #eee;
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 9999;
	display: flex;
	justify-content: center;
	align-items: center;
}
.bg-loader .loader {
	width:100px;
	height: 100px;
	border:3px solid #fff;
	border-radius: 50%;
	border-top-color: #34495E;
	border-right-color: #34495E;
	border-bottom-color: #34495E;
	animation: puterin .8s linear infinite;
}
.label {
	background-color: #34495E;
	color: #fff;
}
@keyframes puterin {
	100% {
		transform: rotate(360deg);
	}
}
@media screen and (max-width: 768px){
	.container {
		width:90%;
	}
	header h1 {
		text-align: center;
		float: none;
	}
	header ul {
		text-align: center;
		float: none;
	}
	.box .col-4 {
		width:100%;
		float: none;
		margin-bottom: 20px;
	}
}
    </style>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
				<li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.html">AHLI KUNCI PONOROGO</a></h1>
			<ul>
				<li><a href="home">HOME</a></li>
				<li class="active"><a href="about">ABOUT</a></li>
				<li><a href="contact">CONTACT</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
		</div>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<img src="img/background.jpg" width="100%">
			<h3>ABOUT</h3>
			<p>Ahli Kunci Ponorogo yang beralamat di Jl. Jenderal Sudirman, Kecamatan Ponorogo, Kabupaten Ponorogo, Jawa Timur </p>
			<p>Buka setiap hari mulai pukul 07.00 pagi sampai 16.00 sore </p>
			<p>Layanan Duplikat Kunci dan Membuat Kunci yang Hilang, untuk semua jenis kunci seperti kunci motor, kunci mobil, dan kunci pintu</p>
			<p><strong>Menerima Panggilan</strong></p>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2020 - Tigor Imam H. All Rights Reserved.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>