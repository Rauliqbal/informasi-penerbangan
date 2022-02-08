 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">

   <!-- Left navbar links -->
   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     </li>
   </ul>
   <!-- <ul class="navbar-nav ml-auto mr-2">
      <li class="nav-item">
        <a class="nav-link nav-li" href="<?= BASEURL . '/Login/SignOut'; ?>"><i class="fas fa-power-off"></i></a>
      </li>
    </ul> -->
   <div class="ml-auto mr-4">
     <!-- <?php if (isset($_SESSION['admin'])) { ?>
       <span class="mr-3">
         Hai,
         <?= $_SESSION['admin']; ?>
       </span>
     <?php } ?> -->
     <span class="mr-3">Hai, <b>Vriska</b></span>
     <a href="<?= BASEURL . '/Login/SignOut'; ?>">
       <button class="btn btn-danger" title="Log Out">
         <i class="fas fa-power-off"></i>
       </button>
     </a>
   </div>
 </nav>
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-secondary elevation-4">
   <a href="<?= BASEURL; ?>/Home" class="brand-link ml-3">
     <i class="fas fa-plane mr-2" style="opacity: 0.8"></i>
     <span class="brand-text font-weight-light">Flight Status</span>
   </a>
   <!-- <a href="index3.html" class="brand-link">
      <img src="<?= PUBLICC; ?>/img/sci/SCI_logo.png" alt="AdminLTE Logo" class="elevation-3 bg-white ml-1 mr-2" style="width: 55px; margin-top: -8px;">
      <span class="brand-text font-weight-normal">Citra Group</span>
    </a> -->
   <!-- Sidebar -->
   <div class="sidebar">



     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


         <!-- <li class="nav-item">
                <a href="<?= BASEURL; ?>/Dashboard" class="nav-link">
                    <i class="fas fa-tachometer-alt nav-icon"></i>
                    <p>Dashboard</p>
                </a>
            </li> -->

         <!-- CITRA INTERIOR -->
         <li class="nav-item">
           <a href="<?= BASEURL; ?>/Home" class="nav-link">
             <i class="fas fa-home nav-icon"></i>
             <p>Home</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= BASEURL; ?>/FlightData" class="nav-link">
             <i class="fas fa-plane-departure nav-icon"></i>
             <p>Flight Data</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= BASEURL; ?>/PaxData" class="nav-link">
             <i class="fas fa-users nav-icon"></i>
             <p>Pax Data</p>
           </a>
         </li>

         <!-- <li class="nav-item">
                <a href="<?= BASEURL; ?>/Surat/new" class="nav-link">
                    <i class="fas fa-plus-circle nav-icon"></i>
                    <p>Tambah Surat</p>
                </a>
            </li> -->
         <!-- <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="fas fa-file-alt nav-icon"></i>
                    <p>Laporan</p>
                </a>
            </li> -->

       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">

     <div class="container-fluid">
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->



   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <?php Flasher::flash(); ?>