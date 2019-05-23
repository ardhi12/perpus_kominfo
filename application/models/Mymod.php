<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymod extends CI_Model {

	public function get_data($table){ 
		$this->db->select('*');
		$this->db->from($table);		
		$query = $this->db->get(); 
		return $query;
	}

	public function get_data_order($table,$order=null,$desc=null){ 
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by($order,$desc);
		$query = $this->db->get(); 
		return $query;
	}

	public function get_data_order_limit($table,$order=null,$desc=null,$limit){ 
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by($order,$desc);
		$this->db->limit($limit);
		$query = $this->db->get(); 
		return $query;
	}

	public function get_where($table, $where) {
		$query = $this->db->get_where($table, $where);
		return $query;
	}

	public function get_where_order($table,$where,$order=null,$desc=null){ 
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$this->db->order_by($order,$desc);
		$query = $this->db->get(); 
		return $query;
	}

	public function get_where_order_limit($table,$where,$order=null,$desc=null,$limit){ 
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$this->db->order_by($order,$desc);
		$this->db->limit($limit);
		$query = $this->db->get(); 
		return $query;
	}

	public function simpan($table, $data){
        return $this->db->insert($table, $data);        
    }

    public function update($table, $data, $where){
        $this->db->where($where);
        return $this->db->update($table,$data);        
    }

    public function delete($table, $where){
        $this->db->where($where);
        return $this->db->delete($table);        
    }

    public function get_join_where($select,$table1,$table2,$table3,$table4,$table5,$key,$key2,$key3,$key4,$join=null,$where){
		$this->db->select($select);
		$this->db->from($table1);
		$this->db->join($table2, $key, $join);
		$this->db->join($table3, $key2, $join);
		$this->db->join($table4, $key3, $join);
		$this->db->join($table5, $key4, $join);
		$this->db->where($where);
		$query=$this->db->get();
		return $query;
	}

    public function get_join_order($select,$table1,$table2,$key,$join=null,$order=null,$desc=null){
		$this->db->select($select);
		$this->db->from($table1);
		$this->db->join($table2, $key, $join);
		$this->db->order_by($order,$desc);		
		$query=$this->db->get();
		return $query;
	}

	public function get_join_order2($select,$table1,$table2,$table3,$key,$key2,$join=null,$order=null,$desc=null){
		$this->db->select($select);
		$this->db->from($table1);
		$this->db->join($table2, $key, $join);
		$this->db->join($table3, $key2, $join);
		$this->db->order_by($order,$desc);		
		$query=$this->db->get();
		return $query;
	}

	public function get_join_order3($select,$table1,$table2,$table3,$table4,$table5,$key,$key2,$key3,$key4,$join=null,$order=null,$desc=null,$where){
		$this->db->select($select);
		$this->db->from($table1);
		$this->db->join($table2, $key, $join);
		$this->db->join($table3, $key2, $join);
		$this->db->join($table4, $key3, $join);
		$this->db->join($table5, $key4, $join);
		$this->db->order_by($order,$desc);	
		$this->db->where($where);	
		$query=$this->db->get();
		return $query;
	}

	public function trans_grafik(){
	$tahun = date('Y');
    $grf=$this->db->query("SELECT * FROM 
                                         (SELECT COUNT(tgl_trans) AS jan FROM transaksi WHERE tgl_trans LIKE '$tahun-01-%'  ) AS T1,
                                         (SELECT COUNT(tgl_trans) AS feb FROM transaksi WHERE tgl_trans LIKE '$tahun-02-%'  ) AS T2,
                                         (SELECT COUNT(tgl_trans) AS mar FROM transaksi WHERE tgl_trans LIKE '$tahun-03-%'  ) AS T3,
                                         (SELECT COUNT(tgl_trans) AS apr FROM transaksi WHERE tgl_trans LIKE '$tahun-04-%'  ) AS T4,
                                         (SELECT COUNT(tgl_trans) AS mei FROM transaksi WHERE tgl_trans LIKE '$tahun-05-%'  ) AS T5,
                                         (SELECT COUNT(tgl_trans) AS jun FROM transaksi WHERE tgl_trans LIKE '$tahun-06-%'  ) AS T6,
                                         (SELECT COUNT(tgl_trans) AS jul FROM transaksi WHERE tgl_trans LIKE '$tahun-07-%'  ) AS T7,
                                         (SELECT COUNT(tgl_trans) AS agu FROM transaksi WHERE tgl_trans LIKE '$tahun-08-%'  ) AS T8,
                                         (SELECT COUNT(tgl_trans) AS sep FROM transaksi WHERE tgl_trans LIKE '$tahun-09-%' ) AS T9,
                                         (SELECT COUNT(tgl_trans) AS okt FROM transaksi WHERE tgl_trans LIKE '$tahun-10-%'  ) AS T10,
                                         (SELECT COUNT(tgl_trans) AS nov FROM transaksi WHERE tgl_trans LIKE '$tahun-11-%'  ) AS T11,
                                         (SELECT COUNT(tgl_trans) AS des FROM transaksi WHERE tgl_trans LIKE '$tahun-12-%'  ) AS T12")->row_array();
    $data       = array('jan'=>$grf['jan'],
                        'feb'=>$grf['feb'],
                        'mar'=>$grf['mar'],
                        'apr'=>$grf['apr'],
                        'mei'=>$grf['mei'],
                        'jun'=>$grf['jun'],
                        'jul'=>$grf['jul'],
                        'agu'=>$grf['agu'],
                        'sep'=>$grf['sep'],
                        'okt'=>$grf['okt'],
                        'nov'=>$grf['nov'],
                        'des'=>$grf['des'],
                        'update_terakhir'=>date('Y-m-d H:i:s'));                                     
    $this->db->update('grafik',$data);    
    return $grf;
    }
    

}
