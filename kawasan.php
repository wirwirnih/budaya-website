<?php

    // allow the config
    define('__CONFIG__', true);
    // require the config
    require_once 'inc/config.php';

    ForceLogin();

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/normalize.css">
    <Link rel="stylesheet" type="text/css" href="/assets/vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/gedung.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="/assets/css/query-kawasan.css?v=<?php echo time(); ?>">
        
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
            
    <title>Perguruan Budaya</title> 
</head>
<body>
    <header>
        <nav>
            <div class="row header-row">
                <a href="/"><img src="/assets/img/logo.png" alt="Budaya logo" class="logo"></a>
                <ul class="main-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/tentang">Tentang Budaya</a></li>
                    <li><a href="/kawasan">Kawasan Budaya</a></li>
                    <li><a href="/kontak">Kontak Budaya</a></li>
                </ul>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1>Kawasan<br> Budaya</h1>
        </div>
    </header>
    <section class="section-gedung">
        <div class="container">
            <div class="row align-items-start">
                <div class="col g-col-4">
                    <img class="fotoSatu" src="/assets/img/budaya1.jpg" alt="budaya satu">
                </div>
                <div class="col g-col-4">
                    <p class="tulisanSatu">Kawasan pendidikan Perguruan Budaya berdiri di atas tanah seluas 10.000 m2 dan dilengkapi dengan jalan besar sebagai penghubung antar jenjang pendidikan.</p>
                </div>
                <div class="col g-col-4">
                    <img class="fotoDua" src="/assets/img/gedung-2.jpg" alt="budaya dua">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-start">
                <div class="col g-col-4">
                    <p class="tulisanDua">Masyarakat yang ada di sekitar kawasan pendidikan Perguruan Budaya pada umumnya adalah golongan menengah ke bawah. Hal tersebut berkaitan dengan misi yayasan yang mempunyai target pengadaan pendidikan untuk masyarakat golongan menengah ke bawah. Tidak jauh dari kawasan Perguruan Budaya, terdapat komplek perumahan kelas menengah ke atas yang berjarak sekitar 5 kilometer dari gerbang utama kawasan pendidikan Perguruan Budaya.</p>
                </div>
                <div class="col g-col-8">
                    <img class="fotoTiga" src="/assets/img/budaya2.jpg" alt="budaya tiga">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-start">
                <div class="col g-col-8">
                    <img class="fotoEmpat" src="/assets/img/budaya-5.jpg" alt="budaya empat">
                </div>
                <div class="col g-col-4">
                    <p class="tulisanTiga">Tidak jauh dari kawasan Perguruan Budaya, terdapat dua buah jalan utama, yaitu JL. I Gusti Ngurah Rai dan JL. Dermaga.<br><br> Selain itu, Agung Podomoro Group, selaku pengembang terbesar dalam bidang sektor properti di Indonesia, berencana akan membangun sebuah condominium dalam tanah seluas kurang lebih 7 hektar. Pembangunan condominium tersebut terletak di JL. I Gusti Ngurah Rai, yang di mana berjarak sekitar 500 meter dari kawasan Perguruan Budaya.<br><br> Berkaitan dengan rencana pembangunan tersebut, jalan utama di depan kawasan Perguruan Budaya juga akan diperlebar. Gorong-gorong juga akan ditutup karena sudah ada Codetan BKT (Banjir Kanal Timur) yang akan tembus hingga ke bagian utara Jakarta. Dengan adanya BKT, tentu daerah di sekitar Perguruan Budaya akan terbebas dari banjir. </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-start">
                <div class="col g-col-4">
                    <img class="fotoEnam" src="/assets/img/denah-budaya.jpg" alt="budaya enam">
                </div>
                <div class="col g-col-8">
                    <img class="fotoLima" src="/assets/img/budaya-1.jpg" alt="budaya lima">
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer-gedung">
        <div class="row footer-row">
            <ul class="footer-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/tentang">Tentang Budaya</a></li>
                <li><a href="/kawasan">Kawasan Budaya</a></li>
                <li><a href="/kontak">Kontak Budaya</a></li>
            </ul>
        </div>
        <div class="row footer-credit">
            <p>Perguruan Budaya 2021. All rights reserved.</p>
        </div>    
    </footer>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>