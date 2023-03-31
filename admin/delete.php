<?php 
include "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM gadwaalsfoof2ldrasa WHERE id=$id";
    $conn->query($sql);
}

header('location:/PROX/admin/dashboard1.php');
exit;
?>
