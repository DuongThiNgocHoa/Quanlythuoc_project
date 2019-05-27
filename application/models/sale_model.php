<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sale_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public	function getPosts()
	{
	 $post= $this->db->get('khuyen_mai');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public function addPost($ma_km,$ngay_bdkm,$ngay_ktkm,$phan_tram,$so_luong_km)
	{    
		
	      $data=array('ma_km'=>$ma_km,"ngay_bdkm"=>$ngay_bdkm,'ngay_ktkm'=>$ngay_ktkm,'phan_tram'=>$phan_tram,'so_luong_km'=>$so_luong_km);
	
	      $this->db->insert('khuyen_mai', $data);
	     return $this->db->insert_id();

		
	}
	public function deleteDataById($ma_km)
	{
		$this->db->where('ma_km', $ma_km);
		return	$this->db->delete('khuyen_mai');
}
// public function editByID($ma_benh)
// 	{
// 		$this->db->select('*');	
// 		$this->db->where('ma_benh', $ma_benh);
// 		$dulieu = $this->db->get('benh');
// 		$dulieu = $dulieu->result_array();
// 		return $dulieu; 
	 
// 	}
// 	public function updateDataById($ma_benh,$ten_benh,$trieu_chung,$mo_ta)
// 	{
// 		$dulieucanupdate = array(
// 			'ma_benh' => $ma_benh,
// 			'ten_benh'=>$ten_benh,
// 			'trieu_chung' => $trieu_chung,
// 			'mo_ta' =>$mo_ta 
// 			);

// 		$this->db->where('ma_benh', $ma_benh);
// 		return $this->db->update('benh', $dulieucanupdate);

// 	}


}

/* End of file sale_model.php */
/* Location: ./application/models/sale_model.php */