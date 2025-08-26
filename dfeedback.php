<?php
    include("session.php");
    $id= $_GET['id'];
    mysqli_query($con,"DELETE FROM `feedback` WHERE id='$id'");
    echo '<script>alert("Deleted successfully"); window.location.href = "feedback.php";</script>';
?>