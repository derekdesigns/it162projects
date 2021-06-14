<?php include 'fp-config.php'?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/form.css" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;1,900&display=swap" rel="stylesheet">

</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="fa <?=$logo?>"></i></a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
    <?=makeLinks($nav1)?>
     
<!--
    <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="commissions.php">Commissions</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact Wendy</a></li>

-->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>

<!-- START LEFT COL -->
<section>
 <!-- <h2 class="PageID"><?=$PageID?></h2> -->