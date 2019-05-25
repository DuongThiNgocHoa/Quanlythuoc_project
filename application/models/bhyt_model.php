<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bhyt_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
   public	function getPosts()
	{
	 $post= $this->db->get('bhyt');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public function addPost($so_the_bhyt,$ngay_bat_dau,$ngay_ket_thuc,$phan_tram)
	{    
		
	      $data=array('so_the_bhyt'=>$so_the_bhyt,
	      	'ngay_bat_dau'=>$ngay_bat_dau,
	      	'ngay_ket_thuc'=>$ngay_ket_thuc,
	      	'phan_tram'=>$phan_tram);
	
	      $this->db->insert('bhyt', $data);
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
	public function deleteDataById($id)
	{
		$this->db->where('ma_bhyt', $id);
		return	$this->db->delete('bhyt');
}
}


/* End of file demo_model.php */
/* Location: ./application/models/demo_model.php */