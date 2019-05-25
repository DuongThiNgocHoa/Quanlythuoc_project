<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class csyt_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public	function getPosts()
	{
	 $post= $this->db->get('csyt');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public function addPost($ma_csyt,$ten_csyt,$loai_csyt,$ten_khoa,$dia_chi)
	{    
		
	      $data=array('ma_csyt'=>$ma_csyt,"ten_csyt"=>$ten_csyt,'loai_csyt'=>$loai_csyt,'ten_khoa'=>$ten_khoa,'dia_chi'=>$dia_chi
	  );
	      $this->db->insert('csyt', $data);
	     return $this->db->insert_id();

		
	}
	public function deleteDataById($ma_csyt)
	{
		$this->db->where('ma_csyt', $ma_csyt);
		return	$this->db->delete('csyt');
}
	public function loadKhoa()
		{
			$this->db->select('*');
			$dl=$this->db->get('khoa');
			$dl= $dl->result_array();
			return $dl;
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

/* End of file csyt_model.php */
/* Location: ./application/models/csyt_model.php */