<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Tables</title>
    
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="application/views/dashboard/all.min.css" type="text/css"/>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="application/views/dashboard/sb-admin-2.min.css" rel="stylesheet"/>

    <!-- Custom styles for this page -->
    <link href="application/views/dashboard/dataTables.bootstrap4.min.css" rel="stylesheet"/>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.php">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="system/libraries/img/logo.png"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="system/libraries/img/logo.png"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="system/libraries/img/logo.png"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Muhamad Abdul Malik</span>
                                <img class="img-profile rounded-circle"
                                    src="system/libraries/img/profil.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>   
<style>                               
<body>{
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 200%;
            padding: 20px;
            box-sizing: border-box;
            margin: 0 auto;
        }
        table {
            width: 120%;
            border-collapse: collapse;
            margin-top: 30px;
        }
        table, th, td {
            border: 5px solid #ddd;
        }
        th, td {
            padding: 20px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    
    </style>
<div class="container">


 <div class="col-4">
    <div class="mb-1">
         <label for="nik" class="form-label">NIK</label>
         <input type="email" class="form-control" id="mNik" placeholder="input nik">
     </div>

     <div class="mb-1">
         <label for="nama" class="form-label">Nama</label>
         <input type="email" class="form-control" id="mNama" placeholder="input username">
     </div>

     <div class="mb-1">
         <label for="posisi" class="form-label">Posisi</label>
         <input type="email" class="form-control" id="mPosisi" placeholder="input posisi">
     </div>

     <div class="mb-1">
         <label for="alamat" class="form-label">Alamat</label>
         <input type="email" class="form-control" id="mAlamat" placeholder="input alamat">
     </div>

     <div class="mb-1">
         <label for="usia" class="form-label">Usia</label>
         <input type="email" class="form-control" id="mUsia" placeholder="input usia">
     </div>

     <div class="mb-1">
         <label for="Gajih" class="form-label">Gajih</label>
         <input type="email" class="form-control" id="mGajih" placeholder="input gajih">
     </div>

     <button type="button" id="btnSave" class="btn btn-primary">Save</button>
     <button type="button" id="btnUpdate" class="btn btn-primary">Update</button>
     <button type="button" id="btnDelete" class="btn btn-primary">Delete</button>
 </div> 

 <!-- Bootstrap core JavaScript-->
    

 <div class="row" style="margin-top: 110px;">
     <div class="col-6">
         <div class="card" style="background-color:#00ffee1a;">
             <div class="card-body">

                 <div class="table-responsive">
                     <table id="tbDataList" class="table border table-striped table-bordered text-nowrap table-hover">

                         <thead>
                             <tr>
                                 <th>NIK</th>
                                 <th>Nama</th>
                                 <th>Posisi</th>
                                 <th>Alamat</th>
                                 <th>Usia</th>
                                 <th>Gajih</th>
                             </tr>
                         </thead>
                         <tbody></tbody>
                         <tfoot></tfoot>
                     </table>
                 </div>

             </div>
         </div>
     </div>
 </div>
</div>
</body>
<script>
 window.onload = function() {


     loadData();
 };

 function loadData() {


     var base_url = window.location.origin;


     $.ajax({
         url: base_url + "/payrolAPI/api/Get_Karyawan",
         method: "GET",
         dataType: "JSON",
         data: {
             nik: ""
         },
         success: function(res) {
             console.log(res.data);



             var table = $('#tbDataList').DataTable({
                 destroy: true,
                 data: res.data,
                 scrollY: "450px",
                 scrollX: "450px",
                 order: [
                     [0, 'desc']
                 ],
                 columns: [
                     {
                         data: 'nik'
                     },
                     {
                         data: 'nama'
                    },
                     {
                         data: 'posisi'
                     },
                     {
                         data: 'alamat'
                     },
                     {
                         data: 'usia'
                     },
                     {
                         data: 'Gajih'
                     }
                 ]
             });


             //onclick table
             $('#tbDataList tbody').on('click', 'tr', function() {
                 var data = $('#tbDataList').DataTable().row(this).data();

                 // console.log(data);

                 var objRow = data;



                 // document.getElementById('id').value = objRow.id;
                 document.getElementById('mNik').value = objRow.nik;
                 document.getElementById('mNama').value = objRow.nama;
                 document.getElementById('mPosisi').value = objRow.posisi;
                 document.getElementById('mAlamat').value = objRow.alamat;
                 document.getElementById('mUsia').value = objRow.usia;
                 document.getElementById('mGajih').value = objRow.Gajih;


             });

         },
         fail: function(xhr, textStatus, errorThrown) {
             alert('request failed');
         }
     });

 }

 $('#btnSave').click(function() {


     var base_url = window.location.origin;

     var mNik = document.getElementById("mNik").value;
     var mNama = document.getElementById("mNama").value;
     var mPosisi = document.getElementById("mPosisi").value;
     var mAlamat = document.getElementById("mAlamat").value;
     var mUsia = document.getElementById("mUsia").value;
     var mGajih = document.getElementById("mGajih").value;

     //event.preventDefault();

     $.ajax({
         type: 'POST',
         url: base_url + "/payrolAPI/controllers/api/Insert_Karyawan",
         dataType: 'json',
         async: false,
         data: {
             nik: mNik,
             nama: mNama,
             posisi: mPosisi,
             alamat: mAlamat,
             usia: mUsia,
             Gajih: mGajih

         },
         success: function(res) {

             var obj = res;
             console.log(obj.status);


             loadData();



         },
         failure: function(errMsg) {
             alert(errMsg);
         }




     });


 });

 $('#btnUpdate').click(function() {


     var base_url = window.location.origin;
     var mNik = document.getElementById("mNik").value;
     var mNama = document.getElementById("mNama").value;
     var mPosisi = document.getElementById("mPosisi").value;
     var mAlamat = document.getElementById("mAlamat").value;
     var mUsia = document.getElementById("mUsia").value;
     var mGajih = document.getElementById("mGajih").value;



     event.preventDefault();


     $.ajax({
         type: 'PUT',
         url: base_url + "/payrolAPI/controllers/api/Update_Gajih",
         dataType: 'json',
         async: false,
         data: {
             nik: mNik,
             nama: mNama,
             posisi: mPosisi,
             alamat: mAlamat,
             usia: mUsia,
             Gajih: mGajih
         },
         success: function(res) {

             var obj = res;
             console.log(obj.status);

             if (obj.status == false) {



                 console.log(obj.message);
             } else {
                 console.log(obj.message);




                 loadData();

             }


         },
         failure: function(errMsg) {
             alert(errMsg);
         }




     });

 });


 $('#btnDelete').click(function() {


     var base_url = window.location.origin;

     var mNik = document.getElementById("mNik").value;

     //event.preventDefault();

     $.ajax({
         type: 'DELETE',
         url: base_url + "/payrolAPI/controllers/api/Delete_Gajih",
         dataType: 'json',
         async: false,
         data: {
             nik: mNik

         },
         success: function(res) {

             var obj = res;
             console.log(obj.status);


             loadData();



         },
         failure: function(errMsg) {
             alert(errMsg);
         }




     });


 });
</script>

<!-- Footer -->
<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Muhamad Abdul Malik</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    <link rel="stylesheet" href="system/libraries/vendor/jquery/jquery.min.js">
    <link rel="stylesheet" href="system/libraries/vendor/bootstrap/js/bootstrap.bundle.min.js">

    <!-- Core plugin JavaScript-->
    <link rel="stylesheet" href="system/libraries/vendor/jquery-easing/jquery.easing.min.js">

    <!-- Custom scripts for all pages-->
    <link rel="stylesheet" href="system/libraries/js/sb-admin-2.min.js">

    <!-- Page level plugins -->
    <link rel="stylesheet" href="system/libraries/vendor/datatables/jquery.dataTables.min.js">
    <link rel="stylesheet" href="system/libraries/vendor/datatables/dataTables.bootstrap4.min.js">

    <!-- Page level custom scripts -->
    <link rel="stylesheet" href="system/libraries/js/demo/datatables-demo.js">

</body>

</html> 