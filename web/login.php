<?php
    include_once '../mail/mail_sender.php';
    session_start();
    $email = $_POST['username'];
    $pass = $_POST['pass'];

    if($email == "admin@lampros.ml" && $pass == "Unpr#d!ct@bl#"){
        header("location: dashboard.php");
    }
    else{
        if($_SESSION['log_attempt'] == 0)
            $_SESSION['log_attempt'] = 1;
        else
            $_SESSION['log_attempt'] += 1;
        
        if($_SESSION['log_attempt'] == 3){
            sendMail("neelpatel1905.np@gmail.com","About Suspicious Login in Admin panel","Admin account had multiple attept of login with wrong credential This is mail to make you aware to secure account");
            header("location: error.php");
        }
        else
            header("location: index.php?msg=fail");
    }
?>