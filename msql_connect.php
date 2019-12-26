<?php
        DEFINE ('DB_USER', 'root'); // or whatever userid you created
        DEFINE ('DB_PASSWORD', ''); // or whatever password you created
        DEFINE ('DB_HOST', 'localhost');
        DEFINE ('DB_NAME', 'ql_diemtlu');
        
        // Make the connection:
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if(!$conn){
        die('kết nối thất bại.'.mysqli_connect_error());
        }
?>