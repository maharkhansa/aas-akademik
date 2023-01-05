<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Sistem Informasi Akademik Sekolah</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/summernote/summernote-bs4.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/toastr/toastr.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/fullcalendar/main.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/fullcalendar-daygrid/main.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/fullcalendar-timegrid/main.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/fullcalendar-bootstrap/main.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/ekko-lightbox/ekko-lightbox.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="shrotcut icon" href="http://127.0.0.1:8000/img/favicon.ico">
    <style>
        .ctr {
            text-align: center !important;
        }
        
        thead > tr > th, tbody > tr > td{
            vertical-align: middle !important;
        }

        td> input.form-control{
            width: 60px !important;
            padding: 8px !important;
            box-shadow: none !important;
        }

        input[name=predikat]{
            align-items: center;
            width:60px !important;
            background:#fff !important;
            box-shadow: none !important;
        }

        input[disabled],input[disabled]:hover{
            cursor: default !important;
            border:none !important;
        }
        
        .textarea-rapot{
            font-size:11px !important;
            background: #fff !important;
            border:none !important;
            font-size: 11px !important;
            cursor: default !important;
        }

        @media (min-width: 768px) {
            .img-details {
                margin-left: 40px;
            }
            .btn-details {
                margin-top: 28px !important;
            }
            .btn-details-siswa {
                margin-top: 175px !important;
            }
        }
    </style>
</head>
<!-- sidebar-collapse -->
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-open">
<div class="wrapper">

    <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #0f4c81;">
<!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" style="color: #fff;" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <div class="btn-group" role="group">
                <a id="btnGroupDrop1" style="color: #fff; margin-right: 40px;" type="button" class="dropdown-toggle text-capitalize" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nav-icon fas fa-user-circle"></i> &nbsp; Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="http://127.0.0.1:8000/profile"><i class="nav-icon fas fa-user"></i> &nbsp; My Profile</a>
                    <a class="dropdown-item" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="nav-icon fas fa-sign-out-alt"></i> &nbsp; Log Out</a>
                    <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                        <input type="hidden" name="_token" value="Ezmq5Y3thzQc6rDcwsnwR2Pd0k9Tx9OjNK1rVdxF">                    </form>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://127.0.0.1:8000/logout"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </div>
                </div>
              </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link" style="">
        <img src="http://127.0.0.1:8000/img/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">SIAKAD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                    <li class="nav-item has-treeview" id="liDashboard">
                        <a href="#" class="nav-link" id="Dashboard">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000" class="nav-link" id="Home">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/admin/home" class="nav-link" id="AdminHome">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Dashboard Admin</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview" id="liMasterData">
                        <a href="#" class="nav-link" id="MasterData">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Master Data
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/jadwal" class="nav-link" id="DataJadwal">
                                    <i class="fas fa-calendar-alt nav-icon"></i>
                                    <p>Data Jadwal</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/guru" class="nav-link" id="DataGuru">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Data Guru</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/kelas" class="nav-link" id="DataKelas">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Data Kelas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/siswa" class="nav-link" id="DataSiswa">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Data Siswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/mapel" class="nav-link" id="DataMapel">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>Data Mapel</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/user" class="nav-link" id="DataUser">
                                    <i class="fas fa-user-plus nav-icon"></i>
                                    <p>Data User</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                                            <li class="nav-item has-treeview" id="liViewTrash">
                            <a href="#" class="nav-link" id="ViewTrash">
                                <i class="nav-icon fas fa-recycle"></i>
                                <p>
                                    View Trash
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview ml-4">
                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/jadwal/trash" class="nav-link" id="TrashJadwal">
                                        <i class="fas fa-calendar-alt nav-icon"></i>
                                        <p>Trash Jadwal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/guru/trash" class="nav-link" id="TrashGuru">
                                        <i class="fas fa-users nav-icon"></i>
                                        <p>Trash Guru</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/kelas/trash" class="nav-link" id="TrashKelas">
                                        <i class="fas fa-home nav-icon"></i>
                                        <p>Trash Kelas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/siswa/trash" class="nav-link" id="TrashSiswa">
                                        <i class="fas fa-users nav-icon"></i>
                                        <p>Trash Siswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/mapel/trash" class="nav-link" id="TrashMapel">
                                        <i class="fas fa-book nav-icon"></i>
                                        <p>Trash Mapel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/user/trash" class="nav-link" id="TrashUser">
                                        <i class="fas fa-user nav-icon"></i>
                                        <p>Trash User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                                        <li class="nav-item">
                        <a href="http://127.0.0.1:8000/guru/absensi" class="nav-link" id="AbsensiGuru">
                            <i class="fas fa-calendar-check nav-icon"></i>
                            <p>Absensi Guru</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview" id="liNilai">
                        <a href="#" class="nav-link" id="Nilai">
                            <i class="nav-icon fas fa-file-signature"></i>
                            <p>
                                Nilai
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/ulangan-kelas" class="nav-link" id="Ulangan">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Nilai Ulangan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/sikap-kelas" class="nav-link" id="Sikap">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Nilai Sikap</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/rapot-kelas" class="nav-link" id="Rapot">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Nilai Rapot</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/predikat" class="nav-link" id="Deskripsi">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Deskripsi Predikat</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/admin/pengumuman" class="nav-link" id="Pengumuman">
                            <i class="nav-icon fas fa-clipboard"></i>
                            <p>Pengumuman</p>
                        </a>
                    </li>
                            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Kelas</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="http://127.0.0.1:8000"><i class="nav-icon fas fa-home"></i> &nbsp; Home</a></li>
                  <li class="breadcrumb-item active">Data Kelas</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">
              <button type="button" class="btn btn-primary btn-sm" onclick="getCreateKelas()" data-toggle="modal" data-target="#form-kelas">
                  <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Kelas
              </button>
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kelas</th>
                    <th>Wali Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->

