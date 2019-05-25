<!DOCTYPE html>
<html lang="en"><head>
  <title> Trang chủ</title>
  <meta charset="utf-8">
    
  <script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
  <!-- // jquery load -->
  <script type="text/javascript" src="<?php echo base_url() ?>jqueryupload/js/vendor/jquery.ui.widget.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>jqueryupload/js/jquery.fileupload.js"></script>

  <script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
  <link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>1.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <style >
    @media (min-width: 1230px) {
  .container {
  max-width: 1230px;
}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Admin</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="  nav-item dropdown">
      <!-- Quản lý bác sĩ -->
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop1" data-toggle="dropdown">
        Quản lý bác sĩ
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/bacsi/">Bác sĩ</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/csyt/">Cơ sở y tế</a>
       
        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/khoa/">Khoa</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/bomon/"> Bộ môn</a>
      </div>
    </li>
   <!--  Quản lý bệnh nhân -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop2" data-toggle="dropdown">
        Quản lý bệnh nhân
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/benhnhan/">Bệnh nhân</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/bhyt/">  Bảo hiểm y tế</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/benh/">Bệnh</a>
        
      </div>
    </li>
    <li class="nav-item dropdown">
      <!-- Quản lý bác sĩ -->
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Quản lý thuốc
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/thuoc/">Thuốc</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/lothuoc/">Lô thuốc</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/nhathuoc/">Nhà thuốc</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/thuocduocban/">Thuốc được bán</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/thuoctrongdon/">Thuốc trong đơn</a>
         <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/donthuoc/">Đơn thuốc</a>
         <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/sale/">Khuyến mại</a>

      </div>
    </li>
  </ul>
  <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> -->
     <!-- <form class="form-inline " action="/action_page.php">
    <input class="form-control  mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success  " type="submit">Search</button>
  </form> -->
</nav>

</body>
</html>