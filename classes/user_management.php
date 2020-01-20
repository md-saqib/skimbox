<?php
include( dirname(__FILE__) . DIRECTORY_SEPARATOR . 'database.php');

class User_Management {
    private $_dbConn;
    function __construct()
    {
        $db = new Database();
        $this->_dbConn = $db->getConnection();
    }

   //  
    function addUser(){
      $user_name=$_POST['user_name'];
      $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
      $email_address=$_POST['email_address'];
      $phone_number=$_POST['phone_number'];
      $age=$_POST['age'];
      $gender=$_POST['gender'];
      $password=$_POST['password'];
      
      $insert="insert into users (user_name, first_name, last_name, email_address, phone_number, age, gender, password) values ('$user_name', '$first_name','$last_name','$email_address','$phone_number','$age','$gender','$password')";

      try {
          $smtp = $this->_dbConn->prepare($insert);
          $smtp->execute($data) or die(print_r($smtp->errorInfo(), true));
        } catch(PDOException $e) {
          echo $e->getMessage();
        }
    }

}
