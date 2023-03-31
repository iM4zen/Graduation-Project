<?php 
include "connection.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $ta3yeen = $_POST['ta3yeen'];
    $salary = $_POST['salary'];
    $codemada = $_POST['codemada'];
	$q = "INSERT INTO `teachersdata`(`name`, `address`, `phone`, `ta3yeen`, `salary`, `codemada`) VALUES ('$name','$address','$phone','$ta3yeen','$salary','$codemada')";
    $query = mysqli_query($conn,$q);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        </li>
        <li class="nav-item">
        </li>
</ul>
    </div>
  </div>
  </nav>
    <div>
    <div class="container my-4">
        <form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">اسم المدرس</label>
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">العنوان</label>
    <input type="mkan" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">رقم التليفون</label>
    <input type="ameen" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">تاريخ التعين</label>
    <input type="ra2ed" name="ta3yeen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">المرتب</label>
    <input type="numbers" name="salary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">رقم المادة الدراسية</label>
    <input type="rqm" name="codemada" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    
  </div>
  </div>
  </div>
  <button type="submit" class="btn btn-outline-warning" name="submit">Submit</button>
  <a href="dashboard5.php" class="btn btn-danger">Cancel</a>

</form>

    </div>
    <div>
