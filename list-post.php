<?php
    if(isset($_GET['danhmuc'])){
        $danhmuc=$_GET['danhmuc'];
    }
?>
<div class="container">
    <div class="list-post">
        <div class="row">
            <?php 
                            $sql = "SELECT * FROM baiviet BV, danhmucbaiviet DMBV WHERE BV.Madanhmuc = DMBV.Madanhmuc AND DMBV.Madanhmuc = '$danhmuc' ";
                            $req=mysqli_query($conn, $sql);
                                while($row=mysqli_fetch_array($req)) {
                    ?>
            <div class="post-item d-flex flex-row">
                <div class="col-lg-5">
                    <img src="./img/thong-bao.png" alt="" style="width: 100%;
        max-height: 250px;padding-top:20px">
                </div>
                <div class="col-lg-7">
                    <div style="padding:30px 0px">
                        <h4><?= $row['Tieude']; ?></h4>
                        <p class="description"><?= $row['Motabaiviet']; ?></p>
                        <br>
                        <a href="index.php?danhmuc=<?= $row['Madanhmuc']; ?>&&baiviet=<?= $row['Idbaiviet']; ?>"
                            style="float:right; text-decoration: none;"> Xem chi tiết</a>
                        <br>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>