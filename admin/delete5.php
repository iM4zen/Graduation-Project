<?php 
include "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM teachersdata WHERE id=$id";
    $conn->query($sql);
}

header('location:/PROX/admin/dashboard5.php');
exit;
?>
