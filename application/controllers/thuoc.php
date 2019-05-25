<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class thuoc extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
     
    $this->load->model('thuoc_model');
    $posts = $this->thuoc_model->getPosts();
        // $posts= array('add'=>$posts);
        $dl = $this->thuoc_model->loadLoThuoc();
    // $dl = array('dulieu'=>$dl);
    $dulieu = array(
      'add' => $posts,
      'dl' => $dl
     );
   
    $this->load->view('thuoc_view', $dulieu);
    
  }
  public function delete($ma_thuoc)
  {   
      
    $this->load->model('thuoc_model');
    if($this->thuoc_model->deleteDataById($ma_thuoc))
    {
       redirect('thuoc/','refresh');
    }
    else
    {
      echo "chua xoa duoc"; 

    }
  }
  public function save()
  {   
    $data1 = $this->input->post('ma_thuoc');
    $data2 = $this->input->post('ten_thuoc');
      $data3 = $this->input->post('ma_lo_thuoc');
    $data4 = $this->input->post('hoat_chat');
    $data5 = $this->input->post('ham_luong');
    $data6 = $this->input->post('chi_dinh');
    $data7 = $this->input->post('tac_dung_phu');
     $data8 = $this->input->post('luu_y');


    // $today = date('Y-m-d H:i:s');

    $this->load->model('thuoc_model');
    
        if ($this->thuoc_model->addPost($data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8)) 
        {
            redirect('thuoc/','refresh');
        }
        else {
          echo "Failed";
        }
  

}
}

/* End of file thuoc.php */
/* Location: ./application/controllers/thuoc.php */