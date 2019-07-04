<html>
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
				echo "<head>List Friend</head>";
				$fp = fopen("data.txt","r");
				echo "<table border=0>";
				while ($isi = fgets($fp,80))
				{
				$pisah = explode("|",$isi);
				echo "<tr><td>Nama Lengkap</td><td>: $pisah[0]</td></tr>";
				echo "<tr><td>Tempat Tanggal Lahir </td><td>: $pisah[1]</td></tr>";
				echo "<tr><td>Alamat </td><td>: $pisah[2]</td></tr>";
				echo "<tr><td>&nbsp;<hr></td><td>&nbsp<hr></td></tr>";
				}
				echo "</table>";
				?>
			</div>
		</div>
		<div id="copyright">
			<span>&copy; Final Project Pemrograman Web 2019 Kelas A</span>
			<span>By <a href="https://www.instagram.com/adityacancer18/">Muhammad Aditya Wahyu S (1800018055)</a>.</span>
		</div>
	</div>
</div>
</body>
</html>