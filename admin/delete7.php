<?php 
include "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM nateega2ltolab WHERE id=$id";
    $conn->query($sql);
}

header('location:/PROX/admin/dashboard7.php');
exit;
?>
