<?php                                                                                     
session_start();
// Mình quy ước 1 là admin, 2 là sinh viên .....
if (!isset($_SESSION['role'])) { 
    // không có sesion thì ra trang chủ
    header('Location: index.php');
} else if(($_SESSION['role'] != 1)) {
    // role k phải admin thì ra trang người dùng cá nhân thôi. Nếu có còn không thì trang chủ tất
        header('Location: index.php');
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My University</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/project_BN.css">
    <link rel="stylesheet" href="CSS/all.css">

</head>

<body>
    Đây là trang admin demo tạm không phải thật.
</body>

</html>