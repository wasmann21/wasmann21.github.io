<?php
include './layout/header.php';
include './layout/navbar.php';
?>

<div class="container">
    <div class="row">
        <?php include './layout/menu.php'; ?>
        <div class="col-9 border ">
            <div class="row ">
                <div class="card-header bg-info text-white text-center">
                    <div style="font-size: 20px;">Pengalaman</div>
                </div>
                <div class="col-1">
                    <div class="row"></div>
                </div>
                <div class="col-2 mt-4 pe-3 mb-5">
                    <div class="row ">
                        <img src="./img/foto.png" class="img-fluid rounded-start" width="40px" height="40px">

                        <div class="text mt-3" style="font-weight: bold; font-size:14px">
                            Wasman Nurrohman
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="row"></div>
                </div>

                <div class="col-8 mt-4 mb-4">
                    <div style=" font-size:18px;">January-Maret 2021</div>
                    <hr>
                    <div style="font-weight:bold; font-size:18px;">Kecamatan Benda, Kota Tangerang </div>
                    <div style="font-size:18px;">Sub Bagian Umum dan Kepegawaian</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include './layout/footer.php';
?>