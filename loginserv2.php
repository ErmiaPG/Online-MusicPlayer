<?php
    ini_set('display_errors', 1);
    $error='';
    $user = $pass = "";
    if (isset($_POST['user']) and isset($_POST['pass'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        function test_input($data) {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
            return $data;
        }
    }
    $con = mysqli_connect("sql213.gigfa.com", "gigfa_30646934", "gnzq65fs", "gigfa_30646934_Online_Musicplayer");
    mysqli_select_db($con, "userpass");
    $s = "SELECT * FROM userpass WHERE user='$user'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1 and isset($_POST['submit-SignUp']))
    {
        $error= 'Username already taken';
    }
    else if($num != 1 and isset($_POST['submit-SignUp']))
    {
        $sql = "INSERT INTO `userpass`(`id`, `user`, `pass`) VALUES(NULL, '$user', '$pass')";
        $con->query($sql);
        $error= 'successful';
    }
    


?>
