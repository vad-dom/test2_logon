<?php
    if (isset($_GET['logout']) && $_GET['logout'] == 'ok') {
        session_start();
        session_unset();
        header("Location: /"); 
        exit();
    }
?>