<?php

if(isset($_FILES['fileToUpload']))
{
$img = $_FILES["fileToUpload"]["name"];
$tmp = $_FILES["fileToUpload"]["tmp_name"];
$errorimg = $_FILES["fileToUpload"]["error"];
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'images/'; // upload directory
if(!empty($_POST['name']) || !empty($_POST['email']) || $_FILES['fileToUpload'])
{
$img = $_FILES['fileToUpload']['name'];
$tmp = $_FILES['fileToUpload']['tmp_name'];
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
if(move_uploaded_file($tmp,$path)) 
{
    $name=$_POST['ItemName'];
    $desc=$_POST['desc'];
    $price=$_POST['price'];
    $fileTobeUploaded=$_FILES['fileToUpload']['name'];
$connect=mysqli_connect("localhost","root","","auction_system");
if($connect)
{
$sql="insert into items(Name,Description,Price,ImagePath) values('$name','$desc','$price','$path')";

if(mysqli_query($connect,$sql))
{
    echo "Items successfully saved";
}
else{
    echo "failed".mysqli_error($connect);
}
}
else{
    echo "There was an error in connecting to the database";
}
}
}
}
}
else{
    echo "Choose the file to upload";
}
?>