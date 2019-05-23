<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sistem Informasi Perpustakaan Kominfo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/logo_scpas.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/notika-custom-icon.css">
    <!-- bootstrap select CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-select/bootstrap-select.css">
    <!-- Data Table JS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/wave/waves.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/wave/button.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
    <!-- Css bikin sendiri
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/mycss.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <span style="font-size: 23px;color: white;">Sistem Informasi Perpustakaan Kominfo</span>                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">              
                           <li class="nav-item dropdown">
                                </i></span></a>
                                <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Pesan Belum Dibaca</h2>
                                    </div>
                                    <div class="hd-message-info" id="tampil_RT_pesan">
                                    <!-- isi notif ada di js paling bawah-->
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item logout"><a href="#" data-toggle="modal" data-target="#myModaltwo"><span><i class="fa fa-sign-out"></i></span><div id="tampil_jml_notif"></div></a>   
                            </li>                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModaltwo" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h2>Keluar Aplikasi</h2>
                    <p>Apakah anda yakin ingin keluar dari aplikasi SMS Center Pengadilan Agama Serang?</p>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo site_url() ?>logout" class="btn btn-default">Keluar</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">bER</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard One</a></li>
                                        <li><a href="index-2.html">Dashboard Two</a></li>
                                        <li><a href="index-3.html">Dashboard Three</a></li>
                                        <li><a href="index-4.html">Dashboard Four</a></li>
                                        <li><a href="analytics.html">Analytics</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="inbox.html">Inbox</a></li>
                                        <li><a href="view-email.html">View Email</a></li>
                                        <li><a href="compose-email.html">Compose Email</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="animations.html">Animations</a></li>
                                        <li><a href="google-map.html">Google Map</a></li>
                                        <li><a href="data-map.html">Data Maps</a></li>
                                        <li><a href="code-editor.html">Code Editor</a></li>
                                        <li><a href="image-cropper.html">Images Cropper</a></li>
                                        <li><a href="wizard.html">Wizard</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="flot-charts.html">Flot Charts</a></li>
                                        <li><a href="bar-charts.html">Bar Charts</a></li>
                                        <li><a href="line-charts.html">Line Charts</a></li>
                                        <li><a href="area-charts.html">Area Charts</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="normal-table.html">Normal Table</a></li>
                                        <li><a href="data-table.html">Data Table</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="form-elements.html">Form Elements</a></li>
                                        <li><a href="form-components.html">Form Components</a></li>
                                        <li><a href="form-examples.html">Form Examples</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="notification.html">Notifications</a>
                                        </li>
                                        <li><a href="alert.html">Alerts</a>
                                        </li>
                                        <li><a href="modals.html">Modals</a>
                                        </li>
                                        <li><a href="buttons.html">Buttons</a>
                                        </li>
                                        <li><a href="tabs.html">Tabs</a>
                                        </li>
                                        <li><a href="accordion.html">Accordion</a>
                                        </li>
                                        <li><a href="dialog.html">Dialogs</a>
                                        </li>
                                        <li><a href="popovers.html">Popovers</a>
                                        </li>
                                        <li><a href="tooltips.html">Tooltips</a>
                                        </li>
                                        <li><a href="dropdown.html">Dropdowns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="contact.html">Contact</a>
                                        </li>
                                        <li><a href="invoice.html">Invoice</a>
                                        </li>
                                        <li><a href="typography.html">Typography</a>
                                        </li>
                                        <li><a href="color.html">Color</a>
                                        </li>
                                        <li><a href="login-register.html">Login Register</a>
                                        </li>
                                        <li><a href="404.html">404 Page</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="<?php echo $active1; ?>"><a href="<?php echo site_url() ?>beranda"><i class="fa fa-home"></i> Beranda</a>
                        </li>
                        <li class="<?php echo $active2; ?>"><a href="<?php echo site_url() ?>anggota"><i class="fa fa-users"></i> Anggota</a>
                        </li> 
                        <li class="<?php echo $active3; ?>"><a href="<?php echo site_url() ?>pustakawan"><i class="fa fa-users"></i> Pustakawan</a>
                        </li>
                        <li class="<?php echo $active4; ?>"><a href="<?php echo site_url() ?>buku"><i class="fa fa-book"></i> Buku</a>
                        </li>
                        <li class="<?php echo $active5; ?>"><a href="<?php echo site_url() ?>transaksi"><i class="fa fa-retweet"></i> Transaksi</a>
                        </li>
                        <?php
                        if ($this->session->userdata('level')=="Administrator") {
                        ?>
                        <li class="<?php echo $active6; ?>"><a href="<?php echo site_url() ?>pengguna"><i class="fa fa-user"></i> Pengguna</a>
                        </li>                        
                        <?php } ?>
                    </ul>
                    <div class="modal fade" id="modaldetailanggota" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>edit">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 style="font-size: 20px;">Detail Anggota</h2>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Nama Lengkap</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_nama">
                                                                        <!--nama ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                                                            <div class="form-example-int">
                                                                <button type="button" class="btn btn-success notika-btn-success waves-effect" id="btnedit_anggota" onclick="editdataanggota()">Edit</button>
                                                            </div>
                                                        </div>     
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Jenis Kelamin</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_jk">
                                                                        <!--nomor ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental mg-t-15">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Alamat</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="nk-int-st" id="tampil_alamat">
                                                                <!--catatan ada di js dipaling bawah-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button id="btnsimpan_anggota" type="submit" name="edit_anggota" class="btn btn-default" disabled>Simpan</button>   
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>
                    <div class="modal fade" id="modaldetailpustakawan" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>edit">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 style="font-size: 20px;">Detail Pustakawan</h2>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Nama Lengkap</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_nama_pustakawan">
                                                                        <!--nama ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                                                            <div class="form-example-int">
                                                                <button type="button" class="btn btn-success notika-btn-success waves-effect" id="btnedit_pustakawan" onclick="editdatapustakawan()">Edit</button>
                                                            </div>
                                                        </div>     
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Jenis Kelamin</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_jk_pustakawan">
                                                                        <!--nomor ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental mg-t-15">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Alamat</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="nk-int-st" id="tampil_alamat_pustakawan">
                                                                <!--catatan ada di js dipaling bawah-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button id="btnsimpan_pustakawan" type="submit" name="edit_pustakawan" class="btn btn-default" disabled>Simpan</button>   
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>
                    <div class="modal fade" id="modaldetailbuku" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>edit">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 style="font-size: 20px;">Detail Buku</h2>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Judul</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_judul_buku">
                                                                        <!--isinya ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                                                            <div class="form-example-int">
                                                                <button type="button" class="btn btn-success notika-btn-success waves-effect" id="btnedit_buku" onclick="editdatabuku()">Edit</button>
                                                            </div>
                                                        </div>     
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Jenis</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_jenis_buku">
                                                                        <!--isinya ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Penerbit</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_penerbit_buku">
                                                                        <!--isinya ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Tahun Terbit</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_tahunterbit_buku">
                                                                        <!--isinya ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Jumlah</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_jumlah_buku">
                                                                        <!--isinya ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button id="btnsimpan_buku" type="submit" name="edit_buku" class="btn btn-default" disabled>Simpan</button>   
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>
                    <div class="modal fade" id="modaldetailtransaksi" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>edit">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 style="font-size: 20px;">Detail Transaksi</h2>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Anggota</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_anggota">
                                                                        <!--isinya ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                                                            <div class="form-example-int">
                                                                <button type="button" class="btn btn-success notika-btn-success waves-effect" id="btnedit_transaksi" onclick="editdatatransaksi()">Edit</button>
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Pustakawan</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_pustakawan">
                                                                        <!--isinya ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Judul Buku</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_buku">
                                                                        <!--isinya ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Tanggal Pinjam</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_tglpinjam">
                                                                        <!--isinya ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Tanggal Kembali</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_tglkembali">
                                                                        <!--isinya ada di js dipaling bawah-->
                                                                        
                                                                    </div>
                                                                    <div id="input_date" style="display: none;">
                                                                        <!--namenya ada di js dipaling bawah-->
                                                                    <input id="tgl_date" name="tgl_kembali" type="date" class="form-control input-sm" required oninvalid="this.setCustomValidity('Input tanggal kembali!')" oninput="setCustomValidity('')">
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Status Kembali</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_statuskembali">
                                                                        <!--isinya ada di js dipaling bawah-->
                                                                        
                                                                    </div>
                                                                    <div id="input_status" style="display: none;">
                                                                        <!--namenya ada di js dipaling bawah-->
                                                                    <select class="form-control selectpicker" id="select-country" data-live-search="true" name="status_kembali" required>
                                                                        <option value="belum">belum</option>
                                                                        <option value="sudah">sudah</option>
                                                                    </select>
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button id="btnsimpan_transaksi" type="submit" name="edit_transaksi" class="btn btn-default" disabled>Simpan</button>   
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>
                    <div class="modal fade" id="modaldetailpengguna" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>edit">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 style="font-size: 20px;">Detail Pengguna</h2>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Username</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_username">
                                                                        <!--nama ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                                                            <div class="form-example-int">
                                                                <button type="button" class="btn btn-success notika-btn-success waves-effect" id="btnedit_pengguna" onclick="editdatapengguna()">Edit</button>
                                                            </div>
                                                        </div>     
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Password</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="tampil_password">
                                                                        <!--nomor ada di js dipaling bawah-->
                                                                        
                                                                    </div>                                
                                                                </div>
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental mg-t-15">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Level</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="nk-int-st" id="tampil_level">
                                                                <!--catatan ada di js dipaling bawah-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button id="btnsimpan_pengguna" type="submit" name="edit_pengguna" class="btn btn-default" disabled>Simpan</button>   
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>
                    <div class="modal fade" id="modalhapusanggota" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>hapus">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Hapus Anggota</h2>
                                                <p>Apakah anda yakin ingin menghapus anggota ini?</p>
                                                <div id="tampil_hapus_anggota"></div>
                                            </div>
                                            <div class="modal-footer">                      
                                                <button type="submit" name="hapus_anggota" class="btn btn-default">Hapus</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>
                    <div class="modal fade" id="modalhapuspustakawan" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>hapus">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Hapus Pustakawan</h2>
                                                <p>Apakah anda yakin ingin menghapus pustakawan ini?</p>
                                                <div id="tampil_hapus_pustakawan"></div>
                                            </div>
                                            <div class="modal-footer">                      
                                                <button type="submit" name="hapus_pustakawan" class="btn btn-default">Hapus</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>
                    <div class="modal fade" id="modalhapusbuku" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>hapus">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Hapus Buku</h2>
                                                <p>Apakah anda yakin ingin menghapus buku ini?</p>
                                                <div id="tampil_hapus_buku"></div>
                                            </div>
                                            <div class="modal-footer">                      
                                                <button type="submit" name="hapus_buku" class="btn btn-default">Hapus</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>
                    <div class="modal fade" id="modalhapustransaksi" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>hapus">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Hapus Transaksi</h2>
                                                <p>Apakah anda yakin ingin menghapus transaksi ini?</p>
                                                <div id="tampil_hapus_transaksi"></div>
                                            </div>
                                            <div class="modal-footer">                      
                                                <button type="submit" name="hapus_transaksi" class="btn btn-default">Hapus</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>
                    <div class="modal fade" id="modalhapuspengguna" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>hapus">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Hapus Pengguna</h2>
                                                <p>Apakah anda yakin ingin menghapus pengguna ini?</p>
                                                <div id="tampil_hapus_pengguna"></div>
                                            </div>
                                            <div class="modal-footer">                      
                                                <button type="submit" name="hapus_pengguna" class="btn btn-default">Hapus</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>
                    <div class="modal fade" id="modallaporan" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>laporan" target="_blank">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <?php
                                                if ($this->uri->segment(1) == 'anggota' OR $this->uri->segment(1) == 'pustakawan' OR $this->uri->segment(1) == 'buku' OR $this->uri->segment(1) == 'pengguna') {
                                                ?>
                                                <h2>Pilih Laporan</h2>
                                                <input name="jenis_laporan" type="hidden" value="<?php echo $this->uri->segment(1) ?>">            
                                                <?php }else{ ?>
                                                <h2>Pilih Tahun Laporan</h2>
                                                <input name="jenis_laporan" type="hidden" value="<?php echo $this->uri->segment(1) ?>">
                                                <select name="tahun_laporan" class="form-control selectpicker" id="select-country" data-live-search="true" required oninvalid="this.setCustomValidity('Tahun harus dipilih!')" oninput="setCustomValidity('')">
                                                    <option data-tokens="2019">2019</option>
                                                    <option data-tokens="2020">2020</option>
                                                    <option data-tokens="2021">2021</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                            <br>
                                            <div class="modal-footer">                      
                                                <button type="submit" name="cetak" class="btn btn-default">Cetak</button>
                                                <button type="submit" name="excel" class="btn btn-default">Excel</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>                    
                    <div class="modal fade" id="modaltambahanggota" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>add">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 style="font-size: 20px;">Tambah Anggota</h2>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Nama</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st">
                                                                        <input name="nama_anggota" type="text" class="form-control input-sm" placeholder="Ex: Ardhi Wahyudhi" required oninvalid="this.setCustomValidity('Input nama anggota!')" oninput="setCustomValidity('')">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Jenis Kelamin</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="input_text">
                                                                        <select class="form-control selectpicker" id="select-country" data-live-search="true" name="jk" required>
                                                                        <option data-tokens="L" value="L">Laki-laki</option>
                                                                        <option data-tokens="P" value="P">Perempuan</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental mg-t-15">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Alamat</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="nk-int-st">
                                                                <textarea name="alamat" class="form-control" rows="5" placeholder="Ex: Jln. Raya Serang KM. 05, Pelamunan, Kramatwatu - Banten" required oninvalid="this.setCustomValidity('Input alamat!')" oninput="setCustomValidity('')"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="simpan_anggota" class="btn btn-default">Simpan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>
                    <div class="modal fade" id="modaltambahpustakawan" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>add">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 style="font-size: 20px;">Tambah Pustakawan</h2>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Nama</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st">
                                                                        <input name="nama_pustakawan" type="text" class="form-control input-sm" placeholder="Ex: Ardhi Wahyudhi" required oninvalid="this.setCustomValidity('Input nama pustakawan!')" oninput="setCustomValidity('')">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Jenis Kelamin</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="input_text">
                                                                        <select class="form-control selectpicker" id="select-country" data-live-search="true" name="jk" required>
                                                                        <option data-tokens="L" value="L">Laki-laki</option>
                                                                        <option data-tokens="P" value="P">Perempuan</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental mg-t-15">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Alamat</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="nk-int-st">
                                                                <textarea name="alamat" class="form-control" rows="5" placeholder="Ex: Jln. Raya Serang KM. 05, Pelamunan, Kramatwatu - Banten" required oninvalid="this.setCustomValidity('Input alamat!')" oninput="setCustomValidity('')"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="simpan_pustakawan" class="btn btn-default">Simpan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>
                    <div class="modal fade" id="modaltambahbuku" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>add">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 style="font-size: 20px;">Tambah Buku</h2>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Judul</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st">
                                                                        <input name="judul" type="text" class="form-control input-sm" placeholder="Ex: Sejarah Nasional" required oninvalid="this.setCustomValidity('Input judul buku!')" oninput="setCustomValidity('')">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Jenis</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="input_text">
                                                                        <select class="form-control selectpicker" id="select-country" data-live-search="true" name="jenis_buku" required>
                                                                        <option value="Komik">Komik</option>
                                                                        <option value="Majalah">Majalah</option>
                                                                        <option value="Paket">Paket</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental mg-t-15">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Penerbit</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="nk-int-st">
                                                                <input name="penerbit" type="text" class="form-control input-sm" placeholder="Ex: PT. Media Computindo" required oninvalid="this.setCustomValidity('Input penerbit buku!')" oninput="setCustomValidity('')">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental mg-t-15">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Tahun</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="nk-int-st">
                                                                <input name="tahun_terbit" type="text" class="form-control input-sm" maxlength="4" placeholder="Ex: 2011" required oninvalid="this.setCustomValidity('Input tahun terbit buku!')" oninput="setCustomValidity('')">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental mg-t-15">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Jumlah</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="nk-int-st">
                                                                <input name="jumlah" type="text" class="form-control input-sm" placeholder="Ex: 20" required oninvalid="this.setCustomValidity('Input jumlah buku!')" oninput="setCustomValidity('')">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="simpan_buku" class="btn btn-default">Simpan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>                    
                    <div class="modal fade" id="modaltambahtransaksi" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>add">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 style="font-size: 20px;">Tambah Transaksi</h2>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Anggota</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st">
                                                                    <select class="form-control selectpicker" id="select-country" data-live-search="true" name="id_anggota" required>
                                                                        <?php
                                                                        foreach ($anggota->result() as $d)
                                                                        {
                                                                        echo "<option value=".$d->id_anggota.">".$d->nama_anggota."</option>";
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Pustakawan</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="input_text">
                                                                        <select class="form-control selectpicker" id="select-country" data-live-search="true" name="id_pustakawan" required>
                                                                        <?php
                                                                        foreach ($pustakawan->result() as $d)
                                                                        {
                                                                        echo "<option value=".$d->id_pustakawan.">".$d->nama_pustakawan."</option>";
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Buku</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st" id="input_text">
                                                                        <select class="form-control selectpicker" id="select-country" data-live-search="true" name="id_buku" required>
                                                                        <?php
                                                                        foreach ($buku->result() as $d)
                                                                        {
                                                                        echo "<option value=".$d->id_buku.">".$d->judul."</option>";
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="simpan_transaksi" class="btn btn-default">Simpan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>
                    <div class="modal fade" id="modaltambahpengguna" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo site_url() ?>add">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 style="font-size: 20px;">Tambah Pengguna</h2>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Username</label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st">
                                                                        <input name="username" type="text" class="form-control input-sm" placeholder="Ex: username123" required oninvalid="this.setCustomValidity('Input username!')" oninput="setCustomValidity('')">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Password</label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-example-int form-example-st">
                                                                <div class="form-group">
                                                                    <div class="nk-int-st">
                                                                        <input name="password" type="password" class="form-control input-sm" placeholder="Ex: password123" required oninvalid="this.setCustomValidity('Input username!')" oninput="setCustomValidity('')">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int form-horizental mg-t-15">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="hrzn-fm">Level</label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="nk-int-st">
                                                                <select class="form-control selectpicker" id="select-country" data-live-search="true" name="level" required>
                                                                        <option value="Pustakawan">Pustakawan</option>
                                                                        <option value="Anggota">Anggota</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="simpan_pengguna" class="btn btn-default">Simpan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <?php $this->load->view($content); ?>
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2019 
. All rights reserved. Developed by <b>Ardhi Wahyudhi</b>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url() ?>assets/js/flot/curvedLines.js"></script>
    <script src="<?php echo base_url() ?>assets/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url() ?>assets/js/knob/jquery.appear.js"></script>
    <script src="<?php echo base_url() ?>assets/js/knob/knob-active.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap-select/bootstrap-select.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/wave/waves.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/wave/wave-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
    <!-- Data Table JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/data-table/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/data-table/data-table-act.js"></script>
	<!--  Chat JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/chat/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chat/jquery.chat.js"></script>
    <!-- Charts JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/charts/Chart.js"></script>
    <script src="<?php echo base_url() ?>assets/js/charts/area-chart.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>    

    <!-- data chart transaksi -->
    <script>
    var ctx = document.getElementById("chartku");
    var areachartfillstart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            datasets: [{
                label: "Data",
                fill: 'start',
                backgroundColor: '#00c292',
                borderColor: '#00c292',
                data: [<?php echo $grafik['jan'];?>, <?php echo $grafik['feb'];?>, <?php echo $grafik['mar'];?>, <?php echo $grafik['apr'];?>, <?php echo $grafik['mei'];?>, <?php echo $grafik['jun'];?>, <?php echo $grafik['jul'];?>, <?php echo $grafik['agu'];?>, <?php echo $grafik['sep'];?>, <?php echo $grafik['okt'];?>, <?php echo $grafik['nov'];?>, <?php echo $grafik['des'];?>]
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            spanGaps: false,
            title:{
                display:true,
                text:'Grafik Peminjaman Buku'
            },
            elements: {
                line: {
                    tension: 0.000001
                }
            },
            plugins: {
                filler: {
                    propagate: false
                }
            },
            scales: {
                xAxes: [{
                    ticks: {
                        autoSkip: false,
                        maxRotation: 0
                    }
                }]
            }
        }
    });
    </script>

    <script>
        //modal detail anggota
        function det_anggota(id_anggota){
        $.ajax({
            url     :"<?php echo site_url();?>det_anggota",
            type    : 'POST',
            data    : 'id_anggota='+id_anggota,            
            dataType: 'JSON',
            success:function (data) {
                var html = ''; 
                var html2 = ''; 
                var html3 = ''; 
                var i;
                    for (i=0; i<data.length; i++) {  
                    if (data[i].jk == "L") {
                        var jk = 'selected';
                    }else{
                        var jk = '';
                    } 
                    if (data[i].jk == "P") {
                        var jk2 = 'selected';
                    }else{
                        var jk2 = '';
                    }                          
                        html += '<input type="hidden" name="id_anggota" value='+data[i].id_anggota+'><textarea id="edit_nama" name="nama_anggota" class="form-control" rows="1" readonly>'+data[i].nama_anggota+'</textarea>';
                        html2 += '<select class="form-control" id="edit_jk" name="jk" disabled><option data-tokens="L" value="L" '+jk+'>Laki-laki</option><option data-tokens="P" value="P" '+jk2+'>Perempuan</option>';
                        html3 += '<textarea id="edit_alamat" name="alamat" class="form-control" rows="5" readonly>'+data[i].alamat+'</textarea>';   

                    }
                $('#tampil_nama').html(html);
                $('#tampil_jk').html(html2);
                $('#tampil_alamat').html(html3);
            }
        });

       }

       //modal detail pustakawan
        function det_pustakawan(id_pustakawan){
        $.ajax({
            url     :"<?php echo site_url();?>det_pustakawan",
            type    : 'POST',
            data    : 'id_pustakawan='+id_pustakawan,            
            dataType: 'JSON',
            success:function (data) {
                var html = ''; 
                var html2 = ''; 
                var html3 = ''; 
                var i;
                    for (i=0; i<data.length; i++) {  
                    if (data[i].jk == "L") {
                        var jk = 'selected';
                    }else{
                        var jk = '';
                    } 
                    if (data[i].jk == "P") {
                        var jk2 = 'selected';
                    }else{
                        var jk2 = '';
                    }                          
                        html += '<input type="hidden" name="id_pustakawan" value='+data[i].id_pustakawan+'><textarea id="edit_nama" name="nama_pustakawan" class="form-control" rows="1" readonly>'+data[i].nama_pustakawan+'</textarea>';
                        html2 += '<select class="form-control" id="edit_jk" name="jk" disabled><option data-tokens="L" value="L" '+jk+'>Laki-laki</option><option data-tokens="P" value="P" '+jk2+'>Perempuan</option>';
                        html3 += '<textarea id="edit_alamat" name="alamat" class="form-control" rows="5" readonly>'+data[i].alamat+'</textarea>';   

                    }
                $('#tampil_nama_pustakawan').html(html);
                $('#tampil_jk_pustakawan').html(html2);
                $('#tampil_alamat_pustakawan').html(html3);
            }
        });

       }

       //modal detail buku
        function det_buku(id_buku){
        $.ajax({
            url     :"<?php echo site_url();?>det_buku",
            type    : 'POST',
            data    : 'id_buku='+id_buku,            
            dataType: 'JSON',
            success:function (data) {
                var html = ''; 
                var html2 = ''; 
                var html3 = ''; 
                var html4 = ''; 
                var html5 = ''; 
                var i;
                    for (i=0; i<data.length; i++) {
                        if (data[i].jenis_buku == "Komik") {
                            var jb = 'selected';
                        }else{
                            var jb = '';
                        } 
                        if (data[i].jenis_buku == "Majalah") {
                            var jb2 = 'selected';
                        }else{
                            var jb2 = '';
                        }
                        if (data[i].jenis_buku == "Paket") {
                            var jb3 = 'selected';
                        }else{
                            var jb3 = '';
                        }    
                        html += '<input type="hidden" name="id_buku" value='+data[i].id_buku+'><textarea id="edit_judul" name="judul" class="form-control" rows="1" readonly>'+data[i].judul+'</textarea>';
                        html2 += '<select class="form-control" id="edit_jenisbuku" name="jenis_buku" disabled><option value="Komik" '+jb+'>Komik</option><option value="Majalah" '+jb2+'>Majalah</option><option value="Paket" '+jb3+'>Paket</option>';
                        html3 += '<textarea id="edit_penerbit" name="penerbit" class="form-control" rows="1" readonly>'+data[i].penerbit+'</textarea>';
                        html4 += '<textarea id="edit_tahunterbit" name="tahun_terbit" class="form-control" maxlength="4" rows="1" readonly>'+data[i].tahun_terbit+'</textarea>';
                        html5 += '<textarea id="edit_jumlah" name="jumlah" class="form-control" maxlength="2" rows="1" readonly>'+data[i].jumlah+'</textarea>';   

                    }
                $('#tampil_judul_buku').html(html);
                $('#tampil_jenis_buku').html(html2);
                $('#tampil_penerbit_buku').html(html3);
                $('#tampil_tahunterbit_buku').html(html4);
                $('#tampil_jumlah_buku').html(html5);
            }
        });

       }

       //modal detail transaksi
        function det_transaksi(id_transaksi){
        $.ajax({
            url     :"<?php echo site_url();?>det_transaksi",
            type    : 'POST',
            data    : 'id_transaksi='+id_transaksi,            
            dataType: 'JSON',
            success:function (data) {
                var html = ''; 
                var html2 = ''; 
                var html3 = ''; 
                var html4 = ''; 
                var html5 = ''; 
                var html6 = ''; 
                var i;
                    for (i=0; i<data.length; i++) {
                        html += '<input type="hidden" name="id_transaksi" value='+data[i].id_transaksi+'><textarea class="form-control" rows="1" readonly>'+data[i].nama_anggota+'</textarea>';
                        html2 += '<textarea class="form-control" rows="1" readonly>'+data[i].nama_pustakawan+'</textarea>';
                        html3 += '<input type="hidden" name="id_buku" value='+data[i].id_buku+'><textarea class="form-control" rows="1" readonly>'+data[i].judul+'</textarea>';
                        html4 += '<textarea class="form-control" rows="1" readonly>'+data[i].tgl_pinjam+'</textarea>';
                        html5 += '<textarea id="edit_tglkembali" class="form-control" rows="1" readonly>'+data[i].tgl_kembali+'</textarea>';
                        html6 += '<textarea id="edit_statuskembali" class="form-control" rows="1" readonly>'+data[i].status_kembali+'</textarea>';
                    }
                $('#tampil_anggota').html(html);
                $('#tampil_pustakawan').html(html2);
                $('#tampil_buku').html(html3);
                $('#tampil_tglpinjam').html(html4);
                $('#tampil_tglkembali').html(html5);
                $('#tampil_statuskembali').html(html6);
            }
        });

       }

       //modal detail pengguna
        function det_pengguna(id_user){
        $.ajax({
            url     :"<?php echo site_url();?>det_pengguna",
            type    : 'POST',
            data    : 'id_user='+id_user,            
            dataType: 'JSON',
            success:function (data) {
                var html = ''; 
                var html2 = ''; 
                var html3 = ''; 
                var i;
                    for (i=0; i<data.length; i++) {  
                    if (data[i].level == "Pustakawan") {
                        var lvl = 'selected';
                    }else{
                        var lvl = '';
                    } 
                    if (data[i].level == "Anggota") {
                        var lvl2 = 'selected';
                    }else{
                        var lvl2 = '';
                    }                          
                        html += '<input type="hidden" name="id_user" value='+data[i].id_user+'><textarea id="edit_username" name="username" class="form-control" rows="1" readonly>'+data[i].username+'</textarea>';
                        html2 += '<input name="password" id="edit_password" type="password" class="form-control input-sm" value='+data[i].password+' placeholder="Ex: password123" readonly>';   
                        html3 += '<select class="form-control" id="edit_level" name="level" disabled><option value="Pustakawan" '+lvl+'>Pustakawan</option><option value="Anggota" '+lvl2+'>Anggota</option>';
                        
                    }
                $('#tampil_username').html(html);
                $('#tampil_password').html(html2);
                $('#tampil_level').html(html3);
            }
        });

       }

       //Modal Hapus Anggota
       function modal_hapus_anggota(id_anggota){
        $.ajax({
            url     :"<?php echo site_url();?>det_anggota",
            type    : 'POST',
            data    : 'id_anggota='+id_anggota,            
            dataType: 'JSON',
            success:function (data) {
                var html = ''; 
                var i;
                    for (i=0; i<data.length; i++) {  
                        html += '<input value='+data[i].id_anggota+' name="id_anggota" type="hidden" required>';
                    }
                $('#tampil_hapus_anggota').html(html);                
            }
        });

       }

       //Modal Hapus Pustakawan
       function modal_hapus_pustakawan(id_pustakawan){
        $.ajax({
            url     :"<?php echo site_url();?>det_pustakawan",
            type    : 'POST',
            data    : 'id_pustakawan='+id_pustakawan,            
            dataType: 'JSON',
            success:function (data) {
                var html = ''; 
                var i;
                    for (i=0; i<data.length; i++) {  
                        html += '<input value='+data[i].id_pustakawan+' name="id_pustakawan" type="hidden" required>';
                    }
                $('#tampil_hapus_pustakawan').html(html);                
            }
        });

       }

       //Modal Hapus Buku
       function modal_hapus_buku(id_buku){
        $.ajax({
            url     :"<?php echo site_url();?>det_buku",
            type    : 'POST',
            data    : 'id_buku='+id_buku,            
            dataType: 'JSON',
            success:function (data) {
                var html = ''; 
                var i;
                    for (i=0; i<data.length; i++) {  
                        html += '<input value='+data[i].id_buku+' name="id_buku" type="hidden" required>';
                    }
                $('#tampil_hapus_buku').html(html);                
            }
        });

       }

       //Modal Hapus Transaksi
       function modal_hapus_transaksi(id_transaksi){
        $.ajax({
            url     :"<?php echo site_url();?>det_transaksi",
            type    : 'POST',
            data    : 'id_transaksi='+id_transaksi,            
            dataType: 'JSON',
            success:function (data) {
                var html = ''; 
                var i;
                    for (i=0; i<data.length; i++) {  
                        html += '<input value='+data[i].id_transaksi+' name="id_transaksi" type="hidden" required>';
                    }
                $('#tampil_hapus_transaksi').html(html);                
            }
        });

       }

       //Modal Hapus Pengguna
       function modal_hapus_pengguna(id_user){
        $.ajax({
            url     :"<?php echo site_url();?>det_pengguna",
            type    : 'POST',
            data    : 'id_user='+id_user,            
            dataType: 'JSON',
            success:function (data) {
                var html = ''; 
                var i;
                    for (i=0; i<data.length; i++) {  
                        html += '<input value='+data[i].id_user+' name="id_user" type="hidden" required>';
                    }
                $('#tampil_hapus_pengguna').html(html);                
            }
        });

       }

    //untuk tombol edit anggota
    function editdataanggota(){
        var x = document.getElementById("edit_nama");   
        var y = document.getElementById("edit_jk");   
        var z = document.getElementById("edit_alamat");   
        var a = document.getElementById("btnedit_anggota");
        var b = document.getElementById("btnsimpan_anggota");        
        //jika tulisan buttonnya 'Edit'
        if (a.firstChild.data == "Edit") {   
            x.removeAttribute("readonly");
            y.removeAttribute("disabled");
            z.removeAttribute("readonly");
            a.firstChild.data = "Batal Edit";
            b.removeAttribute("disabled");
        }else{            
            x.setAttribute("readonly","");
            y.setAttribute("disabled","");
            z.setAttribute("readonly","");
            a.firstChild.data = "Edit";
            b.setAttribute("disabled","");
        }
    }

    //untuk tombol edit pustakawan
    function editdatapustakawan(){
        var x = document.getElementById("edit_nama");   
        var y = document.getElementById("edit_jk");   
        var z = document.getElementById("edit_alamat");   
        var a = document.getElementById("btnedit_pustakawan");
        var b = document.getElementById("btnsimpan_pustakawan");        
        //jika tulisan buttonnya 'Edit'
        if (a.firstChild.data == "Edit") {   
            x.removeAttribute("readonly");
            y.removeAttribute("disabled");
            z.removeAttribute("readonly");
            a.firstChild.data = "Batal Edit";
            b.removeAttribute("disabled");
        }else{            
            x.setAttribute("readonly","");
            y.setAttribute("disabled","");
            z.setAttribute("readonly","");
            a.firstChild.data = "Edit";
            b.setAttribute("disabled","");
        }
    }

    //untuk tombol edit buku
    function editdatabuku(){
        var v = document.getElementById("edit_judul");   
        var w = document.getElementById("edit_jenisbuku");   
        var x = document.getElementById("edit_penerbit");   
        var y = document.getElementById("edit_tahunterbit");   
        var z = document.getElementById("edit_jumlah");   
        var a = document.getElementById("btnedit_buku");
        var b = document.getElementById("btnsimpan_buku");        
        //jika tulisan buttonnya 'Edit'
        if (a.firstChild.data == "Edit") {   
            v.removeAttribute("readonly");
            w.removeAttribute("disabled");
            x.removeAttribute("readonly");
            y.removeAttribute("readonly");
            z.removeAttribute("readonly");
            a.firstChild.data = "Batal Edit";
            b.removeAttribute("disabled");
        }else{            
            x.setAttribute("readonly","");
            y.setAttribute("disabled","");
            z.setAttribute("readonly","");
            a.firstChild.data = "Edit";
            b.setAttribute("disabled","");
        }
    }

    //untuk tombol edit transaksi
    function editdatatransaksi(){
        var v = document.getElementById("edit_tglkembali");   
        var w = document.getElementById("edit_statuskembali");   
        var a = document.getElementById("btnedit_transaksi");
        var b = document.getElementById("btnsimpan_transaksi");        
        var c = document.getElementById("tgl_date");
        var d = document.getElementById("tampil_tglkembali");
        var e = document.getElementById("input_date");
        var f = document.getElementById("input_status");
        var g = document.getElementById("tampil_statuskembali");
        //jika tulisan buttonnya 'Edit'
        if (a.firstChild.data == "Edit") { 
            d.style.display = "none";  
            g.style.display = "none";  
            e.style.display = "block";  
            f.style.display = "block";  
            v.removeAttribute("readonly");
            w.removeAttribute("readonly");
            a.firstChild.data = "Batal Edit";
            b.removeAttribute("disabled");
        }else{            
            d.style.display = "block";  
            g.style.display = "block";  
            e.style.display = "none";  
            f.style.display = "none";  
            v.setAttribute("readonly","");
            w.setAttribute("readonly","");
            a.firstChild.data = "Edit";
            b.setAttribute("disabled","");
        }
    }

    //untuk tombol edit penggunga
    function editdatapengguna(){
        var x = document.getElementById("edit_username");   
        var y = document.getElementById("edit_password");   
        var z = document.getElementById("edit_level");   
        var a = document.getElementById("btnedit_pengguna");
        var b = document.getElementById("btnsimpan_pengguna");        
        //jika tulisan buttonnya 'Edit'
        if (a.firstChild.data == "Edit") {   
            x.removeAttribute("readonly");
            y.removeAttribute("readonly");
            y.value = "";
            y.setAttribute("required","");
            z.removeAttribute("disabled");
            a.firstChild.data = "Batal Edit";
            b.removeAttribute("disabled");
        }else{            
            x.setAttribute("readonly","");
            y.setAttribute("readonly","");
            z.setAttribute("disabled","");
            a.firstChild.data = "Edit";
            b.setAttribute("disabled","");
        }
    }
    
    </script>

    <!--untuk hide pemberitahuan stlh input sampai 5 detik-->
    <script>
        setTimeout(function() {
          $('#notif').hide()
        }, 5000);
    </script>
</body>

</html>