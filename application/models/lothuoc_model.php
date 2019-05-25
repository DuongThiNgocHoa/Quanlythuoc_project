<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class lothuoc_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public	function getPosts()
	{
	 $post= $this->db->get('lo_thuoc');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public function addPost($id_lothuoc,$ma_lo_thuoc,$nha_sx,$so_luong,$ngay_sx,$han_sd)
	{    
		
	      $data=array('id_lothuoc'=>$id_lothuoc,
	      	'ma_lo_thuoc'=>$ma_lo_thuoc,
	      	'nha_sx'=>$nha_sx,
	      	'so_luong'=>$so_luong,
	      	'ngay_sx'=>$ngay_sx,
	      	'han_sd'=>$han_sd
	      );
	
	      $this->db->insert('lo_thuoc', $data);
	     return $this->db->insert_id();

		
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
	public function deleteDataById($id_lothuoc)
	{
		$this->db->where('id_lothuoc', $id_lothuoc);
		return	$this->db->delete('lo_thuoc');
}
	

}

/* End of file lothuoc_model.php */
/* Location: ./application/models/lothuoc_model.php */