<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas Minggu 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: #f4f5f7;
        }

        .bagian-atas {
            background: #fff;
            text-align: center;
            padding: 50px 0 30px;
        }

        .kartu {
            background: #fff;
            text-align: center;
            padding-bottom: 30px;
        }

        .header-kuning {
            background: #eec550;
            color: #fff;
            font-weight: 700;
            padding: 20px;
        }

        .header-hijau {
            background: #79bc98;
            color: #fff;
            font-weight: 700;
            padding: 20px;
        }

        .harga {
            padding: 30px 0;
            font-size: 60px;
            font-weight: 100;
            color: #a0a0a0;
        }

        .durasi {
            font-size: 13px;
        }

        .fitur p {
            border-bottom: 1px solid #eee;
            margin: 0;
            padding: 12px;
            font-size: 14px;
        }

        .btn-paket {
            width: 80%;
            padding: 12px;
            font-weight: 700;
            border: none;
            color: #fff;
        }

        .btn-abu {
            background: #e5e5e5;
        }

        .btn-kuning {
            background: #eec550;
        }

        .populer {
            background: #a3d3b4;
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 8px 0;
            position: absolute;
            top: -25px;
            left: 0;
            right: 0;
            z-index: 10;
        }
    </style>
</head>

<body>
    <div class="container bagian-atas mt-5">
        <h2>Select a plan.</h2>
        <p class="text-secondary">Enjoy endless ad-free music-even offline.</p>
    </div>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <!--kartu 1-->
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="kartu">
                    <div class="header-kuning">INDIVIDUAL</div>
                    <div class="harga">$9.99 <span class="durasi">/MO</span></div>
                    <div class="fitur">
                        <p><b>Listen to music</b> ad-free</p>
                        <p><b>Play anywhere</b>, even offline</p>
                        <p><b>On-demand</b> playback</p>
                        <p><b>Prepaid or subscription</b> plans</p>
                        <p><b>High</b> audio quality</p>
                    </div>
                    <button class="btn-paket btn-abu">YOUR PLAN</button>
                </div>
            </div>

            <!--kartu 2-->
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="bungkus-kartu-populer">
                    <div class="populer text-center">Populer</div>
                    <div class="kartu">
                        <div class="header-hijau">FAMILY</div>
                        <div class="harga">
                            $15.99 <span class="durasi">/MO</span>
                        </div>
                        <div class="fitur">
                            <p><b>6 Premium accounts</b> for family</p>
                            <p><b>Block</b> explicit music</p>
                            <p><b>Family Mix:</b> a playlist for family</p>
                            <p><b>Spotify Kids:</b> a separate app</p>
                            <p><b>Ad-free,</b> play offline</p>
                        </div>
                        <button class="btn-paket btn-kuning">UPGRADE</button>
                    </div>
                </div>
            </div>

            <!--kartu 3-->
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="kartu">
                    <div class="header-kuning">DUO</div>
                    <div class="harga">$12.99 <span class="durasi">/MO</span></div>
                    <div class="fitur">
                        <p><b>2 Premium accounts</b> for a couple</p>
                        <p><b>Duo Mix:</b> a playlist for two</p>
                        <p><b>Ad-free</b> music listening</p>
                        <p><b>Play offline,</b> on-demand</p>
                        <p><b>High</b> audio quality</p>
                    </div>
                    <button class="btn-paket btn-kuning">UPGRADE</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