<!-- Extra large modal -->
<div class="modal fade bd-example-modal-md" id="form-kelas" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title" id="judul"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="http://127.0.0.1:8000/kelas" method="post">
          <input type="hidden" name="_token" value="Ezmq5Y3thzQc6rDcwsnwR2Pd0k9Tx9OjNK1rVdxF">          <div class="row">
            <div class="col-md-12">
              <input type="hidden" id="id" name="id">
              <div class="form-group" id="form_nama"></div>
              <div class="form-group" id="form_paket"></div>
              <div class="form-group">
                <label for="guru_id">Wali Kelas</label>
                <select id="guru_id" name="guru_id" class="select2bs4 form-control ">
                  <option value="">-- Pilih Wali Kelas --</option>
                                      <option value="1">Nugraha Dimas</option>
                                  </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
            <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Tambahkan</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Extra large modal -->
<div class="modal fade bd-example-modal-lg view-siswa" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="judul-siswa">View Siswa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <table class="table table-bordered table-striped table-hover" width="100%">
                <thead>
                  <tr>
                    <th>No Induk Siswa</th>
                    <th>Nama Siswa</th>
                    <th>L/P</th>
                    <th>Foto Siswa</th>
                  </tr>
                </thead>
                <tbody id="data-siswa">
                </tbody>
                <tfoot>
                  <tr>
                    <th>No Induk Siswa</th>
                    <th>Nama Siswa</th>
                    <th>L/P</th>
                    <th>Foto Siswa</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.col -->
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="nav-icon fas fa-arrow-left"></i> &nbsp; Kembali</button>
          <a id="link-siswa" href="#" class="btn btn-primary"><i class="nav-icon fas fa-download"></i> &nbsp; Download PDF</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Extra large modal -->
<div class="modal fade bd-example-modal-xl view-jadwal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="judul-jadwal">View Jadwal</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <div class="card-body">
            <table class="table table-bordered table-striped table-hover" width="100%">
              <thead>
                <tr>
                  <th>Hari</th>
                  <th>Jadwal</th>
                  <th>Jam Pelajaran</th>
                  <th>Ruang Kelas</th>
                </tr>
              </thead>
              <tbody id="data-jadwal">
              </tbody>
              <tfoot>
                <tr>
                  <th>Hari</th>
                  <th>Jadwal</th>
                  <th>Jam Pelajaran</th>
                  <th>Ruang Kelas</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="nav-icon fas fa-arrow-left"></i> &nbsp; Kembali</button>
        <a id="link-jadwal" href="#" class="btn btn-primary"><i class="nav-icon fas fa-download"></i> &nbsp; Download PDF</a>
      </div>
    </div>
  </div>
</div>
                </div> <!-- end of class row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <marquee>
            <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script> &diams; <a href="http://smkn1jenpo.sch.id/">SMK Negeri 1 Jenangan Ponorogo</a>. </strong> | Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a>
            
        </marquee>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="http://127.0.0.1:8000/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://127.0.0.1:8000/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://127.0.0.1:8000/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="http://127.0.0.1:8000/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="http://127.0.0.1:8000/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->


