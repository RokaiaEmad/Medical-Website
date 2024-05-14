<?php

if ($_POST) {
    if (isset($_POST['forget']) && $_POST['forget'] == "Forget") {
        /*   login means check if user already exist in database , So we need to do as the following:
         *   1- Get The data from the inputs
         *   2- Connect to Database
         *   3- Check if user exist in database
         *   4- Return database result to user
         * 
         *   There are 2 methods to do so :
         */

        /*
         * Method 1: using OOP
         * The Best practive is using a seprate class to hold the data and perform it's function 
         * While this file acts as a controller between the view and the Model class
         */

        /*
          //step 1 : Get The data from the inputs
          include_once 'User.php';
          $user = new User();
          $user->setUsername($_POST['username']);
          $user->setPassword($_POST['password']);
          //step 2 , 3 & 4:
          $result = $user->login($user);
          if ($result == true) {
          echo'<script>alert("user found")</script>';
          echo '<script>location.href="../welcome.php";</script>';
          } else {
          echo'<script>alert("error: user not found")</script>';
          echo '<script>location.href="../index.html";</script>';
          }
         */


        
        //Method 2 : using spagethhi code
        //We will do it with the most simple way
        
        // step 1 : Get The data from the inputs
        $username = $_POST['FirstNumber'];
        $password = $_POST['password'];
        // step 2 : connect to database
        include_once 'databaseConfig.php';
        global $link;
        $conn = $link;
        // step 3 : send data to database
        // 3.1 create sql query
        $sql = "UPDATE users SET Password='" . $password. "' WHERE Username = '" . $username . "'";
        // 3.2 execute query
        echo $sql;
        $res = $conn->query($sql);
        //check if query returned more than 1 row
        echo '<br>';
        // 3.2 execute query
        if ($conn->query($sql) === TRUE) {
        //step 4 : return database result
        echo "New record created successfully";
        } else {
        //step 4 : return database result
        echo "Error: " . $sql . "<br>" . $conn->error;
        } 
        // More on Database : https://www.w3schools.com/php/php_mysql_intro.asp
        // CRUD Operation example : https://www.tutorialrepublic.com/php-tutorial/php-mysql-crud-application.php
        // CRUD Source Code : https://drive.google.com/file/d/1KI2cXr_zibgu6-W8ypKcK5T1kyrF2QnA/view?usp=sharing
    }
} 

