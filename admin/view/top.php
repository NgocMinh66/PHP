<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Shop - Trang quản trị</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/d899a74ef7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .row.content {height: 900px}
    .sidenav {background-color: #f1f1f1; height: 100%;}
    @media screen and (max-width: 767px) { .row.content {height: auto;} }
  </style>
</head>
<body> 
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Book Shop</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li class="active"><a href="#">Bảng điều khiển</a></li>
        <li><a href="">Quản lý danh mục</a></li>
        <li><a href="">Quản lý mặt hàng</a></li>
        <li><a href="">Khác...</a></li>        
      </ul>
    </div>
  </div>
</nav>
<!-- Menu mh nhỏ - kết thúc -->
<div class="container-fluid">
  <div class="row content">
    
    <!-- Menu mh lớn -->     
    <div class="col-sm-3 sidenav hidden-xs">
      <h3>          
      <img src="../../images/b.png" width="8%" >  
        Shop
        <i class="fa-brands fa-bilibili"></i> 
        </h3>
        <h3 text align="center">
        <span class="label label-info">M</span>
        <span class="label label-warning">E</span>
        <span class="label label-success">N</span>
        <span class="label label-danger">U</span>
        </h3>
        
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-cog"></span> Bảng điều khiển</a></li>
        <li><a href=""><span class="glyphicon glyphicon-list-alt"></span> Quản lý danh mục</a></li>
        <li><a href=""><span class="glyphicon glyphicon-gift"></span> Quản lý mặt hàng</a></li>
        <li><a href=""><span class="glyphicon glyphicon-list-alt"></span> Quản lý... (bổ sung)</a></li>
</ul>
<ul class = "ml-2 nav nav-pills nav-stacked">
<form class="d-flex">
      <input  class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
      <button class="btn btn-outline-success" style="font-size: 18px;padding: 10px 14px; " type="submit">Search</button>
    </form>
</ul>
    </div>

    <!-- Menu mh lớn - kết thúc -->
    <br>

    <div class="col-sm-9">
      <div class="container-fluid">  
        <!-- Thông tin người dùng - sẽ bổ sung ở bài thực hành sau -->   
     
        <div class="dropdown" style="text-align: right;">
        
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="glyphicon glyphicon-user"></span> Chào --tên--
            <span class="caret"></span>
         
          </a>
            
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Thông báo</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-edit"></span> Hồ sơ cá nhân</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Đổi mật khẩu</a></li>
            <li class="divider"></li>
            <li><a href=""><span class="glyphicon glyphicon-log-out"></span> Thoát</a></li>
          </ul>
          <a href="#" >
          <span class="glyphicon glyphicon-shop-cart"></span> Giỏ hàng
        </a>
        </div>
      </div>
      

     
    
