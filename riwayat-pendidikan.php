<?php
include './layout/header.php';
include './layout/navbar.php';
?>

<div class="container">
    <div class="row">
        <?php include './layout/menu.php'; ?>
        <div class="col-9 border ">
            <div class="row">
                <div class="card-header bg-info text-white text-center">
                    <div style="font-size: 20px;">Riwayat Pendidikan</div>
                </div>
                <div class="col-1">
                    <div class="row"></div>
                </div>
                <div class="col-2 mt-4 pe-3">
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
                    <div style="font-weight: bold; font-size:18px;">2009-2010</div>
                    <div style="font-weight: bold; font-size:18px;">TK Arrahman Kota Tangerang</div>
                    <hr>
                    <div style="font-weight: bold; font-size:18px;">2010-2016</div>
                    <div style="font-weight: bold; font-size:18px;">SDN Jurumudi 2 Kota Tangerang</div>
                    <hr>
                    <div style="font-weight: bold; font-size:18px;">2016-2019</div>
                    <div style="font-weight: bold; font-size:18px;">SMPN 5 Kota Tangerang</div>
                    <hr>
                    <div style="font-weight: bold; font-size:18px;">2019-2021</div>
                    <div style="font-weight: bold; font-size:18px;">SMKN 4 Kota Tangerang</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include './layout/footer.php';
?>