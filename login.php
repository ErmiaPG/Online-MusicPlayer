<?php
ini_set('display_errors', 1);
include("loginserv.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
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
        
        .login {
            width: 360px;
            margin: 50px auto;
            font: Cambria, "Hoefler Text", "Liberation Sherif", Times, "Times New Roman", serif;
            border-radius: 10px;
            border: 2px solid #ccc;
            padding: 10px 40px 25px;
            margin-top: 25px;
        }
        
        input[type=text],
        input[type=password]{
            width: 99%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid #ccc;
            padding-left: 5px;
            font-size: 16px;
            font-family: Cambria, "Hoefler Text", "Liberation Sherif", Times, "Times New Roman", serif;
        }
        
        button[name=submit-login] {
            width: 100%;
            padding: 10px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Online MusicPlayer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Login.php">Login / Sign up</a>
                    <li class="nav-item">
                        <a class="nav-link" href="Playlist.html">Playlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Musics.html">Musics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/" tabindex="-1" aria-disabled="true">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact Us</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="/">Website</a>
                            <a class="dropdown-item" href="https://www.instagram.com/ermiapg" target="_blank">Instagram</a>
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


    <div class="login">
        <h1 align="center" style="color: white">Login</h1>
        <form action="/action_page.php" method="POST" style="text-align: center">
            <input type="text" id="user" name="user" required placeholder="username"><br><br>
            <input type="password" id="pass" name="pass" required placeholder="password"><br><br>
            <button class="btn btn-success" type="submit" value="Login" name="submit-login">Login</button>
            <span><?php echo $error; ?></span>
        </form>
    </div>


</body>

</html>
