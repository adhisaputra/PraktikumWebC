<?php include 'db.php' ?>
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
                <section class="deskripsi">
                    <div class="polaroid">
                        <img src="./image/profil1.png" alt="profil1" style="width:200px">
                        <div class="container">
                            <h3>NAMA </h3>
                            <p style="font-size: 17px;">Made Cisco Webex</p>
                            <h3>NIDN</h3>
                            <p style="font-size: 17px;">123456789</p>
                        </div>
                    </div>
                    <div class="polaroid">
                        <img src="./image/profil2.png" alt="profil1" style="width:200px">
                        <div class="container">
                            <h3>NAMA </h3>
                            <p style="font-size: 17px;">Nyoman Html</p>
                            <h3>NIDN</h3>
                            <p style="font-size: 17px;">123456789</p>
                        </div>
                    </div>
                    <div class="polaroid">
                        <img src="./image/profil3.png" alt="profil1" style="width:200px">
                        <div class="container">
                            <h3>NAMA </h3>
                            <p style="font-size: 17px;">Nyoman Css</p>
                            <h3>NIDN</h3>
                            <p style="font-size: 17px;">123456789</p>
                        </div>
                    </div>
                    <div class="polaroid">
                        <img src="./image/profil4.png" alt="profil1" style="width:200px">
                        <div class="container">
                            <h3>NAMA </h3>
                            <p style="font-size: 17px;">Ketut Python</p>
                            <h3>NIDN</h3>
                            <p style="font-size: 17px;">123456789</p>
                        </div>
                    </div>
                </section>
                </div>
                <?php include 'layout/footer.php' ?>
            </div>
        </div>

    </div>
</body>

</html>