<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device.width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,
    minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<meta name="keywords" content="keywords">
	<meta name="description" content="description">
    <title>Document</title>
    <link rel="stylesheet" href="/dev.bx/Mockup/css/styles.css">
	<link rel="stylesheet" href="/dev.bx/Mockup/fonts/Roboto/stylesheet.css">
	<link rel="stylesheet" href="/dev.bx/Mockup/css/bootstrap.min.css");?>
</head>
<body>
<header class="w-100 d-flex align-items-center">
	<div class="w-100 row align-items-center justify-content-between d-none d-lg-flex">
		<div class="col-6 col-xl-5 menu">
			<nav>
				<ul class="d-flex align-items-center">
					<a href="index.php">
						<li>Home</li>
					</a>
					<a href="product-list.php">
						<li>Product list</li>
					</a>
					<a href="detail.php">
						<li>Detail page</li>
					</a>
					<a href="auth.php">
						<li>Login page</li>
					</a>
				</ul>
			</nav>
		</div>
		<div class="col-2 ff-bold-24 text-center">
			<a class="orange" href="index.php">TRADE</a>
		</div>
		<div class="col-4 col-xl-5 text-right">
			<a class="d-inline-flex" href="auth.php"><div class="btn ff-normal-14 bg-orange">Free Trial</div></a>
		</div>
	</div>

	<div id="mobNav" class="overlay d-lg-none">
		<div class="overlay-content">
			<a href="index.php">
				Home
			</a>
			<a href="product-list.php">
				Product list
			</a>
			<a href="detail.php">
				Detail page
			</a>
			<a href="auth.php">
				Login page
			</a>
		</div>
	</div>
	<span class="d-lg-none">
		<svg class="ham ham3" viewBox="0 0 100 100" width="80" onclick="$('#mobNav').toggleClass('active');$(this).toggleClass('active');">
		  <path
			  class="line top"
			  d="m 70,33 h -40 c -11.092231,0 11.883874,13.496726 -3.420361,12.956839 -0.962502,-2.089471 -2.222071,-3.282996 -4.545687,-3.282996 -2.323616,0 -5.113897,2.622752 -5.113897,7.071068 0,4.448316 2.080609,7.007933 5.555839,7.007933 2.401943,0 2.96769,-1.283974 4.166879,-3.282995 2.209342,0.273823 4.031294,1.642466 5.857227,-0.252538 v -13.005715 16.288404 h 7.653568" />
		  <path
			  class="line middle"
			  d="m 70,50 h -40 c -5.6862,0 -8.534259,5.373483 -8.534259,11.551069 0,7.187738 3.499166,10.922274 13.131984,10.922274 11.021777,0 7.022787,-15.773343 15.531095,-15.773343 3.268142,0 5.177031,-2.159429 5.177031,-6.7 0,-4.540571 -1.766442,-7.33533 -5.087851,-7.326157 -3.321409,0.0092 -5.771288,2.789632 -5.771288,7.326157 0,4.536525 2.478983,6.805271 5.771288,6.7" />
		  <path
			  class="line bottom"
			  d="m 70,67 h -40 c 0,0 -3.680675,0.737051 -3.660714,-3.517857 0.02541,-5.415597 3.391687,-10.357143 10.982142,-10.357143 4.048418,0 17.88928,0.178572 23.482143,0.178572 0,2.563604 2.451177,3.403635 4.642857,3.392857 2.19168,-0.01078 4.373905,-1.369814 4.375,-3.392857 0.0011,-2.023043 -1.924401,-2.589191 -4.553571,-4.107143 -2.62917,-1.517952 -4.196429,-1.799562 -4.196429,-3.660714 0,-1.861153 2.442181,-3.118811 4.196429,-3.035715 1.754248,0.0831 4.375,0.890841 4.375,3.125 2.628634,0 6.160714,0.267857 6.160714,0.267857 l -0.178571,-2.946428 10.178571,0 -10.178571,0 v 6.696428 l 8.928571,0 -8.928571,0 v 7.142858 l 10.178571,0 -10.178571,0" />
		</svg>
	</span>
</header>