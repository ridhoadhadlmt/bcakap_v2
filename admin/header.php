

<!DOCTYPE html>
<html>
<head>
  <title>admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../font-awesome-5.6.3/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">  
  <link rel="stylesheet" type="text/css" href="style.css">

 <script type="text/javascript" src="../DataTables/media/js/jquery.js"></script>
 <script type="text/javascript" src="../DataTables/media/js/jquery.dataTables.js"></script>
 <link rel="stylesheet" type="text/css" href="../DataTables/media/css/jquery.dataTables.css">
 <link rel="stylesheet" type="text/css" href="../DataTables/media/css/dataTables.bootstrap.css">
  
</head>
<body>
<nav class="navbar fixed-top navbar-expand-md navbar-light bg-white">
 <!-- <div class="container-fluid"> -->
 <a href="" class="navbar-brand"><img src="../assets/icon/kodam.png" width="50">BCAKAP</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style="color: #fff"></span>
  </button>
 <div class="collapse navbar-collapse" id="myNavbar">  
 <ul class="navbar-nav ml-auto">
  <li class="nav-item dropdown"><a href="" class="nav-link" data-toggle="dropdown"><?php echo $_SESSION['level'];?> <i class="fa fa-cog"></i></a>
   <div class="dropdown-menu dropdown-menu-right">
   <a href="../logout.php" class="dropdown-item"><i class="fa fa-sign-out-alt"></i> Keluar</a>  
   </div>   
  </li> 
 </ul>
 </div>  
 <!-- </div> -->
</nav>
<div class="jumbotron">
  <!-- <h1>Dashboard</h1>  -->
</div>
<div class="col-md-10" style="float:right;margin-bottom: 10px;">
  
   <?php
  if($home == null){
    include 'dashboard.php';
  }
  else{
    if($home =='showBlog'){
      include 'showBlog.php';
    }
    if($home =='addblog'){
      include 'addBlog.php';
    }
    if($home =='showNews'){
      include 'showNews.php';
    }
    if($home =='addNews'){
      include 'addNews.php';
    }
    if($home =='showGaleri'){
      include 'showGaleri.php';
    }
    if($home =='addGaleri'){
      include 'addGaleri.php';
    }
  }
   ?> 
 <hr>
&copy;Copyright 2019 | Kodam I Bukit Barisan - All Right Reserved  
</div>
