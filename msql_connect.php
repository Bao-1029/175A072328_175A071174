<?php
<<<<<<< HEAD
        $conn = mysqli_connect("localhost", "root", "", "web_tlu");

        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
=======
        DEFINE ('DB_USER', 'root'); // or whatever userid you created
        DEFINE ('DB_PASSWORD', ''); // or whatever password you created
        DEFINE ('DB_HOST', 'localhost');
        DEFINE ('DB_NAME', 'web_tlu');
        
        // Make the connection:
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if(!$conn){
        die('kết nối thất bại.'.mysqli_connect_error());
>>>>>>> 5ba8143877d5a7c43a860b5226645bc551969479
        }
        //echo "running...";
            mysqli_query($conn,"SET CHARACTER SET 'utf8'");
            mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
?>