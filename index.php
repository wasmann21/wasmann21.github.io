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
                    <div style="font-size: 20px;">Profil Saya</div>
                </div>
                <div class="col-1">
                    <div class="row"></div>
                </div>
                <div class="col-2 mt-4 pe-3 ">
                    <div class="row ">
                        <img src="./img/foto.png" class="img-fluid rounded-start" width="40px" height="40px">
                    </div>
                </div>
                <div class="col-1">
                    <div class="row"></div>
                </div>
                <div class=" col-4">
                    <div class="row">
                        <div class="card-body ">
                            <h5 style=" font-weight: bold;">Nama</h5>
                            <h5 class="mt-3" style="font-weight: bold;">Tempat Tanggal Lahir</h5>
                            <h5 class="mt-3" style="font-weight: bold;">Alamat</h5>
                            <h5 class="mt-3" style="font-weight: bold;">Agama</h5>
                            <h5 class="mt-3" style="font-weight: bold;">Hobi</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="card-body">
                            <h5>:Wasman Nurrohman</h5>
                            <h5 class="mt-3">:Bandung, 16 April 2004</h5>
                            <h5 class="mt-3">:Kota Tangerang, Banten</h5>
                            <h5 class="mt-3">:Islam</h5>
                            <h5 class="mt-3">:Ngoding</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="text" style="font-weight: bold;">
                    MOTTO
                </div>
                <div class="text">
                    "Genggamlah Dunia Sebelum Dunia Menggenggammu"
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include './layout/footer.php';
?>