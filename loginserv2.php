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
        echo $user;
        }
        $db = new mysqli("sql213.gigfa.com", "gigfa_30646934", "gnzq65fs", "gigfa_30646934_Online_Musicplayer");

        $sql = "INSERT INTO `userpass`(`id`, `user`, `pass`) VALUES(NULL, '$user', '$pass')";
        $db->query($sql);


?>