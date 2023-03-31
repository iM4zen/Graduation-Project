<?php 
include "connection.php";
$id= "";
$name= "";
$human= "";


$error= "";
$success= "";

if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
        header("location:dashboard.php");
        exit;
    }
    $id= $_GET['id'];
    $sql= "select * from gadwaalsfoof2ldrasa where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(!$row){
        header("location:dashboard.php");
        exit;
    }
    $name=$row["name"];
    $human=$row["human"];
}




?>
<?php 
include "connection.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $human = $_POST['human'];
    $q = " INSERT `gadwaalsfoof2ldrasa`(`name`, `human`) VALUES ('$name','$human')";
    $query = mysqli_query($conn,$q);
}
else{
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["human"];
    
    $sql = "update gadwaalsfoof2ldrasa set name='$name', human='$human' where id='$id'";
    $result = $conn->query($sql);
}
<----------->


<?php 
include "connection.php";
$id = "";
$name = "";
$human = "";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['id'])) {
        header("location:dashboard.php");
        exit;
    }
    $id = $_GET['id'];
    $sql = "select * from gadwaalsfoof2ldrasa where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if (!$row) {
        header("location:dashboard.php");
        exit;
    }
    $name = $row["name"];
    $human = $row["human"];
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $human = $_POST['human'];
    $id = $_POST['id'];
    
    $sql = "update gadwaalsfoof2ldrasa set name='$name', human='$human' where id='$id'";
    $result = $conn->query($sql);
    if (!$result) {
        $error = "Failed to update record";
    } else {
        $success = "Record updated successfully";
    }
}
?>

