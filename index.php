<?php
/*  $sd = explode(".", $_SERVER['SERVER_NAME'])[0];
  $loc = "";
  if($sd == "mail"){
    $loc = "http://zpanel.hemshrestha.com.np/etc/apps/webmail";
  }
  else if($sd == "zpanel" || $sd == "panel" || $sd == "zp"){
    $loc = "http://zpanel.hemshrestha.com.np/";
  }
  else if($sd == "db"){
    $loc = "http://zpanel.hemshrestha.com.np/etc/apps/phpmyadmin";
  }
  else if($sd == "files"){
    $loc = "http://zpanel.hemshrestha.com.np/?module=ajaxplorer&action=Login";
  }
  else if($sd == "chat"){
    $loc = "http://chat.hemshrestha.com.np:8000";
  }
  if($loc != ""){
    header('Location: '.$loc);
    exit;
  }*/
?><!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Host your site for free</title>
    <meta name="keywords" content="webhosting, free space, raspberry pi, pihosting, raspberry hosting server, free hosting server in nepal" />
    <meta name="description" content="MeroServer is a web hosting service provider in Nepal with Raspberry Pi as Hosting Server. We are here proud to offer the free webhosting service with individual zpanel dashboard and guarantee the customer satisfaction. Any feedback regarding the improvement to our service will be highly appreciated." />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
  </head>
  <body>
    <!-- 
    _    _                     ___   _                    _    _
   | |  | |                   /  _ \| |                  | |  | |
   | |__| | ___  _ __ ___     | '_'-| |_   _ _  __   ___ | |  | |_    ___
   |  __  |/ _ \| '_ ' _  \    \__ \|  _ \| '_|/ _ \/ __\|  | |  _ \ / _  \
   | |  | |  __/| | | | | |   --,_' | || || / :  __/\__ \| |_ | || || '_' |
   |_|  |_|\___||_| |_| |_|   \____/|_||_||_|  \___|\___/|___||_||_| \__,_|

    -->
    <!-- start header -->
    <?php include('header.php');?>
    <!-- end header -->
   
    <!-- start page -->
    <div id="page">
      <div class="bgtop">
        <div class="bgbtm">
          <!-- start content -->
          <div id="content">
            <div class="post">
              <h1 class="title">About Us </h1>
              <p class="byline">
                <small>Posted on february 25th, 2014</small> by <a href="http://www.hemshrestha.com.np" target="_blank">Hem</a>
              </p>
              <div class="entry">
                <p><img src="images/pihost.jpg" alt="Raspberry Meroserver" width="100px" height="125px" class="left" />
                  <strong>MeroServer</strong> is a web hosting service provider in Nepal with Raspberry Pi as Hosting Server. 
                  We are here proud to offer the free webhosting service with individual zpanel dashboard and guarantee the customer satisfaction.
                  Any feedback regarding the improvement to our service will be highly appreciated. For any feedback or query <a href="contact.php">click here</a></p>
              </div>
              <p class="meta"><a href="/about" class="more">Read More</a> &nbsp;&nbsp; &nbsp;&raquo;&nbsp;&nbsp;</p>
            </div>
            <div class="post">
              <h2 class="title">Our Server Location</h2>
              <p class="byline">
                <small>Posted on february 25th, 2014</small> by <a href="http://www.hemshrestha.com.np" target="_blank">Hem</a>
              </p>
              <div class="entry">
                <p>Click <a href="http://www.tcpiputils.com/traceroute/pi.hemshrestha.com.np" target="_blank">here</a> 
                  to trace and find out our location of our server via <a href="http://tcpiputils.com/traceroute/pi.hemshrestha.com.np" target="_blank">TCPIPUTILS</a>.</p>
              </div>
              <p class="meta"><a href="/about.php" class="more">Read More</a> &nbsp;&nbsp; &nbsp;&raquo;&nbsp;&nbsp;</p>
            </div>
            <div class="post">
              <h2 class="title">Features on MeroServer</h2>
              <p class="byline"><small>Posted on february 25th, 2014</small> by <a href="http://www.hemshrestha.com.np" target="_blank">Hem</a></p>
              <div class="entry">
                <blockquote>
                  <p>&#8220;We from the team of MeroServer highly encourage you to upload the single static page and it is totally free. &#8221;</p>
                  <p class="align-right"> - MeroServer team </p>
                </blockquote>
                <p>Don't have a domain name, no need to worry <a href="http://register.mos.com.np" target="_blank">click here</a> 
                  to get the free ".com.np" domain. All you need is a scan copy of your citizenship or driving liscense and register it online. 
                  For more query <a href="/contact.php">contact us</a>. So guys enjoy with your own website with everything for free. cheers !!!!!. 
                </p>
              </div>
              <p class="meta"><a href="/help.php" class="more">Read More</a> &nbsp;&nbsp; &nbsp;&raquo;&nbsp;&nbsp;</p>
            </div>
            
          </div>
          <!-- end content -->
          
          <!-- start sidebar -->
          <?php include('sidebar.php');?>
          <!-- end sidebar -->
          
          <div style="clear:both">&nbsp;</div>
        </div>
      </div>
    </div>
    <!-- start footer -->
    <?php include('footer.php');?>
    <!-- end footer -->
  </body>
</html>
