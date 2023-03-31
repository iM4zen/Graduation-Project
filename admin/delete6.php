<?php 
include "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM subjectdata WHERE id=$id";
    $conn->query($sql);
}

header('location:/PROX/admin/dashboard6.php');
exit;
?>
