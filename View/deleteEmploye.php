<?php
include '../controller/EmployeC.php';
$emp1=new EmployeC();
$emp1->deleteEmploye($_GET['id']);
header('Location:listEmployes.php');
?>