<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class benh_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public	function getPosts()
	{
	 $post= $this->db->get('benh');
	 // $this->db->order_by('ma_benh', 'desc');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public function addPost($ten_benh,$trieu_chung,$mo_ta)
	{    
		
	      $data=array('ten_benh'=>$ten_benh,"trieu_chung"=>$trieu_chung,'mo_ta'=>$mo_ta
	  );
	      $this->db->insert('benh', $data);
	      $this->db->order_by('ma_benh', 'desc');

	     return $this->db->insert_id();
	     

		
	}
	public function deleteDataById($ma_benh)
	{
		$this->db->where('ma_benh', $ma_benh);
		return	$this->db->delete('benh');
}
public function editByID()
	{
		$this->db->select('*');	
		// $this->db->where('ma_benh', $ma_benh);
		$dulieu = $this->db->get('benh');
		$dulieu = $dulieu->result_array();
		return $dulieu; 

	 
	}
	public function updateDataById($ma_benh,$ten_benh,$trieu_chung,$mo_ta)
	{
		$dulieucanupdate = array(
			'ma_benh' => $ma_benh,
			'ten_benh'=>$ten_benh,
			'trieu_chung' => $trieu_chung,
			'mo_ta' =>$mo_ta 
			);

		$this->db->where('ma_benh', $ma_benh);
		return $this->db->update('benh', $dulieucanupdate);

	}

}

/* End of file benh_model.php */
/* Location: ./application/models/benh_model.php */