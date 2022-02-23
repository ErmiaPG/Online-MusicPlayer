<?php
    ini_set('display_errors', 1);
    $error='';
    if(isset($_POST['submit'])){
        if(empty($_POST['user']) || empty($_POST['pass'])){
            $error = "Username or Password is Invalid";
        } 
        else
        {
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $conn = mysqli_connect("sql213.gigfa.com", "gigfa_30646934", "gnzq65fs", "gigfa_30646934_Online_Musicplayer");
            $db = mysqli_select_db($conn, "userpass");
            $query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");

            $rows = mysqli_num_rows($query);
            if($rows == 1){
                header("Location: index.html");
            }
            else
            {
                $error = "Username of Password is Invalid";
            }
        mysqli_close($conn);
        }
    }

?>
