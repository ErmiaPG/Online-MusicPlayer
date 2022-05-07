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
    <title>EditProfile</title>
    <link rel="shortcut icon" href="../../wp-content/uploads/favicon.ico">
    <link rel="icon" type="image/png" href="../../wp-content/uploads/favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" sizes="180x180" href="../../wp-content/uploads/apple-touch-icon-180x180.png">
    
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
        .avatar{
            width:200px;
            height:200px;
        }	
        
        * {
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="../../wp-content/uploads/favicon-192x192.png" width="30" height="30"  class="d-inline-block align-top" alt="">
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
                    { echo '<a class="nav-link" href="../../Login">Login / Sign up</a>';}
                    else
                    { echo '<a class="nav-link" href="../../Profile">Profile</a>';}
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../../Playlist">Playlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../Musics">Musics</a>
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

    <div class="container bootstrap snippets bootdey">
        <h1 class="text-primary">Edit Profile</h1>
        <hr style="border: 1px solid rgb(255, 255, 255);">
      <form action="" method="GET">
        <div class="row">
          <!-- left column -->
          <div class="col-md-3">
            <div class="text-center">
              <img src="../../wp-content/uploads/ermiapg-profile.jpeg" class="avatar rounded-circle img-thumbnail" alt="avatar">
              <h6 style="color: aqua;">Upload a different photo...</h6>
              
              <input type="file" class="form-control">
            </div>
          </div>
          
          <!-- edit form column -->
          <div class="col-md-9 personal-info">
            <h3 style="color: rgb(187, 255, 0);">Personal info</h3>
            
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-lg-3 control-label" style="color: rgb(255, 255, 255);">Username:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" placeholder="Typing...">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label" style="color: rgb(255, 255, 255);">Biography:</label>
                <div class="col-lg-8">
                  <textarea class="form-control" type="text" placeholder="Tyipng..."></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label" style="color: rgb(255, 255, 255);">Time Zone:</label>
                <div class="col-lg-8">
                  <div class="ui-select">
                    <select id="user_time_zone" class="form-control">
                      <option value="Hawaii">(GMT-10:00) Hawaii</option>
                      <option value="Alaska">(GMT-09:00) Alaska</option>
                      <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                      <option value="Arizona">(GMT-07:00) Arizona</option>
                      <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                      <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                      <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                      <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                    </select>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      <input class="btn btn-success" type="submit" value="Submit" name="submit-editptofile">
      </form>
    </div>
    <hr>


</body>

</html>