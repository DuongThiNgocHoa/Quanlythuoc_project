<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('home_model');
		// count benh nhan
		$posts1 = $this->home_model->getPosts1();
		$giatri1 = count($posts1);
         $giatri1 = array('count1'=>$giatri1);
         // count bac si
         $posts2 = $this->home_model->getPosts2();
		$giatri2 = count($posts2);
         $giatri2 = array('count2'=>$giatri2);
         //count csyt
         $posts3 = $this->home_model->getPosts3();
		$giatri3 = count($posts3);
         $giatri3 = array('count3'=>$giatri3);
         //cout khoa
         $posts4 = $this->home_model->getPosts4();
		$giatri4 = count($posts4);
         $giatri4 = array('count4'=>$giatri4);
         // count bo mon
         $posts5 = $this->home_model->getPosts5();
		$giatri5 = count($posts5);
         $giatri5 = array('count5'=>$giatri5);
         //count nha thuoc
         $posts6 = $this->home_model->getPosts6();
		$giatri6 = count($posts6);
         $giatri6 = array('count6'=>$giatri6);
         $dulieu=array(
         	'cnt1'=>$giatri1,
         	'cnt2'=>$giatri2,
         	'cnt3'=>$giatri3,
         	'cnt4'=>$giatri4,
         	'cnt5'=>$giatri5,
         	'cnt6'=>$giatri6
         );
		
		$this->load->view('home_view', $dulieu);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */