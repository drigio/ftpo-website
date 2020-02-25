<?php

require '../db.php';

$link = $mysqli->escape_string($_POST["link"]);

$sql = "UPDATE index_details SET scrolling_link='$link'";

if($mysqli->query($sql)) {
    echo '<script>alert("Scrolling Link Updated Successfully")</script>';
    header("refresh:0;url=scrollinglink.php");
} else {
    echo '<script>alert("Error Updating Scrolling Link")</script>';
    header("refresh:0;url=scrollinglink.php");
}
?>