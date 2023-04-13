<?php

$conn = mysqli_connect("localhost","root","","");

$proName = $_POST["pname"];
$pricePro= $_POST["price"];
$IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "images/".$img_name;
    move_uploaded_file($img_loc,'images/'.$img_name);

$query = "INSERT INTO 'image' (`Pname`, `Price`, `Image`) VALUES ('$proName','$pricePro','$target_file')"
    mysqli_query($con,$query);



?>