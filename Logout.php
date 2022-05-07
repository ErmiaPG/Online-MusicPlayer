<?php
    if(isset($_GET['submit-logout'])) {
        ini_set('display_errors', 1);
        session_start();
        session_destroy();
        unset($_SESSION["id"]);
        unset($_SESSION['user']);
        header('location: ../Login');
}
?>