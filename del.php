<?php
	include('connection.php');
    //$cn = pg_connect("host=localhost port=5432 dbname=student user=postgres password=admin");

    $rollno = $_POST['rollno'];
	$query = "DELETE FROM student WHERE rollno=$rollno";
	if($result = pg_query($cn,$query)){
		echo "Data Deleted Successfully.";
	}
	else{
		echo "Error.";
	}
?>