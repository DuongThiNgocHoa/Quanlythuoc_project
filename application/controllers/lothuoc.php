<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class lothuoc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('lothuoc_model');
		$posts = $this->lothuoc_model->getPosts();
        $posts= array('add'=>$posts);
		$this->load->view('lothuoc_view', $posts);
	}
	public function delete($id_lothuoc)
	{   
		  
		$this->load->model('lothuoc_model');
		if($this->lothuoc_model->deleteDataById($id_lothuoc))
		{
			redirect('lothuoc/','refresh');
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
		$data1 = $this->input->post('id_lothuoc');
		$data2 = $this->input->post('ma_lo_thuoc');
		$data3 = $this->input->post('ngay_sx');
		$data4 = $this->input->post('so_luong');
		$data5 = $this->input->post('ngay_sx');
		$data6 = $this->input->post('han_sd');
		
		// $today = date('Y-m-d H:i:s');

		$this->load->model('lothuoc_model');
		
        if ($this->lothuoc_model->addPost($data1,$data2,$data3,$data4,$data5,$data6)) 
        {
        	redirect('lothuoc/','refresh');
        	
        }
        else {
        	echo "Failed";
        }
        
        // return redirect('demo2','refresh');

		
	}

}

/* End of file lothuoc.php */
/* Location: ./application/controllers/lothuoc.php */