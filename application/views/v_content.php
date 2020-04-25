<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Specer Template">
    <meta name="keywords" content="Specer, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMKM</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <?php $status = $this->session->userdata('status'); ?>

    
    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>assets/img/hero/hero-4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hs-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hs-text">
                                        <h2>Daftar UMKM di Jember</h2>
                                        <h4>(Usaha Mikro Kecil menengah)</h4>
                                        <a href="#sumber" class="primary-btn">lihat detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Trending News Section Begin -->
    <div class="trending-news-section" id="sumber">
        <div class="container">
            <div class="tn-title"><i class="fa fa-caret-right"></i>Sumber : Detik.com 16/03/2020</div>
            <div class="news-slider owl-carousel">
                <div class="nt-item">Bank Diminta Izinkan UMKM Tunda Bayar Bunga Cicilan</div>
                <div class="nt-item">Lewat Indonesia Mall, 30 Ribu Pelaku UMKM Didorong Go Online</div>
                <div class="nt-item">Tangkis Corona, UMKM Bakal Dapat Kredit 'Gratis' dari Perbankan?</div>
                <div class="nt-item">Omnibus Law Diharapkan Jadi Motor Penggerak Koperasi dan UMKM</div>
            </div>
        </div>
    </div>
    <!-- Trending News Section End -->

    <!-- Match Section Begin -->
    <section class="match-section set-bg" data-setbg="<?php echo base_url(); ?>assets/img/match/match-bg.jpg">
        <div class="container">
        
    
    <!-- tabel database -->
    <div class="" id="tabel">
    <?php if($status=="login"){ ?> 
        <a href="#" data-toggle="modal"  class="btn btn-info mb-2"
                            data-target="#tambahdata"><b><i class="fa fa-plus text-light"></i>  Tambah Data</b></a>
            <?php } ?>
   
    <table class="table" border="1">
    <thead class="thead-hover">
		<tr class="bg-light">
			<th class="text-center ">NO</th>
			<th class="text-center ">NAMA USAHA</th>
			<th class="text-center ">JENIS</th>
            <th class="text-center ">OMSET</th>
            <th class="text-center ">PEMILIK</th>
            <?php if($status=="login"){ ?>
                <th class="text-center ">AKSI</th>
            <?php } ?>
        </tr>
        </thead>
        <?php 
        $nama="";
		$no = 1;
        foreach($database ->result_array() as $u) :  //ubah variabel user ke u
            $id=$u['ID_UMKM'];
            $nama=$u['NAMA_USAHA'];
            $jenis=$u['JENIS'];
            $omset=$u['OMSET'];
            $pemilik=$u['PEMILIK'];
		?>
		<tr>
            <td class="text-center text-light"><?php echo $no++ ?></td> <!-- Nomor looping -->
            <?php $id; ?>
			<td class="text-light"><?php echo $nama;?></td> <!-- tampilkan data nama dari database -->
			<td class="text-light"><?php echo $jenis;?></td> <!-- tampilkan data alamat dari database -->
            <td class="text-light"><?php echo $omset; ?></td> <!-- tampilkan data pekerjaan dari database -->
            <td class="text-light"><?php echo $pemilik; ?></td>
            <?php if($status=="login"){ ?> 
			<td class="text-center text-light">
                <!-- <a data-toggle="modal" data-target="#modal-edit<?php $nama ?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i><?php echo $nama; ?></a> -->
                <a  href="<?php echo base_url(). 'crud/edit/'.$id ?>" class="btn btn-warning">Ubah</a>
                <a  onclick="return confirm('Yakin Hapus?')" href="<?php echo base_url(). 'crud/hapus/'.$id ?>" class="btn btn-danger ml-2">hapus</a>
            </td>
            <?php } ?>
		</tr>
            <?php endforeach; ?>
    </table>
        </div>
    <!-- tabel database -->
    </div>
    </section>
    <!-- Match Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="fa fa-close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

<!-- modal tambah data -->
     <div id="tambahdata" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- form login -->
                    <form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post"> <!-- form action -->
                    <div class="form-group">
                        <label for="username">Nama Usaha</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Usaha"/>
                    </div>
                    <div class="form-group">
                        <label for="username">Jenis</label>
                        <select name="jenis" class="form-control">
                                    <option value="Kuliner">Kuliner</option>
                                    <option value="Fasion">Fasion</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Ototmotif">Ototmotif</option>
                                    <option value="Lainnya">Lainnya</option>
                                    </select>
                    </div>
                    <div class="form-group">
                        <label for="username">Omset</label>
                        <input type="number" name="omset" class="form-control" placeholder="Omset"/>
                    </div>
                    <div class="form-group">
                        <label for="username">Pemilik</label>
                        <input type="text" name="pemilik" placeholder="Pemilik" class="form-control" />
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">Kirim</button>
                    </div>
                    </form>	
                    <!-- end form login -->
                </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
            </div>
<!-- /.modal -->

<!-- modal EDIT data -->

    <div id="modal-edit<?php $nama ?>" class="modal fade" tabindex="-1" role="dialog"> 
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- form login -->
                    <form action="<?php echo base_url(). 'crud/edit'; ?>" method="post"> <!-- form action -->
                    <div class="form-group">
                        <label for="username">Nama Usaha</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="username">Jenis</label>
                        <select name="jenis" class="form-control">
                                    <option value="Kuliner">Kuliner</option>
                                    <option value="Fasion">Fasion</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Ototmotif">Ototmotif</option>
                                    <option value="Lainnya">Lainnya</option>
                                    </select>
                    </div>
                    <div class="form-group">
                        <label for="username">Omset</label>
                        <input type="text" name="omset" class="form-control" placeholder="Omset"/>
                    </div>
                    <div class="form-group">
                        <label for="username">Pemilik</label>
                        <input type="text" name="pemilik" placeholder="Pemilik" class="form-control" />
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">Kirim</button>
                    </div>
                    </form>	
                    <!-- end form login -->
                </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
            </div>
<!-- /.modal -->


    <!-- Js Plugins -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.slicknav.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>

</html>