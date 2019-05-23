<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycon extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('status_login')!="Sedang Login") {
			echo "<script>window.location = '".site_url('error_page')."';</script>";
		}		
	}
	
	public function beranda()
	{
		$data = [			
			'active1' => 'active',
			'active2' => '',
			'active3' => '',			
			'active4' => '',			
			'active5' => '',			
			'active6' => '',			
			'content' => 'menu/beranda',
			'anggota' => $this->Mymod->get_data('anggota'),
			'pustakawan' => $this->Mymod->get_data('pustakawan'),
			'buku' => $this->Mymod->get_data('buku'),
			'transaksi' => $this->Mymod->get_data('transaksi'),
			'grafik' => $this->Mymod->trans_grafik()
		];		
		$this->load->view('template/blank',$data);		
	}

	public function anggota()
	{		
		$data = [			
			'active1' => '',
			'active2' => 'active',
			'active3' => '',	
			'active4' => '',			
			'active5' => '',			
			'active6' => '',					
			'content' => 'menu/anggota',
			'anggota' => $this->Mymod->get_data_order('anggota','nama_anggota','asc'),
			'pustakawan' => $this->Mymod->get_data('pustakawan'),
			'buku' => $this->Mymod->get_data('buku')
		];		
		$this->load->view('template/blank',$data);
	}

	public function pustakawan()
	{		
		$data = [			
			'active1'	 => '',
			'active2'	 => '',
			'active3'	 => 'active',	
			'active4' 	 => '',			
			'active5'	 => '',			
			'active6'	 => '',					
			'content' 	 => 'menu/pustakawan',
			'pustakawan' => $this->Mymod->get_data_order('pustakawan','nama_pustakawan','asc'),
			'anggota' => $this->Mymod->get_data('anggota'),
			'buku' => $this->Mymod->get_data('buku')
		];		
		$this->load->view('template/blank',$data);
	}

	public function buku()
	{		
		$data = [			
			'active1'	 => '',
			'active2'	 => '',
			'active3'	 => '',	
			'active4'	 => 'active',			
			'active5'	 => '',			
			'active6'	 => '',					
			'content' 	 => 'menu/buku',
			'buku' 		 => $this->Mymod->get_data_order('buku','judul','asc'),
			'anggota' => $this->Mymod->get_data('anggota'),
			'pustakawan' => $this->Mymod->get_data('pustakawan')
		];		
		$this->load->view('template/blank',$data);
	}

	public function transaksi()
	{		
		$data = [			
			'active1'	 => '',
			'active2'	 => '',
			'active3'	 => '',	
			'active4'	 => '',			
			'active5'	 => 'active',			
			'active6'	 => '',					
			'content' 	 => 'menu/transaksi',
			'transaksi'	 => $this->Mymod->get_join_order2('*','transaksi a','anggota b','pustakawan c','a.id_anggota=b.id_anggota','a.id_pustakawan=c.id_pustakawan','inner','a.tgl_trans','desc'),
			'anggota' => $this->Mymod->get_data('anggota'),
			'pustakawan' => $this->Mymod->get_data('pustakawan'),
			'buku' => $this->Mymod->get_data('buku')
		];		
		$this->load->view('template/blank',$data);
	}

	public function pengguna()
	{		
		$data = [			
			'active1' => '',
			'active2' => '',
			'active3' => '',	
			'active4' => '',			
			'active5' => '',			
			'active6' => 'active',					
			'content' => 'menu/pengguna',
			'pengguna'=> $this->Mymod->get_where_order('users','level in ("Pustakawan","Anggota")','id_user','asc'),
			'anggota' => $this->Mymod->get_data('anggota'),
			'pustakawan' => $this->Mymod->get_data('pustakawan'),
			'buku' => $this->Mymod->get_data('buku')
		];		
		$this->load->view('template/blank',$data);
	}

	public function det_anggota()
	{      
		$id_anggota = $this->input->post('id_anggota');
		$where 		= array('id_anggota' => $id_anggota);
        $data  		= $this->Mymod->get_where('anggota',$where);        
        //jika data ada, maka
        if ($data->num_rows() > 0) {        	
            $result = $data->result();            
        }else{
            $result = false;
        } 
        echo json_encode($result);  
    }

    public function det_pustakawan()
	{      
		$id_pustakawan 	= $this->input->post('id_pustakawan');
		$where 			= array('id_pustakawan' => $id_pustakawan);
        $data  			= $this->Mymod->get_where('pustakawan',$where);        
        //jika data ada, maka
        if ($data->num_rows() > 0) {        	
            $result = $data->result();            
        }else{
            $result = false;
        } 
        echo json_encode($result);  
    }

    public function det_buku()
	{      
		$id_buku	= $this->input->post('id_buku');
		$where 		= array('id_buku' => $id_buku);
        $data  		= $this->Mymod->get_where('buku',$where);        
        //jika data ada, maka
        if ($data->num_rows() > 0) {        	
            $result = $data->result();            
        }else{
            $result = false;
        } 
        echo json_encode($result);  
    }

    public function det_transaksi()
	{      
		$id_transaksi	= $this->input->post('id_transaksi');
		$where 			= array('a.id_transaksi' => $id_transaksi);
        $data  			= $this->Mymod->get_join_where('*','transaksi a','detail_transaksi b','anggota c','pustakawan d','buku e','a.id_transaksi = b.id_transaksi','a.id_anggota = c.id_anggota','a.id_pustakawan = d.id_pustakawan','b.id_buku = e.id_buku','inner',$where);        
        //jika data ada, maka
        if ($data->num_rows() > 0) {        	
            $result = $data->result();            
        }else{
            $result = false;
        } 
        echo json_encode($result);  
    }

    public function det_pengguna()
	{      
		$id_user	= $this->input->post('id_user');
		$where 		= array('id_user' => $id_user);
        $data  		= $this->Mymod->get_where('users',$where);        
        //jika data ada, maka
        if ($data->num_rows() > 0) {        	
            $result = $data->result();            
        }else{
            $result = false;
        } 
        echo json_encode($result);  
    }

    public function add()
	{
		if (isset($_POST['simpan_anggota'])) {
			$nama_anggota   = $this->input->post('nama_anggota');
			$jk 			= $this->input->post('jk');
			$alamat 		= $this->input->post('alamat');			
			$data 	   = array(	'nama_anggota' => $nama_anggota, 
								'jk' => $jk,
								'alamat' => $alamat,
							);
			$eksekusi = $this->Mymod->simpan('anggota',$data);
			if ($eksekusi) {
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Anggota berhasil ditambahkan</div>');
			}else{
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Anggota gagal ditambahkan, silahkan coba kembali.</div>');
			}
			redirect('anggota','refresh');
		}

		else if (isset($_POST['simpan_pustakawan'])) {
			$nama_pustakawan = $this->input->post('nama_pustakawan');
			$jk 			 = $this->input->post('jk');
			$alamat 		 = $this->input->post('alamat');			
			$data 	   = array(	'nama_pustakawan' => $nama_pustakawan, 
								'jk' => $jk,
								'alamat' => $alamat,
							);
			$eksekusi = $this->Mymod->simpan('pustakawan',$data);
			if ($eksekusi) {
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Pustakawan berhasil ditambahkan</div>');
			}else{
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Pustakawan gagal ditambahkan, silahkan coba kembali.</div>');
			}
			redirect('pustakawan','refresh');
		}

		else if (isset($_POST['simpan_buku'])) {
			$judul 			= $this->input->post('judul');
			$jenis_buku		= $this->input->post('jenis_buku');
			$penerbit 		= $this->input->post('penerbit');			
			$tahun_terbit	= $this->input->post('tahun_terbit');			
			$jumlah			= $this->input->post('jumlah');			
			$data 	   = array(	'judul' => $judul, 
								'jenis_buku' => $jenis_buku,
								'penerbit' => $penerbit,
								'tahun_terbit' => $tahun_terbit,
								'jumlah' => $jumlah
							);
			$eksekusi = $this->Mymod->simpan('buku',$data);
			if ($eksekusi) {
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Buku berhasil ditambahkan</div>');
			}else{
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Buku gagal ditambahkan, silahkan coba kembali.</div>');
			}
			redirect('buku','refresh');
		}

		else if (isset($_POST['simpan_transaksi'])) {
			$id_anggota		= $this->input->post('id_anggota');
			$id_pustakawan	= $this->input->post('id_pustakawan');
			$id_buku		= $this->input->post('id_buku');
			$id_transaksi = $this->Mymod->get_data_order('transaksi','id_transaksi','desc')->row()->id_transaksi + 1; //row terakhir ditambah 1
			$where = array('id_buku' => $id_buku );
			$jml_buku = $this->Mymod->get_where('buku',$where)->row()->jumlah - 1; //row terakhir dikurang 1
			$data 	   = array(	'id_anggota' => $id_anggota, 
								'id_pustakawan' => $id_pustakawan,
								'tgl_trans' => date("Y-m-d H:i:s")
							);
			$data2 	   = array(	'id_transaksi' => $id_transaksi, 
								'id_buku' => $id_buku,
								'tgl_pinjam' => date("Y-m-d H:i:s")
							);
			$data3 	   = array(	'jumlah' => $jml_buku );
			$eksekusi  = $this->Mymod->simpan('transaksi',$data);
			$eksekusi2 = $this->Mymod->simpan('detail_transaksi',$data2);
			$eksekusi3 = $this->Mymod->update('buku',$data3,$where);
			if ($eksekusi AND $eksekusi2 AND $eksekusi3) {
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Transaksi berhasil ditambahkan</div>');
			}else{
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Transaksi gagal ditambahkan, silahkan coba kembali.</div>');
			}
			redirect('transaksi','refresh');
		}

		else if (isset($_POST['simpan_pengguna'])) {
			$username 	= $this->input->post('username');
			$password	= $this->input->post('password');
			$level 		= $this->input->post('level');			
			$data 	   = array(	'username' => $username, 
								'password' => password_hash($password, PASSWORD_BCRYPT),
								'level' => $level,
							);
			$eksekusi = $this->Mymod->simpan('users',$data);
			if ($eksekusi) {
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Pengguna berhasil ditambahkan</div>');
			}else{
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Pengguna gagal ditambahkan, silahkan coba kembali.</div>');
			}
			redirect('pengguna','refresh');
		}
	}

	public function edit()
	{
		if (isset($_POST['edit_anggota'])) {
			$id_anggota   	= $this->input->post('id_anggota');
			$nama_anggota   = $this->input->post('nama_anggota');
			$jk 			= $this->input->post('jk');
			$alamat 		= $this->input->post('alamat');			
			$where 			= array('id_anggota' => $id_anggota );
			$data 	   = array(	'nama_anggota' => $nama_anggota, 
								'jk' => $jk,
								'alamat' => $alamat,
							);
			$eksekusi = $this->Mymod->update('anggota',$data,$where);
			if ($eksekusi) {
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Anggota berhasil diedit</div>');
			}else{
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Anggota gagal diedit, silahkan coba kembali.</div>');
			}
			redirect('anggota','refresh');
		}

		else if (isset($_POST['edit_pustakawan'])) {
			$id_pustakawan   = $this->input->post('id_pustakawan');
			$nama_pustakawan = $this->input->post('nama_pustakawan');
			$jk 			 = $this->input->post('jk');
			$alamat 		 = $this->input->post('alamat');			
			$where 			 = array('id_pustakawan' => $id_pustakawan );
			$data 	   = array(	'nama_pustakawan' => $nama_pustakawan, 
								'jk' => $jk,
								'alamat' => $alamat,
							);
			$eksekusi = $this->Mymod->update('pustakawan',$data,$where);
			if ($eksekusi) {
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Pustakawan berhasil diedit</div>');
			}else{
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Pustakawan gagal diedit, silahkan coba kembali.</div>');
			}
			redirect('pustakawan','refresh');
		}

		else if (isset($_POST['edit_buku'])) {
			$id_buku		= $this->input->post('id_buku');
			$judul			= $this->input->post('judul');
			$jenis_buku 	= $this->input->post('jenis_buku');
			$penerbit		= $this->input->post('penerbit');			
			$tahun_terbit	= $this->input->post('tahun_terbit');			
			$jumlah			= $this->input->post('jumlah');			
			$where 			 = array('id_buku' => $id_buku );
			$data 	   = array(	'judul' => $judul, 
								'jenis_buku' => $jenis_buku,
								'penerbit' => $penerbit,
								'tahun_terbit' => $tahun_terbit,
								'jumlah' => $jumlah
							);
			$eksekusi = $this->Mymod->update('buku',$data,$where);
			if ($eksekusi) {
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Buku berhasil diedit</div>');
			}else{
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Buku gagal diedit, silahkan coba kembali.</div>');
			}
			redirect('buku','refresh');
		}

		else if (isset($_POST['edit_pengguna'])) {
			$id_user		= $this->input->post('id_user');
			$username   	= $this->input->post('username');
			$password 		= $this->input->post('password');
			$level 			= $this->input->post('level');
			$where 			= array('id_user' => $id_user );
			$data 	   = array(	'username' => $username, 
								'password' => password_hash($password, PASSWORD_BCRYPT),
								'level' => $level,
							);
			$eksekusi = $this->Mymod->update('users',$data,$where);
			if ($eksekusi) {
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Pengguna berhasil diedit</div>');
			}else{
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Pengguna gagal diedit, silahkan coba kembali.</div>');
			}
			redirect('pengguna','refresh');
		}

		else if (isset($_POST['edit_transaksi'])) {
			$id_transaksi	= $this->input->post('id_transaksi');
			$id_buku		= $this->input->post('id_buku');
			$tgl_kembali   	= $this->input->post('tgl_kembali');
			$status_kembali	= $this->input->post('status_kembali');
			$where 			= array('id_transaksi' => $id_transaksi );
			$where2			= array('id_buku' => $id_buku );
			$jml_buku 		= $this->Mymod->get_where('buku',$where2)->row()->jumlah + 1; //row terakhir dikurang 1
			$data 	   = array(	'tgl_kembali' => $tgl_kembali, 
								'status_kembali' => $status_kembali
							);
			$data2 	   = array(	'jumlah' => $jml_buku );
			$eksekusi  = $this->Mymod->update('detail_transaksi',$data,$where);
			$eksekusi2 = $this->Mymod->update('buku',$data2,$where2);
			if ($eksekusi AND $eksekusi2) {
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Transaksi berhasil diedit</div>');
			}else{
				$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Transaksi gagal diedit, silahkan coba kembali.</div>');
			}
			redirect('transaksi','refresh');
		}
	}

	public function hapus()
	{
		if (isset($_POST['hapus_anggota'])) {
			$id_anggota	= $this->input->post('id_anggota');
			$where     	= array('id_anggota' => $id_anggota );
			$eksekusi  	= $this->Mymod->delete('anggota',$where);
		    if ($eksekusi) {
					$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Anggota berhasil dihapus</div>');
				}else{
					$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Anggota gagal dihapus</div>');
				}
			echo "<script>window.history.back()</script>"; 
		}

		else if (isset($_POST['hapus_pustakawan'])) {
			$id_pustakawan	= $this->input->post('id_pustakawan');
			$where     		= array('id_pustakawan' => $id_pustakawan );
			$eksekusi  		= $this->Mymod->delete('pustakawan',$where);
		    if ($eksekusi) {
					$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Pustakawan berhasil dihapus</div>');
				}else{
					$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Pustakawan gagal dihapus</div>');
				}
			echo "<script>window.history.back()</script>"; 
		}

		else if (isset($_POST['hapus_buku'])) {
			$id_buku	= $this->input->post('id_buku');
			$where     		= array('id_buku' => $id_buku );
			$eksekusi  		= $this->Mymod->delete('buku',$where);
		    if ($eksekusi) {
					$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Buku berhasil dihapus</div>');
				}else{
					$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Buku gagal dihapus</div>');
				}
			echo "<script>window.history.back()</script>"; 
		}

		else if (isset($_POST['hapus_transaksi'])) {
			$id_transaksi	= $this->input->post('id_transaksi');
			$where     		= array('id_transaksi' => $id_transaksi );
			$eksekusi  		= $this->Mymod->delete('transaksi',$where);
		    if ($eksekusi) {
					$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Transaksi berhasil dihapus</div>');
				}else{
					$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Transaksi gagal dihapus</div>');
				}
			echo "<script>window.history.back()</script>"; 
		}

		else if (isset($_POST['hapus_pengguna'])) {
			$id_user		= $this->input->post('id_user');
			$where     		= array('id_user' => $id_user );
			$eksekusi  		= $this->Mymod->delete('users',$where);
		    if ($eksekusi) {
					$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-success alert-dismissible" role="alert">Pengguna berhasil dihapus</div>');
				}else{
					$this->session->set_flashdata('notifikasi', '<div id="notif" class="alert alert-danger alert-dismissible" role="alert">Pengguna gagal dihapus</div>');
				}
			echo "<script>window.history.back()</script>"; 
		}
	}

	public function laporan()
	{		
		if (isset($_POST['cetak'])) {
			$pilih_laporan = 'cetak';
		}
		if (isset($_POST['excel'])) {
			$pilih_laporan = 'excel';
		}
		$tahun_laporan  = $this->input->post('tahun_laporan');
		$jenis_laporan  = $this->input->post('jenis_laporan');
		if ($jenis_laporan == 'anggota') {
			$query = $this->Mymod->get_data_order('anggota','nama_anggota','asc');
			$jenis = 'anggota';	
		}else if ($jenis_laporan == 'pustakawan') {
			$query = $this->Mymod->get_data_order('pustakawan','nama_pustakawan','asc');
			$jenis = 'pustakawan';	
		}else if ($jenis_laporan == 'buku') {
			$query = $this->Mymod->get_data_order('buku','judul','asc');
			$jenis = 'buku';	
		}else if ($jenis_laporan == 'pengguna') {
			$query = $this->Mymod->get_where_order('users','level in ("Pustakawan","Anggota")','id_user','asc');
			$jenis = 'pengguna';	
		}else if ($jenis_laporan == 'transaksi') {			
			$where = array('YEAR(tgl_trans)' => $tahun_laporan );
			$query = $this->Mymod->get_join_order3('*','transaksi a','detail_transaksi b','anggota c','pustakawan d','buku e','a.id_transaksi = b.id_transaksi','a.id_anggota = c.id_anggota','a.id_pustakawan = d.id_pustakawan','b.id_buku = e.id_buku','inner','a.tgl_trans','desc',$where);
			$jenis = 'transaksi';		
		}		
		$data = [									
			'tahun_laporan' => $tahun_laporan,
			'pilih_laporan' => $pilih_laporan,
			'jenis' 		=> $jenis,
			'data' 			=> $query
		];		
		$this->load->view('export/laporan',$data);
	}


}
