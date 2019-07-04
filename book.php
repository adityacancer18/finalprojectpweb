<!DOCTYPE html>
<html>
<head>
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
        <form action="proses.php" method="post" enctype="multipart/form-data">
          <center><div>
            <label for="nama" ><font color="black">Nama Lengkap:</font></label>
            <input type="text" name="nama" class="form-control" id="nama">
          </div>
          <div>
            <label for="tempatlahir><font color="black">Tempat Tanggal Lahir:</font></label>
            <input type="text" name="tempatlahir" class="form-control" id="tempatlahir">
          </div>
          <div>
            <label for="Alamat"><font color="black">Alamat        :</font></label>
            <input type="text" name="alamat" class="form-control" id="alamat">
          </div>
          <br>
            <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
            <button type="reset" name="Submit2" class="btn btn-danger">Reset</button>
        </form>
    </div>
    <div id="copyright">
      <span>&copy; Final Project Pemrograman Web 2019 Kelas A</span>
      <span>By <a href="https://www.instagram.com/adityacancer18/">Muhammad Aditya Wahyu S (1800018055)</a>.</span>
    </div>
  </div>
</div>
</body>
</html>
