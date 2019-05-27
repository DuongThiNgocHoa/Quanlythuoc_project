<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
		public	function getPosts1()
	{
	 $post= $this->db->get('benh_nhan');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public	function getPosts2()
	{
	 $post= $this->db->get('bac_si');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public	function getPosts3()
	{
	 $post= $this->db->get('csyt');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public	function getPosts4()
	{
	 $post= $this->db->get('khoa');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public	function getPosts5()
	{
	 $post= $this->db->get('bo_mon');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	public	function getPosts6()
	{
	 $post= $this->db->get('nha_thuoc');
	 if ($post->num_rows()>0) {
	 	return $post->result();
	 	
	 }
	}
	
}

/* End of file home_model.php */
/* Location: ./application/models/home_model.php */