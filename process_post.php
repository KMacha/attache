<?php
//$target_dir = "uploads/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//$uploadOk = 1;
//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
//    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//    if($check !== false) {
//        echo "File is an image - " . $check["mime"] . ".";
//        $uploadOk = 1;
//    } else {
//        echo "File is not an image.";
//        $uploadOk = 0;
//    }
//}
//// Check if file already exists
////if (file_exists($target_file)) {
////    echo "Sorry, file already exists.";
////    $uploadOk = 0;
////}
//// Check file size
////if ($_FILES["fileToUpload"]["size"] > 500000) {
////    echo "Sorry, your file is too large.";
////    $uploadOk = 0;
////}
//// Allow certain file formats
////if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
////    && $imageFileType != "gif" ) {
////    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
////    $uploadOk = 0;
////}
//// Check if $uploadOk is set to 0 by an error
//if ($uploadOk == 0) {
//    echo "Sorry, your file was not uploaded.";
//
//// if everything is ok, try to upload file
//} else {
//    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
//        echo "<script type='text/javascript'>window.alert('Successfully posted')</script>";
////        echo "<script>window.location.href ='mypost.php'</script>";
//    } else {
//        echo "Sorry, there was an error uploading your file.";
//        echo "<script type='text/javascript'>window.alert('something went wrong while posting .please try again')</script>";
////        echo "<script>window.location.href ='mypost.php'</script>";
//    }
//}



include "connect.php";

 session_start();

if (isset($_SESSION['email'])) {
    include "connect.php";

    $sessionemail = $_SESSION['email'];
    $sql = "SELECT * FROM persona_details WHERE persona_details.email = '$sessionemail'";
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)) {

//                              echo "<li><a href=''><span class='glyphicon glyphicon-user'></span>".$email;
//                             echo '<li><a href="signup.php"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span>Sign Up</span></a></li>';
    };


    echo "</a></li>";
    echo "<li><a href=''><span class='glyphicon glyphicon-user'></span>" . $email;
    echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout </a></li>";
//
} else {
    echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span>Login </a></li>";
    echo "<li><a href='signup.php'><span class='glyphicon glyphicon-log-in'></span>Sign Up </a></li>";
}


//get all the submitted data from the form
$category = $_POST['category']['value'];
//$featured = $_POST['featured']['value'];

$job_title = $_POST['job_title'];
$company = $_POST['company'];
$location = $_POST['location'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$job_description = $_POST['descr'];
$usr_email= $sessionemail;
//$usr_email = "Posters@gmail.com";

//$image = $_FILES['fileToUpload']['name'];
//$price = $_POST['price'];



//$sql = "INSERT INTO `products` (`id`, `category`, `title`, `description`, `image`, `namee`, `phone`, `poster`) VALUES (NULL, '$ctg', '$title', '$description', '$image', '$price','$phone','$usr1')";
//$sql = "INSERT INTO `products` (`id`,`title`, `description`, `image`, `price`,`featured`,`brand`) VALUES (NULL '$title', '$description', '$image', '$price','$featured')";

$sql = "INSERT INTO `New_Post` (`id`, `company`, `attachment_category`, `location`, `email`, `phone`, `job_description`, `job_title`, `usr_email`) VALUES (NULL , '$company', '$category', '$location', '$email', '$phone', '$job_description', '$job_title', '$usr_email')";


//$sql2 = "INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`, `featured`,`brand`) VALUES (NULL, '$title', '$description', '$image', '$price', '$featured','$brand')";
if (mysqli_query($db, $sql))
{
    echo "<script type='text/javascript'>window.alert('Posting was successful')</script>";
    echo "<script>window.location.href ='index.php'</script>";
}
else
{
    echo "<script type='text/javascript'>window.alert('Posting was Unsuccessful. Please try again')</script>";
    echo "<script>window.location.href ='new-post.php'</script>";
};




?>