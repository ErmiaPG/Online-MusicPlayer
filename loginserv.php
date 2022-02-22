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
            $conn = mysqli_connect("185.27.134.10", "root", "");
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

  /* $user = $pass = "";
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
    $db = new mysqli("sql213.gigfa.com", "root", "", "hell");

    $sql = "INSERT INTO users (id, username, password) VALUES(NULL, '$user', '$pass')";
    $db->query($sql);*/


?>
