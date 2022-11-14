<?php
$id = $_GET['id'];
$sql = "DELETE FROM `orders` WHERE orid = " . $id;
$result = pg_query($conn, $sql);
header("Location: $urluser?page=$order");