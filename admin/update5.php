<?php
include "connection.php";

$id = "";
$name = "";
$address = "";
$phone = "";
$ta3yeen = "";
$salary = "";
$codemada = "";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['id'])) {
        header("location:dashboard5.php");
        exit;
    }
    $id = $_GET['id'];
    $sql = "select * from teachersdata where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if (!$row) {
        header("location:dashboard5.php");
        exit;
    }
    $name = $row["name"];
    $address = $row["address"];
    $phone = $row["phone"];
    $ta3yeen = $row["ta3yeen"];
    $salary = $row["salary"];
    $codemada = $row["codemada"];
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $ta3yeen = $_POST['ta3yeen'];
    $salary = $_POST['salary'];
    $codemada = $_POST['codemada'];

    $sql = "UPDATE teachersdata SET name='$name', address='$address', phone='$phone', ta3yeen='$ta3yeen', salary='$salary', codemada='$codemada' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $success = "Record updated successfully";
    } else {
        $error = "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <span class="material-icons-outlined">search</span>
        </div>
        <div class="header-right">
          <span class="material-icons-outlined">notifications</span>
          <span class="material-icons-outlined">email</span>
          <span class="material-icons-outlined">account_circle</span>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">inventory</span> Mazen
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

       <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="dashboard.php">
              <span class="material-icons-outlined">dashboard</span> القائمة الرئيسية
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="dashboard1.php">
              <span class="material-icons-outlined">settings</span> جدول الصفوف الدراسية
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="dashboard2.php">
              <span class="material-icons-outlined">settings</span> جدول الطلاب
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="dashboard3.php">
              <span class="material-icons-outlined">settings</span> جدول الفصول
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="dashboard4.php">
              <span class="material-icons-outlined">settings</span> جدول الفصول والمدرسين
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="dashboard5.php">
              <span class="material-icons-outlined">settings</span> جدول المدرسين
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="dashboard6.php">
              <span class="material-icons-outlined">settings</span> جدول المواد الدراسية
            </a>
          </li>
			<li class="sidebar-list-item">
            <a href="dashboard7.php">
              <span class="material-icons-outlined">settings</span> جدول درجات مواد الطلاب
            </a>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">جدول المدرسين</p>
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <p class="text-primary"></p>
              <span class="material-icons-outlined text-red">notification_important</span>
            </div>
            <span class="text-primary font-weight-bold"></span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary"></p>
              <span class="material-icons-outlined text-red">notification_important</span>
            </div>
            <span class="text-primary font-weight-bold"></span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary"></p>
              <span class="material-icons-outlined text-red">notification_important</span>
            </div>
            <span class="text-primary font-weight-bold"></span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary"></p>
              <span class="material-icons-outlined text-red">notification_important</span>
            </div>
            <span class="text-primary font-weight-bold"></span>
          </div>


        </div>

        <div class="table">

<div class="container my-4">
<form method="POST">
  <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>
  <label> اسم المدرس </label>
  <input type="text" name="name" value="<?php echo $name; ?>" class="form-control"> <br>
  <label>العنوان </label>
  <input type="text" name="address" value="<?php echo $address; ?>" class="form-control"> <br>
  <label> رقم التليفون </label>
  <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control"> <br>
  <label> تاريخ التعين </label>
  <input type="text" name="ta3yeen" value="<?php echo $ta3yeen; ?>" class="form-control"> <br>
  <label> المرتب </label>
  <input type="text" name="salary" value="<?php echo $salary; ?>" class="form-control"> <br>
  <label> رقم المادة الدراسية </label>
  <input type="text" name="codemada" value="<?php echo $codemada; ?>" class="form-control"> <br>
  <button type="submit" class="btn btn-outline-warning" name="submit">Submit</button>
  <a href="dashboard5.php" class="btn btn-dark">Cancel</a>
</form>
</table>
          </div>

        </div>
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>
