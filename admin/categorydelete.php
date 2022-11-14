<?php
$id = $_GET['id'];
$sql = "Delete from category where catid=" .$id;
$result = pg_query($conn, $sql);
header("Location: $urladmin?page=$category");