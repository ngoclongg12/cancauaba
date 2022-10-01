<?php

include $_SERVER["DOCUMENT_ROOT"] . "/cancauaba/connecting/connectDB.php";
$configHref = include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

$id_sp = $_GET["id_sp"];

$sql = "DELETE FROM danhsach_sp WHERE ID='$id_sp'";
$query = mysqli_query($connect, $sql);

header('location: '.$configHref.'/admin/trangquantri.php?Admin=product_show');

?>

