<?php 

$nom=isset($_POST["firstName"]);
$prenom=isset($_POST["LastName"]);
$phone=isset($_POST["telephone"]);
$email=isset($_POST["email"]);
$dob=isset($_POST["DateOfBirth"]);
$pass1=isset($_POST["password1"]);
$pass2=isset($_POST["password2"]);

include "../controller/EmployeC.php";
include "../model/employe.php";

$employe=new Employee($nom,$prenom,$pass1,$phone,$email,$dob,);
$emplo=new EmployeC();
$emplo->showEmploye($employe);

?>