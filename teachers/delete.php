<?php

include ("../init.php");
use Models\Teacher;

$id=$_GET['id'] ?? null;
$teacher= new teacher ('','','','','','');
$teacher->setConnection($connection);
$teacher->getById($id);
$teacher->delete();
echo "<script>window.location.href='index.php';</script>";
exit;

?>