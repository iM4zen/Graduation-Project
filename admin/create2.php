<?php 
include "connection.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $deen = $_POST['deen'];
    $rqmfasl = $_POST['rqmfasl'];
    $ghyab = $_POST['ghyab'];
    $mstwa = $_POST['mstwa'];
    $nshaat = $_POST['nshaat'];
	$q = "INSERT INTO `gadwaal2ltoolab`(`name`, `phone`, `deen`, `rqmfasl`, `ghyab`, `mstwa`, `nshaat`) VALUES ('$name','$phone','$deen','$rqmfasl','$ghyab','$mstwa','$nshaat')";
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
    <label for="exampleInputEmail1" class="form-label">الأسم</label>
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الهاتف</label>
    <input type="phone" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الديانة</label>
    <input type="deen" name="deen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">رقم الفصل</label>
    <input type="rqmfasl" name="rqmfasl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الغياب</label>
    <input type="ghyab" name="ghyab" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">مستوي الطالب</label>
    <input type="mstwa" name="mstwa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">النشاط المشترك به</label>
    <input type="nshaat" name="nshaat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    
  </div>
  </div>
  </div>
  <button type="submit" class="btn btn-outline-warning" name="submit">Submit</button>
  <a href="dashboard2.php" class="btn btn-danger">Cancel</a>

</form>

    </div>
    <div>
