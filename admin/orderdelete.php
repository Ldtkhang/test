<?php

$id = $_GET['id'];

$sql = "Delete from orders where orid=" . $id;
$result = pg_query($conn, $sql);
header("Location: $urladmin?page=$order");