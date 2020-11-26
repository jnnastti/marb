<?php 

session_start();

$header = ("../../assets/logo.png");

$whatsapp =("../../assets/whatsapp.svg");
$instagram = ("../../assets/instagram.svg");
$facebook = ("../../assets/facebook.svg");
$linkedin = ("../../assets/linkedin.svg");
$twitter = ("../../assets/twitter.svg");


$login = $_SESSION['loginOn'];

if($login != 'notNull') {
    header('location:../Home');
}

?>
