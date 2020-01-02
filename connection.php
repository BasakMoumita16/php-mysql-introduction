<?php

$firstname = $_POST['fname'];;
$lasttname = $_POST['lname'];
$gender = $_POST['gen'];
$email = $_POST['emil'];
$username = $_POST['"uname'];
$quote = $_POST['qut'];


function openConnection() {
 // Try to figure out what these should be for you
 $dbhost    = "localhost";
 $dbuser    = "root";
 $dbpass    = "";
 $db        = "becode";
 
 // Try to understand what happens here 
$pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
 
 // Why we do this here
 return $pdo;
}

