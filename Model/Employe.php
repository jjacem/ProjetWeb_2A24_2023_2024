<?php

class Employee{
    private $lastName;
    private $firstName;
    private $password;
    private $phone;
    private $email;
    private $dOB;

    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName($a){
        $this->lastName=$a;
    }
//////////////////////////////////////////
    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($b){
        $this->firstName=$b;
    }
//////////////////////////////////////////
    public function getPassword(){
        return $this->password;
    }

    public function setPassword($c){
        $this->password=$c;
    }
/////////////////////////////////////////////
    public function getPhone(){
        return $this->phone;
    }

    public function setPhone($d){
        $this->phone=$d;
    }
///////////////////////////////////////////////
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $this->email=$e;
    }
/////////////////////////////////////////////
    public function getDate(){
        return $this->dOB;
    }

    public function setDate($f){
        $this->dOB=$f;
    }

   /* public function __construct(){
        $this->firstName ="";
        $this->lastName="";
        $this->password="";
        $this->phone="";
        $this->email="";
        $this->dOB="";
    }*/

    public function __construct($a,$b,$c,$d,$e,$f){
        $this->firstName =$a;
        $this->lastName=$b;
        $this->password=$c;
        $this->phone=$d;
        $this->email=$e;
        $this->dOB=$f;
    }

    public function Afficher(){
        echo "nom :".$this->firstName;
        echo "prenom :".$this->lastName;
        echo "password :".$this->password;
        echo "phone :".$this->phone;
        echo "email :".$this->email;
        echo "Date of Birth :".$this->dOB;
    }
}
$personne1=new Employee("foulen ","ben foulen ","1234 ","2222 ","test@gmail.com ","12-02-2022");
$personne1->Afficher();












?>