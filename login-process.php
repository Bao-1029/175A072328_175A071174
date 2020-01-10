<?php 

    session_start();
   require ('msql_connect.php');

   $email = trim($_POST["email"]);
   $password = trim($_POST["password"]); 

   $sql = "SELECT * FROM taikhoan where email = '$email'";
   $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1)
    {
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row['MatKhau'])){
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['Id_TaiKhoan'];
        $_SESSION['role'] = (int) $row['VaiTro']; // Lấy quyền để phân quyền chức năng. Sau if(role==1) thì cho vào admin còn không thì k cho vào
        echo "OK";
    }else{
        echo  "No OK";
    }
}else{
    echo 'Not OK';
}

    mysqli_close($conn);
?>