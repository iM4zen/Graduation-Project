<?php 
include "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM gadwal2lfasl WHERE id=$id";
    $conn->query($sql);
}

header('location:/PROX/admin/dashboard3.php');
exit;
?>
