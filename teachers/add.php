<?php

include ("../init.php");
use Models\Teacher;

$template = $mustache->loadTemplate('teachers/add.mustache');
echo $template->render();

try {
    if (isset($_POST['first_name'])) {
        $addTeacher = new Teacher($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['contact_number'], $_POST['employee_number']);
        $addTeacher->setConnection($connection);
        $addTeacher->save();
        header('Location: index.php');
        vardump($addTeacher);
    }
}

catch (Exception $e) {
    error_log($e->getMessage());

}