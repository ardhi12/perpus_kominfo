<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo $this->session->flashdata('notifikasi');?>
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="fa fa-book"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Buku</h2>
										<p>Kelola <span class="bread-ntd">Buku Perpustakaan</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
                                    <a href="#" class="btn btn-success success-icon-notika" data-toggle="modal" data-target="#modaltambahbuku"><i class="fa fa-plus"></i> Tambah</a>
                                    <a href="#" onclick="window.location.reload();" class="btn btn-amber amber-icon-notika" ><i class="fa fa-refresh"></i></a>
									<a href="#" class="btn btn-info info-icon-notika" data-toggle="modal" data-target="#modallaporan"><i class="fa fa-download"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">                        
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;text-align: center;">No</th>
                                        <th style="width: 200px;text-align: center;">Judul</th>
                                        <th style="width: 150px;text-align: center;">Jenis Buku</th>
                                        <th style="width: 150px;text-align: center;">Penerbit</th>
                                        <th style="width: 100px;text-align: center;">Tahun Terbit</th>
                                        <th style="width: 100px;text-align: center;">Jumlah</th>
                                        <th style="width: 150px;text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no=1;
                                        foreach ($buku->result() as $d) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $d->judul;?></td>
                                        <td><?php echo $d->jenis_buku;?></td>
                                        <td><?php echo $d->penerbit;?></td>
                                        <td><?php echo $d->tahun_terbit;?></td>
                                        <td><?php echo $d->jumlah;?></td>
                                        <td><center>                                        		
                                                <a href="#" class="btn btn-info info-icon-notika btn-reco-mg btn-button-mg" data-toggle="modal" data-target="#modaldetailbuku" onclick="det_buku('<?php echo $d->id_buku ?>')"><i class="notika-icon notika-search"></i></a> 
                                                <a href="#" class="btn btn-danger danger-icon-notika btn-reco-mg btn-button-mg" data-toggle="modal" data-target="#modalhapusbuku" onclick="modal_hapus_buku('<?php echo $d->id_buku ?>')"><i class="fa fa-trash"></i></a>   
                                        	</center>
                                        </td>
                                    </tr>
                                    <?php $no++;} ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th style="width: 20px;text-align: center;">No</th>
                                        <th style="width: 200px;text-align: center;">Judul</th>
                                        <th style="width: 150px;text-align: center;">Jenis Buku</th>
                                        <th style="width: 150px;text-align: center;">Penerbit</th>
                                        <th style="width: 100px;text-align: center;">Tahun Terbit</th>
                                        <th style="width: 100px;text-align: center;">Jumlah</th>
                                        <th style="width: 150px;text-align: center;">Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->