<!-- jQuery Knob Chart -->
<script src="http://127.0.0.1:8000/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://127.0.0.1:8000/plugins/moment/moment.min.js"></script>
<script src="http://127.0.0.1:8000/plugins/daterangepicker/daterangepicker.js"></script>
<!-- AdminLTE App -->
<script src="http://127.0.0.1:8000/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://127.0.0.1:8000/dist/js/demo.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="http://127.0.0.1:8000/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="http://127.0.0.1:8000/plugins/summernote/summernote-bs4.min.js"></script>
<!-- SweetAlert2 -->
<script src="http://127.0.0.1:8000/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="http://127.0.0.1:8000/plugins/toastr/toastr.min.js"></script>
<!-- overlayScrollbars -->
<script src="http://127.0.0.1:8000/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Select2 -->
<script src="http://127.0.0.1:8000/plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="http://127.0.0.1:8000/plugins/moment/moment.min.js"></script>
<script src="http://127.0.0.1:8000/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="http://127.0.0.1:8000/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- date-range-picker -->
<script src="http://127.0.0.1:8000/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="http://127.0.0.1:8000/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="http://127.0.0.1:8000/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="http://127.0.0.1:8000/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://127.0.0.1:8000/dist/js/pages/dashboard.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="http://127.0.0.1:8000/plugins/moment/moment.min.js"></script>
<script src="http://127.0.0.1:8000/plugins/fullcalendar/main.min.js"></script>
<script src="http://127.0.0.1:8000/plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="http://127.0.0.1:8000/plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="http://127.0.0.1:8000/plugins/fullcalendar-interaction/main.min.js"></script>
<script src="http://127.0.0.1:8000/plugins/fullcalendar-bootstrap/main.min.js"></script>
<!-- Ekko Lightbox -->
<script src="http://127.0.0.1:8000/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- DataTables -->
<script src="http://127.0.0.1:8000/plugins/datatables/jquery.dataTables.js"></script>
<script src="http://127.0.0.1:8000/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- bs-custom-file-input -->
<script src="http://127.0.0.1:8000/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- page script -->
<script>
    function inputAngka(e) {
        var charCode = (e.which) ? e.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)){
            return false;
        }
        return true;
    }

    function sikap(e) {
        var charCode = (e.which) ? e.which : event.keyCode
        if (charCode > 31 && (charCode < 49 || charCode > 52)){
            return false;
        }
        return true;
    }
    
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true
        });
    });

    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": true,
        });
    });
    
    $(document).ready(function () {
        bsCustomFileInput.init();
    });

    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A'
        }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
        {
            ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
        },
        function (start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
        format: 'LT'
        })
        
        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });
    });

    const Toast = Swal.mixin({
        toast: true,
        position: 'bottomRight',
        showConfirmButton: false,
        timer: 3000
    });
    
    $(function () {
        $('.textarea').summernote()
    })
