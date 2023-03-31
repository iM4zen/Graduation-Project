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
            <span class="material-icons-outlined">inventory</span> MAZEN
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
		<a class='btn btn-success' href='create5.php'>اضافة</a>
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

  <table class="table">
  <thead>
    <tr>
      <th>رقم المدرس</th>
      <th>اسم المدرس</th>
      <th>العنوان</th>
      <th>رقم التليفون</th>
      <th>تاريخ التعين</th>
      <th>المرتب</th>
      <th>رقم المادة الدراسية</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include "connection.php";
    $sql= "select * from teachersdata";
    $result = $conn->query($sql);
    if(!$result){
        die("invalid query!");
    }
    while($row=$result->fetch_assoc()){
    echo "
    <tr>
      <th>$row[id]</th>
      <td>$row[name]</td>
      <td>$row[address]</td>
      <td>$row[phone]</td>
      <td>$row[ta3yeen]</td>
      <td>$row[salary]</td>
      <td>$row[codemada]</td>
      <td>
      
      <a class='btn btn-success' href='update5.php?id=$row[id]'>Edit</a>
      <a class='btn btn-danger' href='delete5.php?id=$row[id]'>Delete </a> 

      </td>
    </tr>
    ";
    }
    ?>
  </tbody>
</table>
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
