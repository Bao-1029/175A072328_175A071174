<?php
    session_start();
    require('../msql_connect.php');

            $category = trim($_POST["category"]);
            $title = trim($_POST["title"]);
            $description = trim($_POST["description"]);
            $content = trim($_POST["content"]);
            $author = trim($_POST["author"]);
            $sql= "INSERT INTO posts(title,category, description, content, author) VALUES ('$title', '$category', '$description', '$content', '$author')";
            $result = mysqli_query($conn, $sql);
            if($result) {
                echo json_encode(["status" => true, "message" => "Good"]);
            } else {
                echo json_encode(["status" => false, "message" => $sql]);
            }
?>