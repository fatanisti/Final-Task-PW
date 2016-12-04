<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
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
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
      </ul>
    </div>
  </div>
</nav>
