<?php
    session_start();
?>
<?php
        unset($_SESSION['role']);
        unset($_SESSION['email']);
        header("Location: index.php");
?>