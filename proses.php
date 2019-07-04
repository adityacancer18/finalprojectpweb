<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<div">


</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="images/4696.jpg" alt="" />
			<h1><a href="#">Me</a></h1>
			<span>Muhammad Aditya WS</a></span>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="index.html" title="">Home</a></li>
				<li class="current_page_item"><a href="book.php" title="">Let's Be Friend</a></li>
				<li class="current_page_item"><a href="list.php" title="">List Friend</a></li>
			</ul>
		</div>
	</div>
	<div id="main">
		<div id="welcome">
			<div class="title">
				<?php
				echo "<head><title>Konfirmasi</head></title>";
				$fp = fopen("data.txt","a+");
				$nama = $_POST['nama'];
				$tempatlahir = $_POST['tempatlahir'];
				$alamat = $_POST['alamat'];
				move_uploaded_file($nama,$tempatlahir);
				fputs($fp,"$nama | $tempatlahir | $alamat");
				fclose($fp);
				echo " Thank's, You're My Friend Righ Now <br>";
				?>
			</div>
			<p>
				
			</p>
		</div>
		<div id="copyright">
			<span>&copy; Final Project Pemrograman Web 2019 Kelas A</span>
			<span>By <a href="https://www.instagram.com/adityacancer18/">Muhammad Aditya Wahyu S (1800018055)</a>.</span>
		</div>
	</div>
</div>
</body>
</html>