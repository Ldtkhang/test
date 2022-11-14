<?php

$id = $_GET['id'];

$sql = "Delete from user where usid=" . $id;
$result = pg_query($conn, $sql);
header("Location: $urladmin?page=$user");