<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nhathuoc_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public	function getPosts()
	{
	 $post= $this->db->get('nha_thuoc');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public function addPost($id_nhathuoc,$ma_nha_thuoc,$ten_nha_thuoc,$dia_chi_nt,$ma_thuoc)
	{    
		
	      $data=array('id_nhathuoc'=>$id_nhathuoc,
	      	'ma_nha_thuoc'=>$ma_nha_thuoc,
	      	'ten_nha_thuoc'=>$ten_nha_thuoc,
	      	'dia_chi_nt'=>$dia_chi_nt,
	      	'ma_thuoc'=>$ma_thuoc
	      	
	      );
	
	      $this->db->insert('nha_thuoc', $data);
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
	public function deleteDataById($id_nhathuoc)
	{
		$this->db->where('id_nhathuoc', $id_nhathuoc);
		return	$this->db->delete('nha_thuoc');
}
	public	function rand_string( $length ) {
		$chars = "ABCDEFGHIJKZ0123456789";
		$size = strlen( $chars );
		$str = ''; 
		for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
		 }
		return $str;
		}
			


}

/* End of file nhathuoc_model.php */
/* Location: ./application/models/nhathuoc_model.php */