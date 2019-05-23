<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Perpustakaan Kominfo</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/logo_scpas.png">
</head>
<?php 
	if ($pilih_laporan == 'cetak') {
		echo '<body onload="window.print()">';
	}else{
		echo '<body>';
	}
?>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

<?php 
	if ($pilih_laporan == 'excel') {
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Laporan ".ucwords($jenis)." ".$tahun_laporan.".xls");
	}else{
		echo '';
	}
?>	

	<center>
        <?php
        if ($jenis == "anggota" OR $jenis == "pustakawan" OR $jenis == "buku" OR $jenis == "pengguna") {
            echo '<h3>LAPORAN '.strtoupper($jenis).'</h3>';
        }else{
            echo '<h3>LAPORAN '.strtoupper($jenis).'<br> Tahun '.$tahun_laporan.'</h3>';
        }
        ?>
	</center>

	<table border="1">
		<?php
		if ($jenis == "anggota") {
		?>
                                <thead>
                                    <tr>
                                        <th style="width: 50px;text-align: center;">No</th>
                                        <th style="width: 200px;text-align: center;">Nama Anggota</th>
                                        <th style="width: 150px;text-align: center;">Jenis Kelamin</th>
                                        <th style="width: 300px;text-align: center;">Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no=1;
                                        foreach ($data->result() as $d) {     
                                        if ($d->jk == 'L') {
                                            $jk = 'Laki-laki';
                                        }else{
                                            $jk = 'Perempuan';
                                        }      
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $no; ?></td>
                                        <td><?php echo $d->nama_anggota;?></td>
                                        <td><?php echo $jk;?></td>
                                        <td><?php echo $d->alamat;?></td>
                                    </tr>
                                    <?php $no++;} ?>
                                </tbody>   
        <?php }else if ($jenis == "pustakawan"){ ?>   
                                <thead>
                                    <tr>
                                        <th style="width: 50px;text-align: center;">No</th>
                                        <th style="width: 200px;text-align: center;">Nama Pustakawan</th>
                                        <th style="width: 150px;text-align: center;">Jenis Kelamin</th>
                                        <th style="width: 300px;text-align: center;">Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no=1;
                                        foreach ($data->result() as $d) {     
                                        if ($d->jk == 'L') {
                                            $jk = 'Laki-laki';
                                        }else{
                                            $jk = 'Perempuan';
                                        }      
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $no; ?></td>
                                        <td><?php echo $d->nama_pustakawan;?></td>
                                        <td><?php echo $jk;?></td>
                                        <td><?php echo $d->alamat;?></td>
                                    </tr>
                                    <?php $no++;} ?>
                                </tbody> 
        <?php }else if ($jenis == "buku"){ ?>   
                                <thead>
                                    <tr>
                                        <th style="width: 50px;text-align: center;">No</th>
                                        <th style="width: 300px;text-align: center;">Judul</th>
                                        <th style="width: 100px;text-align: center;">Jenis Buku</th>
                                        <th style="width: 200px;text-align: center;">Penerbit</th>
                                        <th style="width: 100px;text-align: center;">Tahun Terbit</th>
                                        <th style="width: 100px;text-align: center;">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no=1;
                                        foreach ($data->result() as $d) {     
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $no; ?></td>
                                        <td><?php echo $d->judul;?></td>
                                        <td><?php echo $d->jenis_buku;?></td>
                                        <td><?php echo $d->penerbit;?></td>
                                        <td><?php echo $d->tahun_terbit;?></td>
                                        <td><?php echo $d->jumlah;?></td>
                                    </tr>
                                    <?php $no++;} ?>
                                </tbody> 
        <?php }else if ($jenis == "transaksi"){ ?>   
        						<thead>
                                    <tr>
                                        <th style="width: 50px;text-align: center;">No</th>
                                        <th style="width: 300px;text-align: center;">Anggota</th>
                                        <th style="width: 100px;text-align: center;">Pustakawan</th>
                                        <th style="width: 200px;text-align: center;">Buku</th>
                                        <th style="width: 100px;text-align: center;">Tanggal Pinjam</th>
                                        <th style="width: 100px;text-align: center;">Tanggal Kembali</th>
                                        <th style="width: 100px;text-align: center;">Status Kembali</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no=1;
                                        foreach ($data->result() as $d) {           
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $no; ?></td>
                                        <td><?php echo $d->nama_anggota;?></td>
                                        <td><?php echo $d->nama_pustakawan;?></td>
                                        <td><?php echo $d->judul;?></td>
                                        <td><?php echo date_indo($d->tgl_pinjam);?></td>
                                        <td><?php echo date_indo($d->tgl_kembali);?></td>
                                        <td><?php echo $d->status_kembali;?></td>
                                    </tr>
                                    <?php $no++;} ?>
                                </tbody> 
        <?php }else if ($jenis == "pengguna"){ ?>   
                                <thead>
                                    <tr>
                                        <th style="width: 50px;text-align: center;">No</th>
                                        <th style="width: 200px;text-align: center;">Username</th>
                                        <th style="width: 150px;text-align: center;">Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no=1;
                                        foreach ($data->result() as $d) {           
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $no; ?></td>
                                        <td><?php echo $d->username;?></td>
                                        <td><?php echo $d->level;?></td>
                                    </tr>
                                    <?php $no++;} ?>
                                </tbody> 
        <?php } ?> 
    </table>
</body>
</html>