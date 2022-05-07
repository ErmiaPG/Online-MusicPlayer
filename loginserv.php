<?php
    ini_set('display_errors', 1);
    session_start();
    $error='';
    $user = $pass = "";
    if (isset($_POST['user']) and isset($_POST['pass'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
    }
    $con = mysqli_connect("sql213.gigfa.com", "gigfa_30646934", "gnzq65fs", "gigfa_30646934_Online_Musicplayer");
    mysqli_select_db($con, "userpass");
    $s = "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

   if($num == 1 and isset($_POST['submit-login'])){
        $_SESSION['Loged in'] = true;
        header('location: http://onlinemusicplayerproject.gigfa.com/refresh.html');
    }  
    else if($num != 1 and isset($_POST['submit-login']))
    {
        $error = "Username of Password is Invalid";
    }

    
?>