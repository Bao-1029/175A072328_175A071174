<?php
        $conn = mysqli_connect("localhost", "root", "", "web_tlu");

        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        //echo "running...";
            mysqli_query($conn,"SET CHARACTER SET 'utf8'");
            mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
?>