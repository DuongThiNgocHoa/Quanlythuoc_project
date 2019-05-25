<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bomon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('bomon_model');
		$posts = $this->bomon_model->getPosts();
        $posts= array('add'=>$posts);
		$this->load->view('bomon_view', $posts);
	}
	public function delete($ma_bo_mon)
	{   
		  
		$this->load->model('bomon_model');
		if($this->bomon_model->deleteDataById($ma_bo_mon))
		{
			// $this->load->view('save1_view');
			redirect('bomon/', 'refresh');
			
		}
		else
		{
			echo "chua xoa duoc"; 

		}
 	}

 	public function save()
	{   
		 $data1 = $this->input->post('ma_bo_mon');
		$data2 = $this->input->post('ten_bo_mon');
		$data3 = $this->input->post('noi_dung_dieu_tri');

		// $today = date('Y-m-d H:i:s');

		$this->load->model('bomon_model');
		
        if ($this->bomon_model->addPost($data1,$data2,$data3)) 
        {
        	// $this->load->view('save1_view');
        	redirect('bomon/', 'refresh');
        }
        else {
        	echo "Failed";
        }

		}
// public function editSim($idnhanduoc)
// 	{  
// 		$this->load->model('bomon_model');
// 		$ketqua = $this->bomon_model->editByID($idnhanduoc);	
// 		$ketqua = array('ketqua' => $ketqua)	;
        
// 		truyen ketqua nay vao view edit de sửa dữ liệu 
// 		$this->load->view('update_bomon_view', $ketqua, FALSE);
// 	}

// 	public function updateData()
// 	{
// 		// lay du lieu tu view ve 
//         $ma_bo_mon = $this->input->post('ma_bo_mon');
// 		$ten_bo_mon = $this->input->post('ten_bo_mon');
// 		$noi_dung_dieu_tri= $this->input->post('noi_dung_dieu_tri');
		
// 		//  echo "ID nhan duoc : $ten_benh";
// 		//  echo "so nhan duoc : $trieu_chung";
// 		// echo "gia nhan duoc : $mo_ta";

// 		$this->load->model('bomon_model');

// 		// su dung ham trong model giao tiep voi du lieu voi gia tri nhan dc tu view
// 		if($this->bomon_model->updateDataById($ma_bo_mon,$ten_bo_mon,$noi_dung_dieu_tri))
// 		{
// 			 redirect('bomon', 'refresh');
			 
// 		}
// 		else {
// 		 	echo " khong thanh cong";
// 		}


// 	}

}

/* End of file bomon.php */
/* Location: ./application/controllers/bomon.php */