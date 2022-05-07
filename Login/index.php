<?php
    ini_set('display_errors', 1);
    include("../loginserv.php");
    session_start();
    $Loged_in = false;
    if (isset($_SESSION['Loged in']))
    {
        if($_SESSION['Loged in'] == true)
           {$Loged_in = true;}       
        if($Loged_in == true)
        { 
            header('location: ../Profile');
        }
    }

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="shortcut icon" href="../wp-content/uploads/favicon.ico">
    <link rel="icon" type="image/png" href="../wp-content/uploads/favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" sizes="180x180" href="../wp-content/uploads/apple-touch-icon-180x180.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

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
            background-color: white;
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
        
        input[name=submit-login] {
            width: 100%;
            padding: 10px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        div[name=rememberme]{
            width: 100%;
            font-size: 15px;
            font-family: Cambria, "Hoefler Text", "Liberation Sherif", Times, "Times New Roman", serif;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="http://onlinemusicplayerproject.gigfa.com/">
        <img src="../wp-content/uploads/favicon-192x192.png" width="30" height="30"  class="d-inline-block align-top" alt="">
        Online MusicPlayer
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <form class="form-inline">
                 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <br>
    <br>
    <br>
    <div class="login">
        <h1 align="center" style="color: black">Login</h1>
        <form action="" method="POST" style="text-align: center">
            <input type="text" id="user" name="user" required placeholder="username"><br><br>
            <input type="password" id="pass" name="pass" required placeholder="password"><br><br>
            <div class="form-group">
                <div class="custom-control custom-checkbox" name="rememberme" style="text-align: left">
                    <input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
                    <label name="rememberme" class="custom-control-label" for="customControlInline">Remember me</label>
                </div>
            </div> 
            <input class="btn btn-success" type="submit" value="Login" name="submit-login">
            <span style="color:red; font-size: 11px"><?php echo $error; ?></span>
            <br>
            <a style="color: gray" font-size="12">Don't have an account?</a> <a href="../SignUp" class="ml-2">Sign Up</a>
        </form>
    </div>


</body>

</html>