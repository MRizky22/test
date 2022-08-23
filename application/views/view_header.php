<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- panggil bootstrap -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- custom sidebar css -->
  <link href="<?php echo base_url('assets/css/style4.css'); ?>" rel="stylesheet">
  <!-- panggil boxicons -->
  <link href="<?php echo base_url('assets/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <!-- datatable css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/datatables.css'); ?>">
  <!-- datatable min -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/datatables.min.css'); ?>">
  <!-- datatable js -->
  <script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/DataTables/datatables.js'); ?>"></script>
  <!-- font awesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome/css/all.css'); ?>">
  <!-- datatable js -->
  <script type="text/javascript" language="javascript" src="<?php echo base_url('assets/DataTables/jquery.dataTables.min.js'); ?>"></script>

  <title>WebCI</title>
</head>

<body>
  <div class="sidebar">

    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
      <div class="logo_name">Belajar Ci</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <i class='bx bx-search'></i>
        <input type="text" placeholder="Search...">
        <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="<?php echo base_url('biodata'); ?>">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="<?php echo base_url('siswa'); ?>">
          <i class='bx bx-user'></i>
          <span class="links_name">Siswa</span>
        </a>
        <span class="tooltip">Siswa</span>
      </li>
      <li>
        <a href="<?php echo base_url('biodata/contact'); ?>">
          <i class='bx bx-chat'></i>
          <span class="links_name">Contact</span>
        </a>
        <span class="tooltip">Contact</span>
      </li>

      <li>
        <a href="<?php echo base_url('biodata/about'); ?>">
          <i class='bx bx-folder'></i>
          <span class="links_name">Tentang</span>
        </a>
        <span class="tooltip">Tentang</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cart-alt'></i>
          <span class="links_name">Order</span>
        </a>
        <span class="tooltip">Order</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-heart'></i>
          <span class="links_name">Saved</span>
        </a>
        <span class="tooltip">Saved</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
      <li class="profile">
        <div class="profile-details">
          <!--<img src="profile.jpg" alt="profileImg">-->
          <div class="name_job">
            <div class="name">M Rizky S</div>
            <div class="job">Web Developer</div>
          </div>
        </div>
        <i class='bx bx-log-out' id="log_out"></i>
      </li>
    </ul>
  </div>

</body>

</html>
</body>
</header>