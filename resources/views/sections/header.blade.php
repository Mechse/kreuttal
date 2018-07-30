<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="fonts/typicons.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container">
            <a class="navbar-brand logo" href="{{url("/")}}">
                <img alt="Logo Kreuttal" src="img/Kreuttal2.png" class="logo-header">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse"id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="{{ url("/")}}">Startseite</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url("/facilities")}}">Anlage</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url("/price")}}">Preise</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url("/club")}}">Verein</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url("/gallery")}}">Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url("/calender")}}">Kalender</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url("/contact")}}">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </nav>