</script>

  <script>
    function getCreateKelas(){
      $("#judul").text('Tambah Data Kelas');
      $('#id').val('');
      $('#form_nama').html(`
        <label for="nama_kelas">Nama Kelas</label>
        <input type='text' id="nama_kelas" onkeyup="this.value = this.value.toUpperCase()" name='nama_kelas' class="form-control " placeholder="Nama Kelas">
      `);
      $('#nama_kelas').val('');
      $('#form_paket').html('');
      $('#form_paket').html(`
        <label for="paket_id">Paket Keahlian</label>
        <select id="paket_id" name="paket_id" class="select2bs4 form-control ">
          <option value="">-- Pilih Paket Keahlian --</option>
                      <option value="1">Bisnis kontruksi dan Properti</option>
                      <option value="2">Desain Permodelan dan Informasi Bangunan</option>
                      <option value="3">Elektronika Industri</option>
                      <option value="4">Otomasi Industri</option>
                      <option value="5">Teknik Pemesinan</option>
                      <option value="6">Teknik dan Bisnis Sepeda Motor</option>
                      <option value="7">Rekayasa Perangkat Lunak</option>
                      <option value="8">Teknik Pengelasan</option>
                  </select>
      `);
      $('#guru_id').val('');
    }

    function getEditKelas(id){
      var parent = id;
      var form_paket = (`
        <input type="hidden" id="paket_id" name="paket_id">
        <input type="hidden" id="nama_kelas" name="nama_kelas">
      `);
      $.ajax({
        type:"GET",
        data:"id="+parent,
        dataType:"JSON",
        url:"http://127.0.0.1:8000/kelas/edit/json",
        success:function(result){
            // console.log(result);
          if(result){
            $.each(result,function(index, val){
              $("#judul").text('Edit Data Kelas ' + val.nama);
              $('#id').val(val.id);
              $('#form_nama').html('');
              $('#form_paket').html('');
              $("#form_paket").append(form_paket);
              $('#nama_kelas').val(val.nama);
              $("#paket_id").val(val.paket_id);
              $('#guru_id').val(val.guru_id);
            });
          }
        },
        error:function(){
          toastr.error("Errors 404!");
        },
        complete:function(){
        }
      });
    }

    function getSubsSiswa(id){
      var parent = id;
      $.ajax({
        type:"GET",
        data:"id="+parent,
        dataType:"JSON",
        url:"http://127.0.0.1:8000/siswa/view/json",
        success:function(result){
          // console.log(result);
          var siswa = "";
          if(result){
            $.each(result,function(index, val){
              $("#judul-siswa").text('View Data Siswa ' + val.kelas);
              siswa += "<tr>";
                siswa += "<td>"+val.no_induk+"</td>";
                siswa += "<td>"+val.nama_siswa+"</td>";
                siswa += "<td>"+val.jk+"</td>";
                siswa += "<td><img src='"+val.foto+"' width='100px'></td>";
              siswa+="</tr>";
            });
            $("#data-siswa").html(siswa);
          }
        },
        error:function(){
          toastr.error("Errors 404!");
        },
        complete:function(){
        }
      });
      $("#link-siswa").attr("href", "https://siakad.didev.id/listsiswapdf/"+id);
    }
    
    function getSubsJadwal(id){
      var parent = id;
      $.ajax({
        type:"GET",
        data:"id="+parent,
        dataType:"JSON",
        url:"http://127.0.0.1:8000/jadwal/view/json",
        success:function(result){
          // console.log(result);
          var jadwal = "";
          if(result){
            $.each(result,function(index, val){
              $("#judul-jadwal").text('View Data Jadwal ' + val.kelas);
              jadwal += "<tr>";
                jadwal += "<td>"+val.hari+"</td>";
                jadwal += "<td><h5 class='card-title'>"+val.mapel+"</h5><p class='card-text'><small class='text-muted'>"+val.guru+"</small></p></td>";
                jadwal += "<td>"+val.jam_mulai+" - "+val.jam_selesai+"</td>";
                jadwal += "<td>"+val.ruang+"</td>";
              jadwal+="</tr>";
            });
            $("#data-jadwal").html(jadwal);
          }
        },
        error:function(){
          toastr.error("Errors 404!");
        },
        complete:function(){
        }
      });
      $("#link-jadwal").attr("href", "https://siakad.didev.id/jadwalkelaspdf/"+id);
    }

    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataKelas").addClass("active");
  </script>


</body>
</html>
guru

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Sistem Informasi Akademik Sekolah</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/summernote/summernote-bs4.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/toastr/toastr.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/fullcalendar/main.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/fullcalendar-daygrid/main.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/fullcalendar-timegrid/main.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/fullcalendar-bootstrap/main.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/ekko-lightbox/ekko-lightbox.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="shrotcut icon" href="http://127.0.0.1:8000/img/favicon.ico">
    <style>
        .ctr {
            text-align: center !important;
        }
        
        thead > tr > th, tbody > tr > td{
            vertical-align: middle !important;
        }

        td> input.form-control{
            width: 60px !important;
            padding: 8px !important;
            box-shadow: none !important;
        }

        input[name=predikat]{
            align-items: center;
            width:60px !important;
            background:#fff !important;
            box-shadow: none !important;
        }

        input[disabled],input[disabled]:hover{
            cursor: default !important;
            border:none !important;
        }
        
        .textarea-rapot{
            font-size:11px !important;
            background: #fff !important;
            border:none !important;
            font-size: 11px !important;
            cursor: default !important;
        }

        @media (min-width: 768px) {
            .img-details {
                margin-left: 40px;
            }
            .btn-details {
                margin-top: 28px !important;
            }
            .btn-details-siswa {
                margin-top: 175px !important;
            }
        }
    </style>
</head>
<!-- sidebar-collapse -->
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-open">
<div class="wrapper">

    <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #0f4c81;">
