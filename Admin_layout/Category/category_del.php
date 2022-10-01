<?php
$config = include $_SERVER['DOCUMENT_ROOT'] . '/cancauaba/config/config.php';
header('location: '.$config.'/admin/trangquantri.php?Admin=category_show');
die('fsdfsd');
include $_SERVER['DOCUMENT_ROOT'] . '/cancauaba/connecting/connectDB.php';

$id_dm = $_GET["id"];

$sql = "DELETE FROM danhsach_dm WHERE ID='$id_dm'";
$query = mysqli_query($connect, $sql);



?>

