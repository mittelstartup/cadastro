<!doctype html>
<html>
<head>
    <meta charset="UTF-8">

    <title>HTML5 Background Video - Torre Eiffel - TutsUP</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body, html{
            width: 100%;
            height: 100%;
            font-family: sans-serif;
            font-size:22px;
            line-height: 1.3;
        }
        .bg_video{
            position: fixed;
            right: 0;
            bottom: 0;
            max-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1000;
            background: url(images/torre.jpg) no-repeat;
            background-size: cover;
        }
        .body{
            padding:20px;
            background: rgba(255,255,255,0.9);
            margin: 15% auto 20px auto;
            max-width: 960px;
            border-radius: 10px;
        }
        .body h1{
            font-family: Georgia, serif;
            font-size:40px;
            text-align: center;
        }
        .body p{
            margin: 1.6em 0;
        }
    </style>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/agency.min.css" rel="stylesheet">
</head>

<body>
<video  poster="https://www.theuselesswebindex.com//static/videos/error.jpg" autobuffer="" autoplay="" loop=""  class="bg_video">
    <source src="https://www.theuselesswebindex.com//static/videos/error.mp4" type="video/mp4">
    <source src="https://www.theuselesswebindex.com//static/videos/error.ogv" type="video/ogg">
    <source src="https://www.theuselesswebindex.com//static/videos/error.webm" type="video/webm">
</video>
<div class="body">
    <h1>Página Não Encontrada <br>
    <a class="btn btn-primary" href="{{url('/')}}">Voltar para página inicial</a>
    </h1>
</div>
</body>
</html>