<?php
//process login



extract($_POST);
include "connect.php";

$email = $_POST['email'];
$password = $_POST['password'];

//$sql ="select * from member where email='$email' and password='$password' ";
$sql ="select * from persona_details where email='$email' and password='$password' ";

//echo $sql;

$result=mysqli_query($db, $sql) or die( mysqli_error($db) );

$count = mysqli_num_rows($result);

if($count == 1)
{
    //success
    $row = mysqli_fetch_row($result);
    $email = $row[3];
    $password = $row[5];
//    $name = $row[1];
//    $phone = $row[4];
//    $address = $row[5];

    session_start();
    $_SESSION['email']=$email;
//    $_SESSION['name']=$name;

//    $_SESSION['email']=$email;
//    $_SESSION['phone']=$phone;
//    $_SESSION['address']=$address;

//    echo "<script type='text/javascript'>window.alert('Login was Sucessful')</script>";
    echo "<script>window.location.href ='index.php'</script>";

//    echo "right username or password";


}
else
{
    echo "<script type='text/javascript'>window.alert('wrong user name/ password')</script>";
    echo "<script>window.location.href ='login.php'</script>";



}

