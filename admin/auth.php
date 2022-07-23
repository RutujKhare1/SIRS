<?php
session_start();
if(!isset($_SESSION['sess_user'])){
header("Location: login.php");
exit(); }
?>