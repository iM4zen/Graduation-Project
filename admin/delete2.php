<?php 
include "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM gadwaal2ltoolab WHERE id=$id";
    $conn->query($sql);
}

header('location:/PROX/admin/dashboard2.php');
exit;
?>
