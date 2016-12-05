<?php
if (isset($_POST["uploadImage"])) {
    session_start();
    include "connect.php";

    $target_dir = "../images/";
    $target_directory = "/images/";
    $target_file1 = $target_directory . basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            //echo "<script type='text/javascript'>alert('File is an image - " . $check["mime"] . ".')</script>";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        //echo "File already exists.";
        echo "<script type='text/javascript'>alert('File already exists.')</script>";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "<script type='text/javascript'>alert('Your file is too large.')</script>";
        //echo "Your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        //echo "Your file was not uploaded.";
        echo "<script type='text/javascript'>alert('Your file was not uploaded.')</script>";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            echo "<script type='text/javascript'>alert('The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.')</script>";
            
           mysqli_query($conn, "INSERT INTO storedimages (image_path)
           VALUES ('$target_file1')") ;
           $_SESSION["storedsession"] = $target_file1;

        } else {
            echo "<script type='text/javascript'>alert('Sorry there was an error upload your file!')</script>";
        }
    }
}
?>