

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css">
<body>
	<?php foreach($daftar_umkm as $u){ ?> 
	
	<!-- modal tambah data -->
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url(). 'crud/update'; ?>" method="post"> <!-- form action -->
                    <div class="form-group">
						<input type="hidden" name="id" value="<?php echo $u->ID_UMKM ?>">
                        <label for="username">Nama Usaha</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Usaha" value="<?php echo $u->NAMA_USAHA?>"/>
                    </div>
                    <div class="form-group">
                        <label for="username">Jenis</label>
                        <select name="jenis" class="form-control">
									<option value="Kuliner"><?php echo $u->JENIS ?></option>
                                    <option value="Kuliner">Kuliner</option>
                                    <option value="Fasion">Fasion</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Ototmotif">Ototmotif</option>
                                    <option value="Lainnya">Lainnya</option>
                                    </select>
                    </div>
                    <div class="form-group">
                        <label for="username">Omset</label>
                        <input type="number" name="omset" class="form-control" placeholder="Omset" value="<?php echo $u->OMSET?>"/>
                    </div>
                    <div class="form-group">
                        <label for="username">Pemilik</label>
                        <input type="text" name="pemilik" placeholder="Pemilik" class="form-control" value="<?php echo $u->PEMILIK ?>"/>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">Kirim</button>
                    </div>
                    </form>	
                    <!-- end form login -->
                </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
			<?php } ?>
<!-- /.modal -->
</body>