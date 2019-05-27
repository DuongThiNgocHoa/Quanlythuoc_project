<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nhathuoc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('nhathuoc_model');
		$posts = $this->nhathuoc_model->getPosts();
        // $posts= array('add'=>$posts);
        $my_string = $this->nhathuoc_model->rand_string( 6 );
        $my_string = array('ma_nha_thuoc'=>$my_string);
        $dulieu = array(
			'add' => $posts,
			'string' => $my_string
		 );
         
  //       echo "<pre>";
		// print_r($dulieu);
		// echo "</pre>";
		$this->load->view('nhathuoc_view', $dulieu);
	 }
		
	public function delete($id_nhathuoc)
	{   
		  
		$this->load->model('nhathuoc_model');
		if($this->nhathuoc_model->deleteDataById($id_nhathuoc))
		{
			redirect('nhathuoc/','refresh');
		}
		else
		{
			echo "chua xoa duoc"; 

		}
 	}
 	// public function editSim($idlayve)
	// {   

	// 	$this->load->model('bhyt_model');
	// 	$ketqua = $this->bhyt_model->editByID($idlayve);	
	// 	$ketqua = array('mangketqua' => $ketqua)	;

	// 	// truyen ketqua nay vao view edit de sửa dữ liệu 
	// 	$this->load->view('update_view', $ketqua, FALSE);
	// }

	// public function updateData()
	// {
	// 	// lay du lieu tu view ve 

	// 	 $id = $this->input->post('id');
	// 	 $data= array(
	// 	'up_title' => $this->input->post('title'),
	// 	'up_des' => $this->input->post('des')
 //           );
		
	// 	$this->load->model('demo_model');
        
	// 	// su dung ham trong model giao tiep voi du lieu voi gia tri nhan dc tu view
	// 	if($this->demo_model->updateDataById($id,$data))
	// 	{
	// 		 echo " Insert Thanh cong";
			  
	// 	}
	// 	else {
	// 	 	echo " khong thanh cong";
	// 	}


	//}
	public function save()
	{   
		$data1 = $this->input->post('id_nhathuoc');
		$data2 = $this->input->post('ma_nha_thuoc');
		$data3 = $this->input->post('ten_nha_thuoc');
		$data4 = $this->input->post('dia_chi_nt');
		$data5 = $this->input->post('ma_thuoc');
	
		
		// $today = date('Y-m-d H:i:s');

		$this->load->model('nhathuoc_model');
		
        if ($this->nhathuoc_model->addPost($data1,$data2,$data3,$data4,$data5)) 
        {
        	redirect('nhathuoc/','refresh');
        	
        }
        else {
        	echo "Failed";
        }
        
        // return redirect('demo2','refresh');

		
	}
}

/* End of file nhathuoc.php */
/* Location: ./application/controllers/nhathuoc.php */