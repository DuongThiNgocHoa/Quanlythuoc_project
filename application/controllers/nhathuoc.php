<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nhathuoc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('nhathuoc_view');
	}

}

/* End of file nhathuoc.php */
/* Location: ./application/controllers/nhathuoc.php */