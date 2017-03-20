<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('/') ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('/') ?>assets/css/custom.css">
	
</head>

<body>

 	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Vinitron v0.1</a>
	    </div>
	    <div id="navbar" class="collapse navbar-collapse">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="<?= site_url() ?>">Home</a></li>
	        <li><a href="<?= site_url('about') ?>">Sobre</a></li>
	        <li><a href="#" data-toggle="modal" data-target="#addWords"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;Cadastrar</a></li>
	      </ul>
	    </div><!--/.nav-collapse -->
	  </div>
	</nav>

	<div class="container" style="margin-top: 100px">