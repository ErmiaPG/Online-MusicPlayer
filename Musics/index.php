<?php
    ini_set('display_errors', 1);
    session_start();
    $Loged_in = false;
    if (isset($_SESSION['Loged in']))
    {
        if($_SESSION['Loged in'] == true)
           {$Loged_in = true;}
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Musics</title>
    <link rel="shortcut icon" href="../wp-content/uploads/favicon.ico">
    <link rel="icon" type="image/png" href="../wp-content/uploads/favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" sizes="180x180" href="../wp-content/uploads/apple-touch-icon-180x180.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        body {
            background-image: url('https://i.ibb.co/kcByGwK/andre-benz-Jn-B8-Gio4-GZo-unsplash.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        
        * {
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="http://onlinemusicplayerproject.gigfa.com/">
        <img src="../wp-content/uploads/favicon-192x192.png" width="30" height="30"  class="d-inline-block align-top" alt="">
        Online MusicPlayer
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"                  aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <?php 
                    if($Loged_in == false)
                    { echo '<a class="nav-link" href="../Login">Login / Sign up</a>';}
                    else
                    { echo '<a class="nav-link" href="../Profile">Profile</a>';}
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../Playlist">Playlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Musics">Musics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/" tabindex="-1" aria-disabled="true">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Social Media</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="http://onlinemusicplayerproject.gigfa.com">Website</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://www.instagram.com/ermiapg" target="_blank">Instgram</a>
                            <a class="dropdown-item" href="https://www.youtube.com/channel/UCBZ8j63pCuhI27nJOXg3s2g?view_as=subscriber" target="_blank">You Tube</a>
                        </div>
                    </li>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <br>
    <br>

<img src= "../wp-content/pic/4d97b9bf884beee9a9a856f1fe46ad9e.jpg" width="200" height="250" style="position:absolute; left: 5%; top: 20%"> <img src= "../wp-content/pic/ColdplayBBC071221_(53_of_53)_(51740659597).jpg" width="300" height="200" style="position:absolute; left: 72%; top: 20%"> <up> <center> <img src= "../wp-content/pic/Coldplay_620x385L-0ccf92d822.jpg" width="400" height="400"> <center>
        <p> <font size="6" color="gold">Coldplay</font> </p>
    </a>
<audio controls>
<source src="../wp-content/Upload_Musics/Coldplay-Hymn-For-The-Weekend-Official-video_9624.mp3" type="audio/mpeg">
</audio>
<br>
<audio controls>
<source src="../wp-content/Upload_Musics/Coldplay-Hurts-Like-Heaven-128.mp3"type="audio/mpeg" >
</audio>
<br>
<audio controls>
<source src="../wp-content/Upload_Musics/Coldplay-Yellow_9628.mp3"type="audio/mpeg" >
</audio>
</body>
</html>

    <br>
    <br>
    <br>
<img src= "../wp-content/pic/dra.jpg" width="200" height="250" style="position:absolute; left: 5%; top: 120%"> <img src= "../wp-content/pic/38256-670x390.jpg" width="300" height="200" style="position:absolute; left: 72%; top: 120%"> <up> <center> <img src= "../wp-content/pic/\artworks-000094504841-564mvl-t500x500.jpg" width="400" height="400"> <center>
    <p> <font size="6" color="gold">Eminem</font> </p>
    </a>
<audio controls>
<source src="../wp-content/Upload_Musics/89771919.mp3" type="audio/mpeg">
</audio>
<br>
<audio controls>
<source src="../wp-content/Upload_Musics/SaveVideoBot.com_1271688_Eminem_-_Rap_God_[128]-b9lupj257ojo02i.mp3"type="audio/mpeg" >
</audio>
<br>
<audio controls>
<source src="../wp-content/Upload_Musics/Copy of Recoverd_mp3_file(162).mp3"type="audio/mpeg" >
</audio>
</body>
</html>
