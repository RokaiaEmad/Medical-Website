<?php

if ($_POST) {
    if (isset($_POST['register']) && $_POST['register'] == "Register") {
        /*   register means adding user to database , So to add user to database we need to do as the following:
         *   1- Get The data from the inputs
         *   2- Connect to Database
         *   3- Send Data To Database
         *   4- Return database result to user
         * 
         *   There are 2 methods to do so :
         */

        /*
         * Method 1: using OOP
         * The Best practive is using a seprate class to hold the data and perform it's function 
         * While this file acts as a controller between the view and the Model class
         */
        //step 1 : Get The data from the inputs
        // include_once 'User.php';
        // $user = new User();
        // $user->setUsername($_POST['registerUsername']);
        // $user->setPassword($_POST['registerPassword']);
        // $user->setE-mail($_POST['registerEMail']);
        // $user->setFirst Name($_POST['registerFirstName']);
        // $user->setLast Name($_POST['registerLastName']);
        // $user->setPhone Number($_POST['registerphonenumber']);
        // $user->setAge($_POST['registerAge']);
        // //step 2 , 3 & 4:
        // $result = $user->register($user);
        // if ($result == true)
        //     echo'<script>alert("added successfully")</script>';
        // else
        //     echo'<script>alert("error while registering")</script>';




        
          //Method 2 : using spagethhi code
          //We will do it with the most simple way
          // step 1 : Get The data from the inputs
          $email = $_POST['registeremail'];
          $username = $_POST['registerUsername'];
          $password = $_POST['registerPassword'];
          $FirstName=$_POST['registerFirstName'];
          $LastName=$_POST['registerLastName'];
          $Age=$_POST['registerAge'];
          $PhoneNumber=$_POST['registerPhoneNumber'];
          //var_dump($_POST);

          // step 2 : connect to database
          include_once 'databaseConfig.php';
          global $link;
          $conn = $link;
          // step 3 : send data to database
          // 3.1 create sql query
          $sql = "INSERT INTO users (FirstName,LastName,Username,Age,PhoneNumber,email,Password)"
          . " VALUES ('" . $FirstName. "' , '" . $LastName. "', '" . $username. "','".$Age."' ,'" .$PhoneNumber. "' , '" . $email. "', '" . $password. "')";
          echo $sql;
          echo '<br>';
          // 3.2 execute query
          if ($conn->query($sql) === TRUE) {
          //step 4 : return database result
          echo "New record created successfully";
          } else {
          //step 4 : return database result
          echo "Error: " . $sql . "<br>" . $conn->error;
          } 
        //echo 'controller activated';
    }
} 
