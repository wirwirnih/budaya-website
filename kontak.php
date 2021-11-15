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
    <Link rel="stylesheet" type="text/css" href="/assets/vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/kontak-style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/kontak-queries.css">

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
            <ul class="hero-text">
                <li><h1>Contact Us</h1></li>
            </ul>
        </div>
    </header>
    
    <section class="sentuh">
        <div class="row sentuh-row">
            <h2>Get In Touch With Us</h2>
            <p>Anda dapat menghubungi kami dengan melalui kontak informasi yang tertera di bawah atau bisa juga langsung mengunjungi kawasan pendidikan Perguruan Budaya dengan alamat yang tertera di bawah.</p>
        </div>
    </section>
    <section class="map-detail">
        <div class="row">
            <div class="col detail-map span-1-of-3">
                <ul class="ikon">
                    <li class="mailDetail">
                        <ion-icon class="map" name="map-sharp"></ion-icon>
                    </li>
                    <li class="phoneDetail">
                        <ion-icon class="phone" name="call-sharp"></ion-icon>
                    </li>
                    <li class="mailDetail">
                        <ion-icon class="mail" name="mail-sharp"></ion-icon>
                    </li>
                </ul>
            </div>
            <div class="col ktrngn span-1-of-3">
                <h3 class="officeTulis">Office</h3>
                <p class="detailMap">JL. Dermaga Baru No.26<br> Klender, Duren Sawit, Jakarta Timur</p>
                <h3 class="phoneTulis">Phone</h3>
                <p class="detailPhone">(022) 860 079 1</p>
                <h3 class="mailTulis">Mail</h3>
                <p class="detailMail">contact@emailbudaya.com</p>
            </div>
            <div class="col detail-tulisan span-1-of-2">
                <figure>
                    <a href="https://goo.gl/maps/Yp3uC97FnfewHYsM7"><img class="mapNih" src="/assets/img/map.jpg"></a>
                </figure>
            </div>
        </div>
        
        
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
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>