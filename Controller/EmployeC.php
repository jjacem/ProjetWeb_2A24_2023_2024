<?php
include '../config.php';
class EmployeC{
    
    public function showEmploye($employe) {
        
        echo '<table border=1 width="100%">
        <tr   align="center">
              <td>Last Name</td>
              <td>First Name</td>
              <td>Phone</td>
             <td>Email</td>
             <td>Date of birth</td>
        </tr>
        <tr>
              <td>'  .$employe->getLastName() . ' </td>
              <td>' . $employe->getFirstName() . ' </td>
              <td>' . $employe->getPassword() .' </td>
              <td>' . $employe->getPhone() .' </td>
              <td>' . $employe->getEmail() . ' </td>
              <td>' . $employe->getDate() . ' </td>
        </tr>
    </table>';
    }

public function listEmployes()
{
    $sql = "SELECT * FROM employe";
    $db = config::getConnexion();  
    try {
        $liste = $db->query($sql);
        return $liste;
    }catch(Exception $e) {
        die('Erreur:'. $e->getMessage());
    }
}

function deleteEmploye($id)
    {
        $sql="DELETE FROM employe WHERE id = :id";
        $db= config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id', $id);

        try{
            $req->execute();
        }catch(Exception $e){
            die('Erroe:' . $e->getMessage());
        }
    }
}

/*public function addEmploye()
{
    $sql = "INSERT INTO employe (id,lastName,firstName,password,phone,email,dOB) VALUES (:id,:lastName,:firstName,:password,:phone,:email,:dOB)";
    $db = config::getConnexion();
}*/


?>