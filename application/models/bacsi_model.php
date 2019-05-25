<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bacsi_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public	function getPosts()
	{
	 $post= $this->db->get('bac_si');
	 // $this->db->order_by('ma_benh', 'desc');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public function addPost($id_bs,$ma_bac_si,$ten_bs,$anh_bs,$sdt_bs,$email,$chuyen_nganh,$ngay_bdct,$ngay_ktct,$ma_csyt)
	{    
		
	      $data=array('id_bs'=>$id_bs,
	      	"ma_bac_si"=>$ma_bac_si,
	      	'ten_bs'=>$ten_bs,
	      	'anh_bs'=>$anh_bs,
	      	'sdt_bs'=>$sdt_bs,
	      	'email'=>$email,
	      	'chuyen_nganh'=>$chuyen_nganh,
	      	'ngay_bdct'=>$ngay_bdct,
	      	'ngay_ktct'=>$ngay_ktct,
	      	'ma_csyt'=>$ma_csyt

	  );
	      $this->db->insert('bac_si', $data);
	      $this->db->order_by('bac_si', 'desc');

	     return $this->db->insert_id();
	     

		
	}
	public function deleteDataById($id_bs)
	{
		$this->db->where('id_bs', $id_bs);
		return	$this->db->delete('bac_si');
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

/* End of file bacsi_model.php */
/* Location: ./application/models/bacsi_model.php */