<?php
include "connection.php";

$id = "";
$madaname = "";
$also8ra = "";
$aldrga2lkobra = "";
$modaresawal = "";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['id'])) {
        header("location:dashboard6.php");
        exit;
    }
    $id = $_GET['id'];
    $sql = "select * from subjectdata where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if (!$row) {
        header("location:dashboard6.php");
        exit;
    }
    $madaname = $row["madaname"];
    $also8ra = $row["also8ra"];
    $aldrga2lkobra = $row["aldrga2lkobra"];
    $modaresawal = $row["modaresawal"];
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $madaname = $_POST['madaname'];
    $also8ra = $_POST['also8ra'];
    $aldrga2lkobra = $_POST['aldrga2lkobra'];
    $modaresawal = $_POST['modaresawal'];

    $sql = "UPDATE subjectdata SET madaname='$madaname', also8ra='$also8ra', aldrga2lkobra='$aldrga2lkobra', modaresawal='$modaresawal' WHERE id=$id";

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
  <label> اسم المادة الدراسية </label>
  <input type="text" name="madaname" value="<?php echo $madaname; ?>" class="form-control"> <br>
  <label>الدرجة الصغري للمادة </label>
  <input type="text" name="also8ra" value="<?php echo $also8ra; ?>" class="form-control"> <br>
  <label> الدرجة الكبري للمادة </label>
  <input type="text" name="aldrga2lkobra" value="<?php echo $aldrga2lkobra; ?>" class="form-control"> <br>
  <label> مدرس اول مادة </label>
  <input type="text" name="modaresawal" value="<?php echo $modaresawal; ?>" class="form-control"> <br>
  <button type="submit" class="btn btn-outline-warning" name="submit">Submit</button>
  <a href="dashboard6.php" class="btn btn-dark">Cancel</a>
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
