<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class benhnhan_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public	function getPosts()
	{
	 $post= $this->db->get('benh_nhan');
	 // $this->db->order_by('ma_benh', 'desc');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public function addPost($ma_benh_nhan,$anh_bn,$ho_ten,$gioi_tinh,$ngay_sinh,$dia_chi,$sdt,$cmt,$ma_bhyt,$ma_benh)
	{    
		
	      $data=array('ma_benh_nhan'=>$ma_benh_nhan,
	      	"anh_bn"=>$anh_bn,
	      	'ho_ten'=>$ho_ten,
	      	'gioi_tinh'=>$gioi_tinh,
	      	'ngay_sinh'=>$ngay_sinh,
	      	'dia_chi'=>$dia_chi,
	      	'sdt'=>$sdt,
	      	'cmt'=>$cmt,
	      	'ma_bhyt'=>$ma_bhyt,
	      	'ma_benh'=>$ma_benh

	  );
	      $this->db->insert('benh_nhan', $data);
	      $this->db->order_by('ma_benh_nhan', 'desc');

	     return $this->db->insert_id();
	     

		
	}
	public function deleteDataById($ma_benh_nhan)
	{
		$this->db->where('ma_benh_nhan', $ma_benh_nhan);
		return	$this->db->delete('benh_nhan');
}
// public function editByID()
// 	{
// 		$this->db->select('*');	
// 		// $this->db->where('ma_benh', $ma_benh);
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

/* End of file benhnhan_model.php */
/* Location: ./application/models/benhnhan_model.php */