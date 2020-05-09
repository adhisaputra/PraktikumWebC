<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Udayana</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row cf">
            <?php include 'layout/sidemenu.php' ?>
            <div class="w-75 cf float-left rounded">
                <?php include 'layout/header.php' ?>
                <div class="rounded cf card content shadow mt">
                    <div class="img-cover img-unud">
                    </div>
                    <section class="deskripsi">
                    <h1 style="text-align: center;">Selamat Datang di Portal Universitas Udayana </h1>
                    <h2 style="color: rgb(109, 109, 109);">Berita terkini</h2>
                    <img style="width: 300px; float: left; margin-right: 20px; margin-bottom: 30px;" src="./image/image5.jpg" alt="#">
                    <p>Kapolda Bali Irjen Pol. Petrus R. Golose bersama jajaran bertemu Rektor Unud Prof. A.A Raka Sudewi di Gedung
                        Rektorat Kampus Jimbaran, Senin (30/3/2020). Turut hadir mendampingi Rektor, Wakil Rektor Bidang Perencanaan
                        Kerja Sama dan Informasi, Dekan FMIPA dan Wakil Dekan serta Koorprodi.....</p>
                    <a href="#">Baca Selengkapnya</a>
                    <h2 style="color: rgb(109, 109, 109); clear: both;">Galeri</h2>
                    <img style="width: 300px; height: 200px; float: left; margin-right: 20px; margin-bottom: 30px;"
                        src="./image/image1.jpg" alt="#">
                    <img style="width: 300px; height: 200px; float: left; margin-right: 20px; margin-bottom: 30px;"
                        src="./image/image2.jpg" alt="#">
                    <img style="width: 300px; height: 200px; float: left; margin-right: 20px; margin-bottom: 30px;"
                        src="./image/image3.jpg" alt="#">
                    <img style="width: 300px; height: 200px; float: left; margin-right: 20px; margin-bottom: 30px;"
                        src="./image/image4.jpg" alt="#">
                    </section>
                </div>
                <?php include 'layout/footer.php' ?>
            </div>
        </div>

    </div>
</body>

</html>