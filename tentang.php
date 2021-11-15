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

    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/normalize.css">
    <Link rel="stylesheet" type="text/css" href="/assets/vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style-page.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/queries-tentang.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Perguruan Budaya</title>
</head>
<body>
    <nav>
        <div class="row">
            <a href="/"><img src="/assets/img/logo.png" alt="Budaya logo" class="logo"></a>
            <ul class="main-nav">
                <li><a class="home" href="/">Home</a></li>
                <li><a class="tentang" href="/tentang">Tentang Budaya</a></li>
                <li><a class="kawasan" href="/kawasan">Kawasan Budaya</a></li>
                <li><a href="/kontak">Kontak Budaya</a></li>
            </ul>
        </div>
    </nav>
    <header>
        <div class="row">
            <div class="col header-kotak span-1-of-2">
                <h1>Tentang Budaya</h1>
                <img class="image-h" src="/assets/img/image-h.jpg">
            </div>
            <div class="col header-kotak span-1-of-2">
                <p class="tentang-1">Di tahun 1981, dengan upaya bapak Drs. H. Amiroedin Thalib, pada akhirnya Perguruan Budaya dapat menempati komplek pendidikan yang terletak di kawan Klender, Jakarta Timur. Komplek tersebut mempunyai luas area lebih dari 1 hektar atau 10.000 m2, dengan 5 bidang tanah bersertifikat, serta satu bidang masih berupa dokumen girik. Dokumen kepemilikan tanah tersebut beratas namakan bapak Drs. H. Amiroedin Thalib dan ahli warisnya.<p>
                <p class="tentang-2">Perguruan Budaya sejak awal berfokus pada dunia pendidikan, khususnya pendidikan menengah, yang sekarang terdiri dari SMP Budaya, SMA Budaya, serta SMK Budaya yang semuanya berlokasi dalam satu komplek kawasan pendidikan Perguruan Budaya.<p>
                <img class="image-p" src="/assets/img/image-p.jpg">
            </div>
        </div>
    </header>

    <section class="section-photo">
        <div>
            <div class="col photo-kotak span-1-of-2">
                <div class="hijau">
                    <div class="hijau-tipis">

                    </div>
                </div>
            </div>
            <div class="col photo-kotak span-1-of-2">
                <div class="kuning">

                </div>
                <div class="slide-container">
                    <div class="mySlides fade">
                        <img src="/assets/img/tentang-foto-1.jpg" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="/assets/img/tentang-foto-2.jpg" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="/assets/img/tentang-foto-3.jpg" style="width:100%">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <script src="/assets/js/carousel.js"></script>
            </div>
        </div>
    </section>

    <section class="section-detail">
        <div class="row">
            <div class="col detail-tentang span-1-of-2">
                <p class="tentang-3">SMP-SMA-SMK Budaya Jakarta berdomisili di jalan Dermaga Baru, Klender, Duren Sawit, Jakarta Timur, dengan bangunan gedung 1 lantai dan 2 lantai yang secara geografis terletak di tengah-tengah pemukiman rakyat. Lokasi sekolah yang strategis menjadikan banyaknya alternatif alat transportasi untuk menuju ke kawasan Perguruan Budaya.</p>
                <a class="btn-p" href="/kawasan">Lihat Kawasan Budaya</a>
            </div>
        </div>
    </section>


    <footer>
        <div class="row footer-row">
            <ul class="footer-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/tentang">Tentang Budaya</a></li>
                <li><a href="/kawasanp">Kawasan Budaya</a></li>
                <li><a href="/kontak">Kontak Budaya</a></li>
            </ul>
        </div>
        <div class="row footer-credit">
            <p>Perguruan Budaya 2021. All rights reserved.</p>
        </div>    
    </footer>
    
</body>
</html>