<?php

$url = explode('/',@$_GET['url'])[0];
echo $url;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--// TITLE //-->
    <title>Menu UI/UX</title>

    <!--// METAS //-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--// LINKS //-->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <header>
        <div class="container">

            <div class="logo__desktop"><a href="index.html">LOGOMARCA</a></div><!--logo__desktop-->

            <nav class="desktop">
                <ul>
                    <li><a <?php
                      if($url == 'home'){
                      echo 'class="selected"';
                      } ?> href="home">Home</a></li>
                    <li><a <?php
                      if($url == 'sobre'){
                      echo 'class="selected"';
                      } ?>href="sobre">Sobre</a></li>
                    <li><a <?php
                      if($url == 'services'){
                      echo 'class="selected"';
                      } ?>href="services">Services</a></li>
                    <li><a <?php
                      if($url == 'contato'){
                      echo 'class="selected"';
                      } ?>href="contato">Contato</a></li>
                </ul>
            </nav><!--desktop-->

            <nav class="mobile">

                <div class="logo__mobile"><a href="index.html">LOGOMARCA</a></div><!--logo__mobile-->

                <h3><i class="fa fa-bars"></i></h3>

                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="sobre">Sobre</a></li>
                    <li><a href="services">Services</a></li>
                    <li><a href="contato">Contato</a></li>
                </ul>
            </nav><!--mobile-->

        <div class="clear"></div>
        </div><!--container-->
    </header>