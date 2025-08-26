<?php
    include("session.php");
    $id= $_GET['id'];
    mysqli_query("DELETE FROM `notification` WHERE id='$id'");
    echo '<script>alert("Deleted successfully"); window.location.href = "vnot.php";</script>';
?>