<!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" style="color: #fff;" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <div class="btn-group" role="group">
                <a id="btnGroupDrop1" style="color: #fff; margin-right: 40px;" type="button" class="dropdown-toggle text-capitalize" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nav-icon fas fa-user-circle"></i> &nbsp; Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="http://127.0.0.1:8000/profile"><i class="nav-icon fas fa-user"></i> &nbsp; My Profile</a>
                    <a class="dropdown-item" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="nav-icon fas fa-sign-out-alt"></i> &nbsp; Log Out</a>
                    <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                        <input type="hidden" name="_token" value="Ezmq5Y3thzQc6rDcwsnwR2Pd0k9Tx9OjNK1rVdxF">                    </form>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://127.0.0.1:8000/logout"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </div>
                </div>
              </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link" style="">
        <img src="http://127.0.0.1:8000/img/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">SIAKAD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                    <li class="nav-item has-treeview" id="liDashboard">
                        <a href="#" class="nav-link" id="Dashboard">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000" class="nav-link" id="Home">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/admin/home" class="nav-link" id="AdminHome">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Dashboard Admin</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview" id="liMasterData">
                        <a href="#" class="nav-link" id="MasterData">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Master Data
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/jadwal" class="nav-link" id="DataJadwal">
                                    <i class="fas fa-calendar-alt nav-icon"></i>
                                    <p>Data Jadwal</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/guru" class="nav-link" id="DataGuru">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Data Guru</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/kelas" class="nav-link" id="DataKelas">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Data Kelas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/siswa" class="nav-link" id="DataSiswa">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Data Siswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/mapel" class="nav-link" id="DataMapel">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>Data Mapel</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/user" class="nav-link" id="DataUser">
                                    <i class="fas fa-user-plus nav-icon"></i>
                                    <p>Data User</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                                            <li class="nav-item has-treeview" id="liViewTrash">
                            <a href="#" class="nav-link" id="ViewTrash">
                                <i class="nav-icon fas fa-recycle"></i>
                                <p>
                                    View Trash
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview ml-4">
                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/jadwal/trash" class="nav-link" id="TrashJadwal">
                                        <i class="fas fa-calendar-alt nav-icon"></i>
                                        <p>Trash Jadwal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/guru/trash" class="nav-link" id="TrashGuru">
                                        <i class="fas fa-users nav-icon"></i>
                                        <p>Trash Guru</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/kelas/trash" class="nav-link" id="TrashKelas">
                                        <i class="fas fa-home nav-icon"></i>
                                        <p>Trash Kelas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/siswa/trash" class="nav-link" id="TrashSiswa">
                                        <i class="fas fa-users nav-icon"></i>
                                        <p>Trash Siswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/mapel/trash" class="nav-link" id="TrashMapel">
                                        <i class="fas fa-book nav-icon"></i>
                                        <p>Trash Mapel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://127.0.0.1:8000/user/trash" class="nav-link" id="TrashUser">
                                        <i class="fas fa-user nav-icon"></i>
                                        <p>Trash User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                                        <li class="nav-item">
                        <a href="http://127.0.0.1:8000/guru/absensi" class="nav-link" id="AbsensiGuru">
                            <i class="fas fa-calendar-check nav-icon"></i>
                            <p>Absensi Guru</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview" id="liNilai">
                        <a href="#" class="nav-link" id="Nilai">
                            <i class="nav-icon fas fa-file-signature"></i>
                            <p>
                                Nilai
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/ulangan-kelas" class="nav-link" id="Ulangan">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Nilai Ulangan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/sikap-kelas" class="nav-link" id="Sikap">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Nilai Sikap</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/rapot-kelas" class="nav-link" id="Rapot">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Nilai Rapot</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://127.0.0.1:8000/predikat" class="nav-link" id="Deskripsi">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Deskripsi Predikat</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/admin/pengumuman" class="nav-link" id="Pengumuman">
                            <i class="nav-icon fas fa-clipboard"></i>
                            <p>Pengumuman</p>
                        </a>
                    </li>
                            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Guru</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="http://127.0.0.1:8000"><i class="nav-icon fas fa-home"></i> &nbsp; Home</a></li>
                  <li class="breadcrumb-item active">Data Guru</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Guru
                </button>
                <a href="http://127.0.0.1:8000/guru/export_excel" class="btn btn-success btn-sm my-3" target="_blank"><i class="nav-icon fas fa-file-export"></i> &nbsp; EXPORT EXCEL</a>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#importExcel">
                    <i class="nav-icon fas fa-file-import"></i> &nbsp; IMPORT EXCEL
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#dropTable">
                    <i class="nav-icon fas fa-minus-circle"></i> &nbsp; Drop
                </button>
            </h3>
        </div>
        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="http://127.0.0.1:8000/guru/import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
							<input type="hidden" name="_token" value="Ezmq5Y3thzQc6rDcwsnwR2Pd0k9Tx9OjNK1rVdxF">                            <div class="card card-outline card-primary">
                                <div class="card-header">
                                    <h5 class="modal-title">Petunjuk :</h5>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>rows 1 = nama guru</li>
                                        <li>rows 2 = nip guru</li>
                                        <li>rows 3 = jenis kelamin</li>
                                        <li>rows 4 = mata pelajaran</li>
                                    </ul>
                                </div>
                            </div>
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>
        <div class="modal fade" id="dropTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="http://127.0.0.1:8000/guru/deleteAll">
                    <input type="hidden" name="_token" value="Ezmq5Y3thzQc6rDcwsnwR2Pd0k9Tx9OjNK1rVdxF">                    <input type="hidden" name="_method" value="delete">					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Sure you drop all data?</h5>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cencel</button>
							<button type="submit" class="btn btn-danger">Drop</button>
						</div>
					</div>
				</form>
			</div>
		</div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Mapel</th>
                    <th>Lihat Guru</th>
                </tr>
            </thead>
            <tbody>
                                    <tr>
                        <td>1</td>
                        <td>mtk</td>
                        <td>
                            <a href="http://127.0.0.1:8000/guru/mapel/eyJpdiI6ImtLSTBwVVBSK2lxbnhzYlY2S0ZvS2c9PSIsInZhbHVlIjoiNnpOaVcycmREUktzUjdUbTl3RkF0QT09IiwibWFjIjoiYzllZjVjMzI3ZjYxODk1ZDExMDljNTZhNjI0NGMwNzI2MTFhY2E4Y2Y5Y2UxZTgzZmY0ZmRkMDQxZmIwMGU2ZiJ9" class="btn btn-info btn-sm"><i class="nav-icon fas fa-search-plus"></i> &nbsp; Ditails</a>
                        </td>
                    </tr>
                            </tbody>
          </table>
        </div>
    </div>
