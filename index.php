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
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/queries.css">

        <link rel="stylesheet" type="text/css" href="/assets/vendors/css/normalize.css">
        <Link rel="stylesheet" type="text/css" href="/assets/vendors/css/grid.css">
            
        <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        
        <title>Perguruan Budaya</title>
    </head>
    <body>
        <header class="index">
            <nav>
                <div class="row">
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
                <h3>Selamat Datang di</h3>
                <ul class="hero-text">
                    <li><img src="/assets/img/logohero.png" alt="Hero logo" class="hero-logo"></li>
                    <li><h1>Perguruan<br> Budaya</h1></li>
                </ul>
            </div>
        </header>
        <section class="section-video">
            <div class="row">
                <video class="video-budaya" width="320" height="240" autoplay muted loop>
                    <source src="/assets/img/video-budaya.mp4" type="video/mp4">
                  </video>
            </div>
        </section>
        <section class="tentang-budaya">
            <div class="row preview-tentang">
                <p class="tentang-1">Perguruan Budaya pertama kali didirikan pada awal tahun 1960-an, tepatnya di tahun 1958, namun baru beroperasi secara penuh di tahun 1960.</p>
                <p class="tentang-2">Sejak tahun didirikan sampai dengan tahun 1981, proses operasional Perguruan Budaya saat itu masih menumpang pada sekolah SD Negeri Salemba Beluntas Jakarta. Saat itu kegiatan belajar-mengajar dilaksanakan pada malam hari, dan siswa yang ada kebanyaan adalah para pekerja yang memerlukan pengesahan kesetaraan ijazah Sekolah Tingkat Menengah.</p>
                <a href="/tentang"><h2>Tentang Budaya</h2></a>
            </div>
        </section>
        <section class="enamFoto">
            <div class="row barisan-1">
                <h2>Kawasan Budaya</h2>
                <div class="col foto-1 span-1-of-3">
                    <figure>
                        <img src="/assets/img/budaya-1.jpg" alt="budaya satu">
                    </figure>
                </div>
                <div class="col foto-2 span-1-of-3">
                    <figure>
                        <img src="/assets/img/budaya-2.jpg" alt="budaya dua">
                    </figure>
                </div>
                <div class="col foto-3 span-1-of-3">
                    <figure>
                        <img src="/assets/img/budaya-3.jpg" alt="budaya tiga">
                    </figure>
                </div>
            </div>
            <div class="row barisan-2">
                <div class="col foto-4 span-1-of-3">
                    <figure>
                        <img src="/assets/img/budaya-4.jpg" alt="budaya empat">
                    </figure>
                </div>
                <div class="col foto-5 span-1-of-3">
                    <figure>
                        <img src="/assets/img/budaya-5.jpg" alt="budaya lima">
                    </figure>
                </div>
                <div class="col foto-6 span-1-of-3">
                    <figure>
                        <img src="/assets/img/budaya-6.jpg" alt="budaya enam">
                    </figure>
                </div>
            </div>
            <a class="btn" href="/kawasan"><h2>Lihat Kawasan Budaya</h2></a>
        </section>

        

        <footer>
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
    </body>



</html>