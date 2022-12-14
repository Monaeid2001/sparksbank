<?php
require "./lib/db.php";
$id =$_GET['id'];
$row = getonecustomerbyid($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
      rel="stylesheet"
      href="./bootstrap-5.1.0-dist/css/bootstrap.min.css"
    />
    <script
      src="https://kit.fontawesome.com/b2c6d2915b.js"
      crossorigin="anonymous"></script>
    <title>View One</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light w-100 position-fixed">
      <div class="container">
        <a class="navbar-brand" href="home.php"><img class="w-25" src="./image//images.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fs-4 fw-bold" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-black">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="view.php">View Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transfer.php">Transfer Money</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="transferlist.php">Transfer History</a>
            </li>

          </ul>
  
        </div>
      </div>
    </nav>

<div class="container pt-5">
    <div class="form">
    <div class="table">
        <div class="t-head row">
            <div class="head  col-md-1">ID</div>
            <div class="head  col-md-1">Name</div>
            <div class="head  col-md-3">Email</div>
            <div class="head  col-md-2">Balance</div>
            <div class="head  col-md-2">Balance Number</div>
            <div class="head  col-md-2">Phone</div>
            <div class="head  col-md-1">View</div>
        </div>
        <div class="t-row row">
            <div class="head   col-md-1"><div><?= $row['id']?></div></div>
            <div class="head   col-md-1"><div> <?= $row['name']?></div></div>
            <div class="head   col-md-3"><div><?= $row['email']?></div></div>
            <div class="head   col-md-2"><div><?= $row['balance']?></div></div>
            <div class="head   col-md-2"><div> <?= $row['num_balance']?></div></div>
            <div class="head   col-md-2"><div> <?= $row['phone']?></div></div>
            <div class="head   col-md-1"><div><a href="viewone.php?id=<?=$row['id'];?>" class="btn btn-primary">View</a></div></div>
        </div>
        </div>
    </div>

<script src="./bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>