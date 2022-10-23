<?php

include ("../init.php");
use Models\Teacher;

	
	$id = $_GET['id'];

	$teacher = new Teacher('','','','','','');
	$teacher->setConnection($connection);
	$teacher->getById($id);
    $first_name = $teacher->getFirstName();
    $last_name = $teacher->getLastName();
    $email = $teacher->getEmail();
    $contact_number = $teacher->getContactNumber();
    $employee_number = $teacher->getEmployeeNumber();
 

        
    $template = $mustache->loadTemplate('teachers/edit.mustache');
    echo $template->render(compact('id','teacher', 'first_name', 'last_name', 'email', 'contact_number', 'employee_number'));

?>