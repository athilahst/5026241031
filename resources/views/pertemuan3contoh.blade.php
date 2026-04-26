<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas Pertemuan 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e6d7e7;
        }

        .jumbotron {
            background-color: #f2b2ea;
            text-align: center;
        }

        .film-title {
            font-weight: bold;
            margin-top: 10px;
            text-align: center;
        }

        .film-description {
            font-size: 14px;
            text-align: justify;
        }

        .name-desc {
            font-size: 14px;
            color: black;
            text-align: left;
        }

        .custom-btn {
            background-color: #735d73;
            color: whitesmoke;
        }

        hr {
            border-top: 2px solid #aa93b2;
            margin: 30px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <!--ini header di kotak gede-->
        <div class="jumbotron">
            <p>Welcome to! </p>
            <h1>Athilah's Favorite Films</h1>
            <p>Based on what I'm currently watching🎬</p>
            <p>
                <a class="btn custom-btn" href="#">Explore Movies...</a>
            </p>
            <hr>
            <p>
                <a class="name-desc">Athilah Syahshiyah Tsabitah 5026241031</a>
            </p>
        </div>

        <!--list film-->
        <div class="row">
            <div class="col-md-3">
                <img src="https://m.media-amazon.com/images/M/MV5BZDYxY2I1OGMtN2Y4MS00ZmU1LTgyNDAtODA0MzAyYjI0N2Y2XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"
                    class="img-responsive img-rounded" width="95%">
                <p class="film-title">Avatar: Fire and Ash</p>
                <p class="film-desc">The story of the Sully family in Avatar: Fire and Ash explores a darker side of
                    Pandora.</p>
            </div>

            <div class="col-md-3">
                <img src="https://nos.jkt-1.neo.id/media.cinema21.co.id/movie-images/25ZOA2.jpg"
                    class="img-responsive img-rounded" width="95%">
                <p class="film-title">Zootopia 2</p>
                <p class="film-desc">Zootopia 2 follows Judy and Nick as they solve a new mystery in Zootopia.</p>
            </div>

            <div class="col-md-3">
                <img src="https://lumiere-a.akamaihd.net/v1/images/pp_thedevilwearsprada_21373_dabe3cc6.jpeg"
                    class="img-responsive img-rounded" width="95%">
                <p class="film-title">The Devil Wears Prada</p>
                <p class="film-desc">Follows a young assistant navigating the demanding world of fashion under a
                    powerful editor.</p>
            </div>

            <div class="col-md-3">
                <img src="https://m.media-amazon.com/images/I/81YOuOGFCJL._AC_SY679_.jpg"
                    class="img-responsive img-rounded" width="95%">
                <p class="film-title">Harry Potter</p>
                <p class="film-desc">Fantasy story about a young wizard and his adventures.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <img src="https://m.media-amazon.com/images/I/51A7EGmxK-L._AC_UF894,1000_QL80_.jpg"
                    class="img-responsive img-rounded" width="95%">
                <p class="film-title">Game of Thrones</p>
                <p class="film-desc">Nine noble families fight for power in the Seven Kingdoms while an ancient threat
                    rises in the North.</p>
            </div>

            <div class="col-md-3">
                <img src="https://posterwa.com/cdn/shop/products/WEDNESDAY4.jpg?v=1682618808"
                    class="img-responsive img-rounded" width="95%">
                <p class="film-title">Wednesday</p>
                <p class="film-desc">Wednesday Addams uncovers dark mysteries at Nevermore Academy.</p>
            </div>

            <div class="col-md-3">
                <img src="https://m.media-amazon.com/images/M/MV5BMTk5MjM4OTU1OV5BMl5BanBnXkFtZTcwODkzNDIzMw@@._V1_FMjpg_UX1000_.jpg"
                    class="img-responsive img-rounded" width="95%">
                <p class="film-title">500 Days of Summer</p>
                <p class="film-desc">A bittersweet story about love, expectations, and heartbreak told through 500 days
                    of a relationship.</p>
            </div>

            <div class="col-md-3">
                <img src="https://m.media-amazon.com/images/M/MV5BZTIyNzk1Y2YtODU2Ny00OGQ3LWFkMTItZTM0ZTkxNzhkODNjXkEyXkFqcGc@._V1_.jpg"
                    class="img-responsive img-rounded" width="95%">
                <p class="film-title">Violet Evergarden</p>
                <p class="film-desc">A former soldier learns to understand emotions while writing heartfelt letters for
                    others.</p>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:40px;">
        <div class="col text-center">

            <ul class="pagination">
                <li><a href="#">Previous</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
    </div>
</body>

</html>
