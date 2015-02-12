<?php
require 'app/models/model.php';
var_dump("index"); die;
require 'app/controllers/controller.php';

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?= isset($content['title']) ? $content['title'] : 'Ryan Spencer'; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">Ryan Spencer</h1>
                <nav>
                    <ul>
                        <li><a href="index.php?page=see_it_work">See It Work</a></li>
                        <li><a href="index.php?page=view_the_code">View the Code</a></li>
                        <li><a href="index.php?page=qa">Q &amp; A</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">
                <article>
                    <header>
                        <h1><?= isset($content['title']) ? $content['title'] : ''; ?></h1>
                        <p><?= isset($content['content']) ? $content['content'] : ''; ?></p>
                    </header>
                    <footer>
                        <h3><?= isset($content['footer-title']) ? $content['footer-title'] : ''; ?></h3>
                        <p><?= isset($content['footer-content']) ? $content['footer-content'] : ''; ?></p>
                    </footer>
                </article>
                <aside>
                    <h3>Ryan Spencer</h3>
                    <p>I write code.</p>
                </aside>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <p>2015 &copy; Ryan Spencer</p>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!--         <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script> -->
    </body>
</html>
