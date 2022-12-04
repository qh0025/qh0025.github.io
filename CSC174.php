<?php

   //Set up server

  // $servername = "localhost";
  //$username = "urcyphloccxygf";
  //$password = "password";
  // $dbname = "mydatabase";


   $dsn = "pgsql:"
    . "host=ec2-3-92-98-129.compute-1.amazonaws.com;"
    . "dbname=d2kcc4it2iou00;"
    . "user=urcyphloccxygf;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=16e062b8cc6601f501d1b62aee13c758540331c093d7074f424bc687b6bf5351";

  $con = new PDO($dsn);
  
   //Host: ec2-3-92-98-129.compute-1.amazonaws.com
  //Port: 5432
  //User: urcyphloccxygf
  //Password: 16e062b8cc6601f501d1b62aee13c758540331c093d7074f424bc687b6bf5351
  //Database: d2kcc4it2iou00

   //$mysqli = new mysqli($servername, $username, $password, $dbname);
   
   //if($mysqli -> connect_errno)
   //{
    //echo 'Failed to connect to MySQL: '.$mysqli -> connect_error;
    //exit();
   //}
   //else
   //{
    //echo '';
   //}

   //Create Table -- Commented out but verified that it was created.

    //$sql = 'CREATE TABLE Account(
    //User VARCHAR(30),
    //Pass VARCHAR(25))';

    //if($mysqli->query($sql) == true)
    //{
    //echo "Table 'Account' created successfully <br>";
    //}
    //else
    //{
     //echo 'Error creating table: '.$mysqli->error.'<br>';
    //}
    
    //check for empty first...
    if(empty($_POST['firstname']))
    {
        echo 'You left first name blank!';
        exit();
    }


    //if(empty($_POST['password']))
    //{
       // echo 'You left password blank!';
       // exit();
   //}

  
    //retrieve form data into PHP variables...
    //Reference legal uid and pass to insert 
    //values in Database

    $fname = $_POST['firstname'];
 



    //Store data into table
    $sql = "INSERT INTO CUSTOMER (first)
    VALUES ('$fname)";

    if($con->query($sql)==true)
    {
      echo "Entry entered succesfully<br>";
    }
    else 
    {
      echo 'Error entering entry'.$con->error.'<br>';
    }

    //Assume anything after this is a legit uid/pass combo and grant login status
    //session_start();
    //$_SESSION['uid'] = $uid;
    // header('Location: finallogstatus.php'); 


   //Close the connection to the MySQL server 
    $con->close(); 
    
?>