<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sale extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('sale_model');
		$posts = $this->sale_model->getPosts();
        $posts= array('add'=>$posts);
		$this->load->view('sale_view', $posts);
		
	}
	public function delete($ma_km)
	{   
		  
		$this->load->model('sale_model');
		if($this->sale_model->deleteDataById($ma_km))
		{
			// $this->load->view('save1_view');
			redirect('sale/', 'refresh');
			
		}
		else
		{
			echo "chua xoa duoc"; 

		}
 	}

 	public function save()
	{  
		 $data1 = $this->input->post('ma_km');
		$data2 = $this->input->post('ngay_bdkm');
		$data3 = $this->input->post('ngay_ktkm');
		$data4 = $this->input->post('phan_tram');
		$data5 = $this->input->post('so_luong_km');
		
		// // $today = date('Y-m-d H:i:s');

		$this->load->model('sale_model');
		
        if ($this->sale_model->addPost($data1,$data2,$data3,$data4,$data5)) 
        {
        	// $this->load->view('save1_view');
        	redirect('sale/', 'refresh');
        }
        else {
        	echo "Failed";
        }

		}
// public function editSim($idnhanduoc)
// 	{  
// 		$this->load->model('benh_model');
// 		$ketqua = $this->benh_model->editByID($idnhanduoc);	
// 		// $ketqua = array('ketqua' => $ketqua)	;
//          echo $ketqua;
// 		// truyen ketqua nay vao view edit de sửa dữ liệu 
// 		// $this->load->view('update_benh_view', $ketqua, FALSE);
// 	}

// 	public function updateData()
// 	{
// 		// lay du lieu tu view ve 
//         $ma_benh = $this->input->post('ma_benh');
// 		$ten_benh = $this->input->post('ten_benh');
// 		$trieu_chung= $this->input->post('trieu_chung');
// 		$mo_ta = $this->input->post('mo_ta');

// 		//  echo "ID nhan duoc : $ten_benh";
// 		//  echo "so nhan duoc : $trieu_chung";
// 		// echo "gia nhan duoc : $mo_ta";

// 		$this->load->model('benh_model');

// 		// su dung ham trong model giao tiep voi du lieu voi gia tri nhan dc tu view
// 		if($this->benh_model->updateDataById($ma_benh,$ten_benh,$trieu_chung,$mo_ta))
// 		{
// 			 redirect('benh', 'refresh');
			 
// 		}
// 		else {
// 		 	echo " khong thanh cong";
// 		}


// 	}

}

/* End of file sale.php */
/* Location: ./application/controllers/sale.php */