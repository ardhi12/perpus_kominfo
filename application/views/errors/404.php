<?php
if ($this->session->userdata('status_login')!="Sedang Login") {
	echo "<script>window.location = '".site_url()."';</script>";	
}else{
	echo "<script>window.location = '".site_url('beranda')."';</script>";
}	
?>