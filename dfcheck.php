<?php
    include("session.php");
    $id= $_GET['id'];
    mysqli_query($con,"UPDATE `inspector` SET `status`='inactive' WHERE id='$id'");
    echo '<script>alert("Deleted successfully"); window.location.href = "viewfcheck.php";</script>';
?>