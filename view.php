<?php
	include('connection.php');
    readfile('display.html');
   
    //$cn = pg_connect("host=localhost port=5432 dbname=student user=postgres password=admin");
    $result = pg_query($cn,"SELECT * FROM student");
    
    
    while($row = pg_fetch_object($result))
    {
        echo "<br/><h2/>".$row->rollno."  ".$row->name."  ";
    }
    
    

    
?>