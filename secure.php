<?php
//secure

session_start();
if(!isset($_SESSION['email']) )
{
    header("location:login.php");
}