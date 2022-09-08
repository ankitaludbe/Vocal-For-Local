<?php
session_start();
include 'db.php';
unset($_SESSION['username']);
header('location:index.php');
?>