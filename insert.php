<?php
	include('connection.php');

    //$cn = pg_connect("host=localhost port=5432 dbname=student user=postgres password=admin");
    
    if(!$cn)
    {
        echo "Error:Unable to open database\n";
    }
    else
        echo "connected";

    $rollno= $_POST["rollno"];
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $query = "INSERT INTO student VALUES('$rollno','$name', '$dob','$age','$gender','$phone')";
    $result= pg_query($cn,$query);
    header("Location: index.html");
    
?>