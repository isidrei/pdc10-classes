<?php
include ("../init.php");
use Models\Classes;
use Models\Teacher;

$id=$_GET['id'] ?? null;
$class= new Classes('', '', '', '', '', '');
$class->setConnection($connection);
$class->getById($id);
$class->delete();
echo "<script>window.location.href='index.php';</script>"
?>