</div>

<!-- Extra large modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Tambah Data Guru</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          <form action="http://127.0.0.1:8000/guru" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="Ezmq5Y3thzQc6rDcwsnwR2Pd0k9Tx9OjNK1rVdxF">            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_guru">Nama Guru</label>
                        <input type="text" id="nama_guru" name="nama_guru" class="form-control ">
                    </div>
                    <div class="form-group">
                        <label for="tmp_lahir">Tempat Lahir</label>
                        <input type="text" id="tmp_lahir" name="tmp_lahir" class="form-control ">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control ">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select id="jk" name="jk" class="select2bs4 form-control ">
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telp">Nomor Telpon/HP</label>
                        <input type="text" id="telp" name="telp" onkeypress="return inputAngka(event)" class="form-control ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" id="nip" name="nip" onkeypress="return inputAngka(event)" class="form-control ">
                    </div>
                    <div class="form-group">
                        <label for="mapel_id">Mapel</label>
                        <select id="mapel_id" name="mapel_id" class="select2bs4 form-control ">
                            <option value="">-- Pilih Mapel --</option>
                                                            <option value="1">mtk</option>
                                                    </select>
                    </div>
                                        <div class="form-group">
                        <label for="id_card">Nomor ID Card</label>
                        <input type="text" id="id_card" name="id_card" maxlength="5" onkeypress="return inputAngka(event)" value="00002" class="form-control " readonly>
                    </div>
                    <div class="form-group">
                        <label for="kode">Kode Jadwal</label>
                        <input type="text" id="kode" name="kode" maxlength="3" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                    </div>
                    <div class="form-group">
                        <label for="foto">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input " id="foto">
                                <label class="custom-file-label" for="foto">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
              <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Tambahkan</button>
          </form>
      </div>
      </div>
    </div>
  </div>
                </div> <!-- end of class row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <marquee>
            <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script> &diams; <a href="http://smkn1jenpo.sch.id/">SMK Negeri 1 Jenangan Ponorogo</a>. </strong> | Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a>
            
        </marquee>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="http://127.0.0.1:8000/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://127.0.0.1:8000/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://127.0.0.1:8000/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="http://127.0.0.1:8000/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="http://127.0.0.1:8000/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->


<!-- jQuery Knob Chart -->
<script src="http://127.0.0.1:8000/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://127.0.0.1:8000/plugins/moment/moment.min.js"></script>
<script src="http://127.0.0.1:8