<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class benh extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('benh_model');
		$posts = $this->benh_model->getPosts();
        $posts= array('add'=>$posts);
		$this->load->view('benh_view', $posts);
		
		
	}

	public function delete($ma_benh)
	{   
		  
		$this->load->model('benh_model');
		if($this->benh_model->deleteDataById($ma_benh))
		{
			// $this->load->view('save1_view');
			redirect('benh', 'refresh');
			// echo "Sucessfully";
			
		}
		else
		{
			echo "chua xoa duoc"; 

		}
 	}

 	public function save()
	{   
		 $data1 = $this->input->post('ten_benh');
		$data2 = $this->input->post('trieu_chung');
		$data3 = $this->input->post('mo_ta');

		// $today = date('Y-m-d H:i:s');

		$this->load->model('benh_model');
		
        if ($this->benh_model->addPost($data1,$data2,$data3)) 
        {
        	// $this->load->view('save1_view');
        	redirect('benh');
        	
        }
        else {
        	echo "Failed";
        }

		}
public function editSim()
	{  
		$this->load->model('benh_model');
		$ketqua = $this->benh_model->editByID();	
		$ketqua = array('edit' => $ketqua)	;
         // echo $ketqua;
		// truyen ketqua nay vao view edit de sửa dữ liệu 
		// $this->load->view('benh_view', $ketqua);
		echo "<pre>";
		print_r($ketqua);
		echo "</pre>";

	}

	public function updateData()
	{
		// lay du lieu tu view ve 
        $ma_benh = $this->input->post('ma_benh');
		$ten_benh = $this->input->post('ten_benh');
		$trieu_chung= $this->input->post('trieu_chung');
		$mo_ta = $this->input->post('mo_ta');

		//  echo "ID nhan duoc : $ten_benh";
		//  echo "so nhan duoc : $trieu_chung";
		// echo "gia nhan duoc : $mo_ta";

		$this->load->model('benh_model');

		// su dung ham trong model giao tiep voi du lieu voi gia tri nhan dc tu view
		if($this->benh_model->updateDataById($ma_benh,$ten_benh,$trieu_chung,$mo_ta))
		{
			 redirect('benh', 'refresh');
			 
		}
		else {
		 	echo " khong thanh cong";
		}


	}
}

/* End of file benh.php */
/* Location: ./application/controllers/benh.php */