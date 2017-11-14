<?php

require_once("config/config.php");


?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $description;?>">
    <meta name="author" content="">

    <title><?php echo $title;?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>
 

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container" >
        <a class="navbar-brand" href="/index.php">CHEVROLET</a>
		 <?php
	if (($_SESSION['user_id'])){
		?>
		
		<a style="margin-right:10px;margin-left:100px;" href="/cabinet.php">кабинет</a>
		<a style="margin-right:10px;" href="/products.php">товары</a>
		<a  href="/logout.php">выход</a>
		
		<?php
	}
	else{
		?>
		<a style="margin-right:10px;" href="/login.php">вход</a>
		<a  href="/register.php">регистрация</a>
		<?php
		}	
		?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto" id="menu">
            <li class="nav-item active">
              <a class="nav-link" href="/index.php" data-body="Главная" data-color="red">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"   href="static.php?url=about" data-body="Узнайте больше о нас" data-color="red">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="static.php?url=services" data-body="Услуги" data-color="green">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="static.php?url=contacts" data-body="Контакты" data-color="blue">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<div id="title" style="float:right;"></div>

    <!-- Page Content -->
    <div class="container" >

      <div class="row">