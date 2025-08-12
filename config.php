<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "student_db";
    $conn = "";


    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }catch(mysqli_sql_exception $e){
        echo "DB connection error!: " . $e->getMessage() . "<br><br><br>";
    }
    
    
    if($conn){
        echo "Database connected successfully!<br><br><br>";
    }

?>