<?php

include ("../init.php");
use Models\Classes;
use Models\Teacher;


$teacher= new Teacher ('','','','','','');
$teacher->setConnection($connection);
$all_teachers = $teacher->getAll();



$template = $mustache->loadTemplate('classes/add.mustache');
echo $template->render(compact('all_teachers'));

try {
    if (isset($_POST['name'])) {
    $addClass = new Classes($_POST['name'], $_POST['description'], $_POST['class_code'], $_POST['employee_number']);
    $addClass->setConnection($connection);
    $addClass->save();
    header('Location: index.php');
    vardump($addClass);
    }
}

catch (Exception $e) {
    error_log($e->getMessage());
}
?>