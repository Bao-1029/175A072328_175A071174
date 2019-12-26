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
    <h4><?= $row['title']; ?></h4>
    <p><?= $row['description']; ?></p>
    <div><?= $row['content']; ?></div>
    <h6>Tác giả : <?= $row['author']; ?></h6>
</div>