<?php
    include('../../Backend/Anggota/showAnggota.php');
    $id_anggota = $_GET['id_anggota'];
    $sql = mysqli_query($conn,"SELECT * FROM anggota WHERE id_anggota=$id_anggota");
    while($data = mysqli_fetch_array($sql)){
      $nama_lengkap=$data['nama_lengkap'];
      $username=$data['username'];
      $email=$data['email'];
      $password=$data['password'];
      $id_telegram=$data['id_telegram'];
      $alamat=$data['alamat'];
      $foto=$data['foto'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="../../Asset/Dasboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../Asset/Dasboard/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->

  <link href="../../Asset/Dasboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../Asset/Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Asset/Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Asset/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Asset/Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../Asset/Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Asset/Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Asset/Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../Asset/Login/css/main.css">
<!--===============================================================================================-->

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Kyou Community</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

     
      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="../Login/index.php">Login</a>
            <a class="collapse-item" href="create.php">Register</a>
          </div>
        </div>
      </li>

 

      <!-- Nav Item - Tables -->
        <!-- Nav Item - Tables -->
        <li class="nav-item ">
        <a class="nav-link" href="../Admin/index.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Admin</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../Anggota/index.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Anggota</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../Divisi/index.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Divisi</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../Detail/index.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Detail Anggota</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- right column -->
          <div class="col-md-8 mx-auto">
            <!-- general form elements disabled -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Anggota</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="/KyouCommunity/Backend/Anggota/editAnggota.php?id_anggota=<?= $_GET['id_anggota'] ?>" method="post">
                  <div class="form-group">
                    <label class="form-label" for="">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama_lengkap" value="<?php echo $nama_lengkap;?>"required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Username</label>
                    <input class="form-control" type="text" name="username" value="<?php echo $username;?>" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Email</label>
                    <input class="form-control" type="email" name="email" value="<?php echo $email;?>" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Password</label>
                    <input class="form-control" type="password" name="password"  value="<?php echo $password;?>"required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Id telegram</label>
                    <input class="form-control" type="text" name="id_telegram"  value="<?php echo $id_telegram;?>"required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Alamat</label>
                    <textarea class="form-control" name="alamat" ><?php echo $alamat;?></textarea>
                  </div>
                  <!-- <div class="form-group">
                    <label class="form-label" for="">Foto</label>
                    <input class="form-control" type="text" name="foto"value="<?php echo $foto;?>"required>
                  </div> -->
                  <div class="form-group text-right">
                  <a class='btn btn-sm btn-warning mx-1' href="index.php">Cancel</a>
                    <input class="btn btn-success" type="submit" name="submit" value="Submit" />
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white mt-5">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../Asset/Dasboard/vendor/jquery/jquery.min.js"></script>
  <script src="../../Asset/Dasboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../Asset/Dasboard/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../Asset/Dasboard/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../Asset/Dasboard/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../Asset/Dasboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../Asset/Dasboard/js/demo/datatables-demo.js"></script>

  <!--===============================================================================================-->	
	<script src="../../Asset/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../Asset/Login/vendor/bootstrap/js/popper.js"></script>
	<script src="../../Asset/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../Asset/Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../Asset/Login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../../Asset/Login/js/main.js"></script>

</body>

</html>
