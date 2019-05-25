<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bhyt extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->helper('form');
       
	}

	public function index()

	{   
		$this->load->model('bhyt_model');
		$posts = $this->bhyt_model->getPosts();
        $posts= array('add'=>$posts);
		$this->load->view('bhyt_view', $posts);
		
		
	}
	//  public function create()
	// {
	// 	$this->load->view('create_view');
	// }
	
	public function delete($ma_bhyt)
	{   
		  
		$this->load->model('bhyt_model');
		if($this->bhyt_model->deleteDataById($ma_bhyt))
		{
			redirect('bhyt/','refresh');
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
		$data1 = $this->input->post('so_the_bhyt');
		$data2 = $this->input->post('ngay_bat_dau');
		$data3 = $this->input->post('ngay_ket_thuc');
		$data4 = $this->input->post('phan_tram');

		// $today = date('Y-m-d H:i:s');

		$this->load->model('bhyt_model');
		
        if ($this->bhyt_model->addPost($data1,$data2,$data3,$data4)) 
        {
        	redirect('bhyt/','refresh');
        	
        }
        else {
        	echo "Failed";
        }
        
        // return redirect('demo2','refresh');

		
	}
	public function view()
	{
		 $this->load->view('view_view');
		
	}
}

/* End of file demo2.php */
/* Location: ./application/controllers/demo2.php */
/* End of file bhyt.php */
/* Location: ./application/controllers/bhyt.php */