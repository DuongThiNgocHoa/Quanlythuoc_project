<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class csyt extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('csyt_model');
		$posts = $this->csyt_model->getPosts();
        // $posts= array('add'=>$posts);
        $dl = $this->csyt_model->loadKhoa();
		// $dl = array('dulieu'=>$dl);
		$dulieu = array(
			'add' => $posts,
			'dl' => $dl
		 );


		$this->load->view('csyt_view', $dulieu);
		// echo "<pre>";
	}
	public function delete($ma_csyt)
	{   
		  
		$this->load->model('csyt_model');
		if($this->csyt_model->deleteDataById($ma_csyt))
		{
			// $this->load->view('save1_view');
			redirect('csyt/', 'refresh');
			
		}
		else
		{
			echo "chua xoa duoc"; 

		}
 	}

 	public function save()
	{   
		 $data1 = $this->input->post('ma_csyt');
		$data2 = $this->input->post('ten_csyt');
		$data3 = $this->input->post('loai_csyt');
		
		$data4 = $this->input->post('ten_khoa');
		$data5 = $this->input->post('dia_chi');

		// $today = date('Y-m-d H:i:s');

		$this->load->model('csyt_model');
		
        if ($this->csyt_model->addPost($data1,$data2,$data3,$data4,$data5)) 
        {
        	// $this->load->view('save1_view');
        	redirect('csyt/', 'refresh');
        }
        else {
        	echo "Failed";
        }

		}
		// public function quanlibomon()
		// {
		// 	 $this->load->model('khoa_model');
					
		// 	$dl = $this->khoa_model->loadBoMon();
		// 	$dl = array('dulieu'=>$dl);
		// 	$this->load->view('khoa_view', $dl);
		// }

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


}

/* End of file csyt.php */
/* Location: ./application/controllers/csyt.php */