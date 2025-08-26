<?php
    include("session.php");
    $id= $_GET['id'];
    $status= $_GET['status'];
    mysqli_query($con,"UPDATE `pickuprequest` SET `status`='$status' WHERE id='$id'");
    echo '<script>alert("Updated successfully"); window.location.href = "npickupreq.php";</script>';
?>