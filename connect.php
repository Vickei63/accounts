
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signuplogin";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if(!$conn){
       die( "Db not connected". mysqli_error($conn)); 
    }

?>