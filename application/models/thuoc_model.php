<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class thuoc_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	 public	function getPosts()
	{
	 $post= $this->db->get('thuoc');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public function addPost($ma_thuoc,$ten_thuoc,$ma_lo_thuoc,$hoat_chat,$ham_luong,$chi_dinh,$tac_dung_phu,$luu_y)
	{    
		
	      $data=array('ma_thuoc'=>$ma_thuoc,
	      	'ten_thuoc'=>$ten_thuoc,
	      	'ma_lo_thuoc'=>$ma_lo_thuoc,
	      	'hoat_chat'=>$hoat_chat,
	      	'ham_luong'=>$ham_luong,
	      	'chi_dinh'=>$chi_dinh,
	      	'tac_dung_phu'=>$tac_dung_phu,
	      	'luu_y'=>$luu_y

	      );
	
	      $this->db->insert('thuoc', $data);
	     return $this->db->insert_id();

		
	}
	public function loadLoThuoc()
		{
			$this->db->select('*');
			$dl=$this->db->get('lo_thuoc');
			$dl= $dl->result_array();
			return $dl;
		}
	
	// public function editByID($i)
	// {
	// 	$this->db->select('*');	
	// 	$this->db->from('demo_2');
	// 	$this->db->where('id', $i);
	// 	$dulieu = $this->db->get();
	// 	$dulieu = $dulieu->result();
	// 	return $dulieu; 
		
	 
	// }
	// public function updateDataById($id,$data)
	// {
		
	// 	$this->db->where('id', $id);
	// 	$this->db->update('demo_2', $data);

	// }
	public function deleteDataById($id)
	{
		$this->db->where('ma_thuoc', $id);
		return	$this->db->delete('thuoc');
}

}

/* End of file thuoc_model.php */
/* Location: ./application/models/thuoc_model.php */