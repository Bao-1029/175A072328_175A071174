<?php
    if(isset($_GET['post'])){
        $baiviet=$_GET['post'];
    } else {
        $baiviet= '';
    }
?>
<div class="container">
    <?php 
        $sql = "SELECT * FROM posts WHERE Id_Post = '$baiviet' ";
        $post=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($post);
?>
    <h4 style="text-align: center; color: #0984e3"><?= $row['title']; ?></h4>
    <hr>
    <div><?= $row['content']; ?></div>
    <h6 style="text-align: right;">Tác giả : <?= $row['author']; ?></h6>
</div>