<?php
	session_start();
	require_once("C:\AppServ\www\MyWeb\API\keyTest.php");
	$token = $_GET['token'];
	$input = $_GET['name'];
	if($_SESSION['account'] == null && checkKeyVaild($token, $input)==false)
	{
		echo "failure";
		header("location:https://henjorly.ddns.net/MyWeb/View/index.html");
	}
?>
<html >
  <head>
    <meta charset="utf-8">
    <title>喬丹花論壇</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="picture/flower2.jpg" type="image/ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>
    <!-- my web css -->
    <link rel="stylesheet" href="CSS/web.css">
  </head>
  <!-- body -->
  <body style="font-family:Microsoft JhengHei;font-weight:bold;">
    <div id="sitebody">
　    <div id="header">
      <!-- navBAR 區塊 -->
      <!-- 導覽列 -->
          <nav class="navbar navbar-expand-lg beta-menu navbar-dropdown align-items-center fixed-top navbar-toggleable-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="home.php">
              <img src="picture/flower2.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
              喬丹花論壇
            </a>
            <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                  <a class="nav-link" href="home.php">首頁<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#">最新情報<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">會員資料</a>
                </li>

              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" id="search" type="submit">Search</button>
              </form>
            </div>
          </nav>
      </div>

      <div id="sidebar_left"></div>
　    <div id="sidebar_right"></div>
      <!-- 中間區塊 (訪客)-->
      <div id="content">
        <img src="picture/chen3.jpg">
      </div>
      <div id="footer">
        <!-- footer -->
        <footer>
        <div>
          <a href="mailto:j860406g@gmail.com" style="color:white">聯絡我</a>
          <a href="https://line.me/ti/p/gaDiRxr8jY" style="color:white">廣告刊登</a>
        </div>
        <div>
          <p>本站言論不代表創辦人立場 純屬虛構</p>
          <p>© Copyright 2018 Jordan Flower - All Rights Reserved</p>
        </div>
      </footer>
     </div>

      </div>
    </div>

    <!-- JS控制  -->
    <!-- ................................................................................................................................................................................................. -->

    <!-- ........................................................................................................ -->

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
