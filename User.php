<?php

include ('databaseConn.php');

 
class User {
 
      
       public function __construct(){
       
    }
  
    
    public function Login($email, $password){
 $DB=new Database();
        $sql = "SELECT * FROM User WHERE Email = '$email' AND Password = '$password'";
        echo $sql;
         $result=mysqli_query($DB->conn,$sql);
		$row=mysqli_fetch_array($result);
        
 
        if($row){
            $_SESSION["ID"]=$row['ID'];
            echo     $_SESSION["ID"];
            return $row['ID'];
        }
        else{
            return false;
        }
    }
    
    
      public function AddUser($name, $email,$password ){
          $DB=new Database();
 		$role="User";
       $sql= "INSERT User (Name, Email, Password) VALUES
       ('".$name."', '".$email."', '".$password."')";
 
         $result=mysqli_query($DB->conn,$sql);
         
	        
 
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
 
   
      }