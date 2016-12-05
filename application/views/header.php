<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->library('session');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/user.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Pak JuLi Store</h1>      
    <p>Be Stylish and Fashionable</p>
  </div>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="144">
    <ul class="nav navbar-nav"">
      <li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home"></span></a></li>
      <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="menswear.html">Menswear</a></li>
      <li><a href="womenswear.html">Womenswear</a></li>
      <li><a href="dress.html">Dress</a></li>
      <li><a href="shoesformen.html">Shoes For Men</a></li>
      <li><a href="shoesforwomen.html">Shoes For Women</a></li>
      <li><a href="accessories.html">Accessories</a></li>
    </ul></li>
      <li><a href="#">Deals</a></li>
      <li><a href="#">Stores</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if (isset($_SESSION['user_name'])): ?>
        <li>
          <a href="<?php echo base_url(); ?>index.php/coba1">
            <span class="glyphicon glyphicon-user"></span>
            <?php echo " ".$_SESSION['user_name']." "; ?>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url(); ?>index.php/logout">
            <span class="glyphicon glyphicon-log-out"></span> Logout
          </a>
        </li>
      <?php else: ?>
        <li>
          <a href="<?php echo base_url(); ?>index.php/login">
            <span class="glyphicon glyphicon-log-in"></span>
             Login
          </a>
        </li>
      <?php endif ?>
    </ul>
</nav>
