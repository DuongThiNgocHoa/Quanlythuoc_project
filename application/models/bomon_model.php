<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bomon_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public	function getPosts()
	{
	 $post= $this->db->get('bo_mon');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public function addPost($ma_bo_mon,$ten_bo_mon,$noi_dung_dieu_tri)
	{    
		
	      $data=array('ma_bo_mon'=>$ma_bo_mon,"ten_bo_mon"=>$ten_bo_mon,'noi_dung_dieu_tri'=>$noi_dung_dieu_tri
	  );
	      $this->db->insert('bo_mon', $data);
	     return $this->db->insert_id();

		
	}
	public function deleteDataById($ma_bo_mon)
	{
		$this->db->where('ma_bo_mon', $ma_bo_mon);
		return	$this->db->delete('bo_mon');
}
// public function editByID($ma_bo_mon)
// 	{
// 		$this->db->select('*');	
// 		$this->db->where('ma_bo_mon', $ma_bo_mon);
// 		$dulieu = $this->db->get('bo_mon');
// 		$dulieu = $dulieu->result_array();
// 		return $dulieu; 
	 
// 	}
// 	public function updateDataById($ma_bo_mon,$ten_bo_mon,$noi_dung_dieu_tri)
// 	{
// 		$dulieucanupdate = array(
// 			'ma_bo_mon' => $ma_bo_mon,
// 			'ten_bo_mon'=>$ten_bo_monh,
// 			'noi_dung_dieu_tri' => $noi_dung_dieu_tri
			
// 			);

// 		$this->db->where('ma_bo_mon', $ma_bo_mon);
// 		return $this->db->update('bo_mon', $dulieucanupdate);

// 	}

}

/* End of file bomon_model.php */
/* Location: ./application/models/bomon_model.php */