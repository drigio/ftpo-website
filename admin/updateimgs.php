<?php

require '../db.php';

$img1 = null;
$img2 = null;
$img3 = null;
$ext1 = null;
$ext2 = null;
$ext3 = null;

if($_FILES['img1']['size'] != 0) {
    $img1 = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
    $ext1=explode(".",$_FILES['img1']['name']);
}
    
if($_FILES['img2']['size'] != 0) {
    $img2 = addslashes(file_get_contents($_FILES['img2']['tmp_name']));
    $ext2=explode(".",$_FILES['img2']['name']);
}
    
if($_FILES['img3']['size'] != 0) {
    $img3 = addslashes(file_get_contents($_FILES['img3']['tmp_name']));
    $ext3=explode(".",$_FILES['img3']['name']);
}
    

$allowedext =  array('bmp','gif' ,'png', 'jpeg', 'jpg');

if(!empty($img1) && !in_array($ext1[1], $allowedext) ) {
    echo '<script>alert("File Extension not allowed! Please upload only jpg, jpeg, bmp, png, gif images.")</script>';
    header("refresh:0;url=admin.php");
} else if(!empty($img2) && !in_array($ext2[1], $allowedext) ) {
    echo '<script>alert("File Extension not allowed! Please upload only jpg, jpeg, bmp, png, gif images.")</script>';
    header("refresh:0;url=admin.php");
} else if(!empty($img3) && !in_array($ext3[1], $allowedext) ) {
    echo '<script>alert("File Extension not allowed! Please upload only jpg, jpeg, bmp, png, gif images.")</script>';
    header("refresh:0;url=admin.php");
} else {
    
    if(empty($img2) && empty($img3)) {
        $sql = "UPDATE index_details SET banner_img1='$img1'";
    } else if(empty($img1) && empty($img3)) {
        $sql = "UPDATE index_details SET banner_img2='$img2'";
    } else if(empty($img1) && empty($img2)) {
        $sql = "UPDATE index_details SET banner_img3='$img3'";
    } else if(empty($img1)) {
        $sql = "UPDATE index_details SET banner_img2='$img2', banner_img3='$img3'";
    } else if(empty($img2)) {
        $sql = "UPDATE index_details SET banner_img1='$img1', banner_img3='$img3'";
    } else if(empty($img3)) {
        $sql = "UPDATE index_details SET banner_img1='$img1', banner_img2='$img2'";
    }

    if($mysqli->query($sql)) {
        echo '<script>alert("Index Images Updated Successfully")</script>';
        header("refresh:0;url=scrollinglink.php");
    } else {
        echo '<script>alert("Error Updating Index Images")</script>';
        header("refresh:0;url=scrollinglink.php");
    }

}

?>