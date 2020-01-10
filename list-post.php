<?php
    if(isset($_GET['category'])){
        $danhmuc=$_GET['category'];
    } else {
        $danhmuc= '';
    }
?>
<div class="container">
    <div class="list-post">
        <div class="row">
            <?php 
            if($danhmuc=="all") {
                $sql = "SELECT * FROM posts";
            } else {
                $sql = "SELECT * FROM posts WHERE category = '$danhmuc'";
            }
                            $req=mysqli_query($conn, $sql);
                                while($row=mysqli_fetch_array($req)) {
                    ?>
            <div class="post-item d-flex flex-row">
                <div class="col-lg-5">
                    <img src="<?= $row['picture']; ?>" alt="" style="width: 100%;
        max-height: 250px;padding-top:20px">
                </div>
                <div class="col-lg-7">
                    <div style="padding:30px 0px">
                        <h4><?= $row['title']; ?></h4>
                        <p class="description"><?= $row['description']; ?></p>
                        <br>
                        <a href="index.php?category=<?= $row['category']; ?>&&post=<?= $row['Id_Post']; ?>"
                            style="float:right; text-decoration: none;"> Xem chi tiết</a>
                        <br>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>