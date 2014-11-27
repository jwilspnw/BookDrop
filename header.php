<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Account: cs250001_01
File: U:\htdocs\labs\lab8
Honor Code: We pledge that this code represents our own work: name(s)
-->
<?php
	$db = new SQLite3('bookDrop.db');
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" ></script>
	<script src="final.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="final.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Book Drop</title>
	<meta name="description" content="CS 250 Lab 8" />
	<meta name="keywords" content="CWU, CS, 250" />
	<meta name="author" content="Your Names" />
</head>
<body>
	<div id="main">
	<div id="banner">
		<a href="main.php"><img src="icon.jpg"></a>
		<h1>Book Drop</h1>
	</div>
	<div id="nav">
		<select id="searchFilter" class="searchBar">
			<option value="prof">Search by Professor</option>
			<option value="classNum">Search by Class Number</option>
			<option value="major">Search by Major</option>
		</select>
		<input class="searchBar" type="text" id="searchBox" value="" placeholder="Jagodzinski"/>	
		<button id="postBook">Post a book</button>
	</div>
	<div id="content">	