<?php
session_start();
//$urladmin = "http://localhost:8080/STORE STOYS/admin/";
//$urluser = "http://localhost:8080/STORE STOYS/";
$home = "home.php";
$category = "category.php";
$product = "product.php";
$cart = "cart.php";
$order = "order.php";
$user = "user.php";

////////////////////// Connection ////////////////////
$host = "ec2-35-170-21-76.compute-1.amazonaws.com";
$username = "jajxacaojaletq";
$password = "17ae776be29a3180c6b6d4f040380dee13faa614cd80232a6acca049a8cd81e1";
$db = "dagt9k2si44k6p";
$conn = pg_connect('postgres://jajxacaojaletq:17ae776be29a3180c6b6d4f040380dee13faa614cd80232a6acca049a8cd81e1@ec2-35-170-21-76.compute-1.amazonaws.com:5432/dagt9k2si44k6p');

include('theme.php');
