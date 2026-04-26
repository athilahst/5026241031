<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> TLinktree Marugame Udon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@1.11.3/dist/css/bootstrap.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            /*background belakang mentok*/
            background-color: #a09184;
            margin: 0;
            padding-top: 2.5rem;
            display: flex;
            justify-content: center;
            font-family: "DM Sans", sans-serif;
        }

        .container {
            /*ini di kotaknya*/
            border-top-left-radius: 2rem;
            border-top-right-radius: 2rem;
            background-color: #e1ccb9;
            width: 100%;
            min-height: 100vh;
            max-width: 36rem;
            position: relative;
            overflow: hidden;
            padding: 0;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            overflow: hidden;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
        }

        .header {
            /*ngatur buletan putih di atas*/
            display: flex;
            justify-content: space-between;
            position: absolute;
            width: 100%;
            left: 0;
            top: 2.5rem;
            padding: 0 1.5rem;
            z-index: 20;
        }

        .icon-circle {
            /*tombol bulat di bagian atas*/
            width: 2.25rem;
            height: 2.25rem;
            background-color: #f4f1ea;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .icon-circle img {
            width: 70%;
            height: 70%;
            object-fit: cover;
        }

        .logo-section {
            /*posisi banner marugame*/
            width: 100%;
            display: flex;
            justify-content: center;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .logo-section-after {
            /*biar kaya di linktree ada efek pudar*/
            content: '';
            font-size: 4rem;
            font-weight: 900;
            letter-spacing: 4px;
            content: '';
            position: absolute;
            inset: 0;
            color: transparent;
            background: linear-gradient(to bottom, transparent 50%, #e1ccb9 100%);
            pointer-events: none;
            background-clip: text;

        }

        .main-logo {
            /*logo marugamee*/
            width: 36rem;
            height: auto;
            border-radius: 1.5rem;
        }

        .profile-text {
            /*tulisan japanese noodle*/
            margin-top: -6.8rem;
            position: relative;
            justify-content: center;
            text-align: center;
            z-index: 5;
        }

        .profile-info h1 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .profile-info p {
            font-size: 0.85rem;
            opacity: 0.8;
            margin-bottom: 1.5rem;
        }

        .social-row {
            display: flex;
            justify-content: center;
            gap: 1.55rem;
            margin-bottom: 1rem;
        }

        .social-media-btn {
            color: #000;
            font-size: 1.5rem;
            transition: transform 0.2s;
            text-decoration: none;
            transform: scale(1.2);
        }

        .small-socials-icon {
            font-size: 2.2rem;
            color: #000;
            display: inline-block;
            line-height: 1;
        }

        .social-btn-hover {
            transform: scale(1.1);
            color: #000;
        }

        .social-row img {
            width: 1.5rem;
            height: 1.5rem;
            object-fit: contain;
        }

        .links-list {
            padding: 0 1.5rem 3rem 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
            width: 100%;
        }

        .link-btn {
            /*menu pilihan*/
            background-color: #ffffff;
            border: 2px solid #000000;
            border-radius: 50px;
            padding: 0.8rem 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #000;
            position: relative;
            box-shadow: 4px 5px 0px #000000;
            transition: all 0.1s ease;
        }

        .link-btn:active {
            /*bisa naik turun kalo dipencet*/
            transform: translate(2px, 2px);
            box-shadow: 1px 1px 0px #000000;
        }

        .btn-thumb {
            /*ikon bulet di kiri*/
            position: absolute;
            left: 8px;
            width: 2.8rem;
            height: 2.8rem;
            border-radius: 50%;
            overflow: hidden;
            border: 1px solid #ffffff;
        }

        .btn-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .btn-content {
            /*tulisan di tombol*/
            text-align: center;
            display: flex;
            flex-direction: column;
        }

        .btn-title {
            font-size: 0.95rem;
            font-weight: 500;
        }

        .btn-subtext {
            font-size: 0.75rem;
            opacity: 0.6;
            margin-top: -2px;
        }

        .dots-icon {
            position: absolute;
            right: 1.25rem;
            top: 50%;
            opacity: 0.4;
            transform: translateY(-50%);
            color: #888;
            font-size: 1.2rem;
            cursor: pointer;
            opacity: 0.6;
        }

        .dots-icon-hover {
            opacity: 1;
            color: #000;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>

    <div class="container">
        <div class="logo-section">
            <img src="assets_marugame/img/marugame/banner.webp" alt="Banner" class="main-logo">

            <div class="header">
                <div class="icon-circle">
                    <img src="assets_marugame/img/marugame/ss_kiri.png" alt="back">
                </div>
                <div class="icon-circle">
                    <img src="assets_marugame/img/marugame/ss_kanan.png" alt="share">
                </div>
            </div>
        </div>

        <div class="profile-text">
            <h1 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 0.2rem;">
                Japanese Noodle & Tempura <i class="bi bi-check-circle-fill text-warning"
                    style="font-size: 0.7rem;"></i>
            </h1>
            <p style="font-size: 1rem; opacity: 0.99; font-weight: 500;">
                The 1st Authentic Halal Japanese Noodle <br> & Tempura Restaurant in Indonesia
            </p>
        </div>

        <div class="social-row">
            <a href="#" class="social-media-btn">
                <img src="assets_marugame/img/marugame/icon_whatsapp.png" class="small-socials-icon" alt="WA">
            </a>
            <a href="#" class="social-media-btn">
                <img src="assets_marugame/img/marugame/icon_pesan.png" class="small-socials-icon" alt="Email">
            </a>
            <a href="#" class="social-media-btn">
                <img src="assets_marugame/img/marugame/icon_instagram.png" class="small-socials-icon" alt="IG">
            </a>
            <a href="#" class="social-media-btn">
                <img src="assets_marugame/img/marugame/icon_tiktok.png" class="small-socials-icon" alt="TikTok">
            </a>
        </div>

        <div class="links-list">

            <a href="#" class="link-btn">
                <div class="btn-thumb">
                    <img src="assets_marugame/img/marugame/download_app_icon.webp" alt="APP">
                </div>
                <div class="btn-content">
                    <span class="btn-title">Download Marugame Udon App (Android)</span>
                    <span class="btn-subtext"><i class="bi bi-play-fill"></i> Google Play</span>
                </div>
                <i class="bi bi-three-dots-vertical dots-icon"></i>
            </a>

            <a href="#" class="link-btn">
                <div class="btn-thumb">
                    <img src="assets_marugame/img/marugame/download_app_icon.webp" alt="APP">
                </div>
                <div class="btn-content">
                    <span class="btn-title">Download Marugame Udon App (iOS)</span>
                    <span class="btn-subtext"><i class="bi bi-apple"></i> App Store</span>
                </div>
                <i class="bi bi-three-dots-vertical dots-icon"></i>
            </a>

            <a href="#" class="link-btn">
                <div class="btn-thumb">
                    <img src="assets_marugame/img/marugame/icon_gofood.png" alt="GOFOOD">
                </div>
                <div class="btn-content">
                    <span class="btn-title">Go Food Order</span>
                </div>
                <i class="bi bi-three-dots-vertical dots-icon"></i>
            </a>

            <a href="#" class="link-btn">
                <div class="btn-thumb">
                    <img src="assets_marugame/img/marugame/icon_grabfood.png" alt="GRABFOOD">
                </div>
                <div class="btn-content">
                    <span class="btn-title">Grab Food Order</span>
                </div>
                <i class="bi bi-three-dots-vertical dots-icon"></i>
            </a>

            <a href="#" class="link-btn">
                <div class="btn-thumb">
                    <img src="assets_marugame/img/marugame/shopeefood_icon.webp" alt="SHOPEEFOOD">
                </div>
                <div class="btn-content">
                    <span class="btn-title">Shopee Food Order</span>
                </div>
                <i class="bi bi-three-dots-vertical dots-icon"></i>
            </a>

            <a href="#" class="link-btn">
                <div class="btn-thumb">
                    <img src="assets_marugame/img/marugame/icon_lokasi.png" alt="STORE">
                </div>
                <div class="btn-content">
                    <span class="btn-title">Store Location</span>
                </div>
                <i class="bi bi-three-dots-vertical dots-icon"></i>
            </a>

            <a href="#" class="link-btn">
                <div class="btn-thumb">
                    <img src="assets_marugame/img/marugame/food_icon.webp" alt="LOCATION">
                </div>
                <div class="btn-content">
                    <span class="btn-title">Our Menu</span>
                </div>
                <i class="bi bi-three-dots-vertical dots-icon"></i>
            </a>

            <a href="#" class="link-btn">
                <div class="btn-thumb">
                    <img src="assets_marugame/img/marugame/program_icon.webp" alt="PROGRAM">
                </div>
                <div class="btn-content">
                    <span class="btn-title">About Kid's Chef Marugame Udon</span>
                </div>
                <i class="bi bi-three-dots-vertical dots-icon"></i>
            </a>

            <a href="#" class="link-btn">
                <div class="btn-thumb">
                    <img src="assets_marugame/img/marugame/download_app_icon.webp" alt="APP">
                </div>

                <div class="btn-content">
                    <span class="btn-title">Download Marugame Udon App</span>
                </div>

                <i class="bi bi-three-dots-vertical dots-icon"></i>
            </a>
        </div>

    </div>
    </div>


</body>




</html>
