<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class benhnhan extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('upload');
  }

  public function index()
  {
    $this->load->model('benhnhan_model');
    $posts = $this->benhnhan_model->getPosts();
        $posts= array('add'=>$posts);
    $this->load->view('benhnhan_view', $posts);
    
  }
  public function delete($ma_benh_nhan)
  {   
      
    $this->load->model('benhnhan_model');
    if($this->benhnhan_model->deleteDataById($ma_benh_nhan))
    {
      // $this->load->view('save1_view');
      redirect('benhnhan/', 'refresh');
      // echo "Sucessfully";
      
    }
    else
    {
      echo "chua xoa duoc"; 

    }
  }

  public function save()
  {   

     //xử lý ảnh
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["anh_bn"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["anh_bn"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    // if (file_exists($target_file)) {
    //     echo "Đã có 1 file trùng tên trong ổ cứng.";
    //     $uploadOk = 0;
    // }
    // Check file size
    if ($_FILES["anh_bn"]["size"] > 50000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Chỉ chấp nhận file ảnh.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Lỗi, file chưa đc upload.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["anh_bn"]["tmp_name"], $target_file)) {
           // echo "The file ". basename( $_FILES["anhavatar"]["name"]). " has been uploaded.";
        } else {
             echo "Sorry, there was an error uploading your file.";
        }
    }



               $data1 = $this->input->post('ma_benh_nhan');
              $data2 =   base_url()."upload/". basename($_FILES["anh_bn"]["name"]) ;
              $data3 = $this->input->post('ho_ten');
              $data4 = $this->input->post('gioi_tinh');
              $data5 = $this->input->post('ngay_sinh');
              $data6 = $this->input->post('dia_chi');
              $data7 = $this->input->post('sdt');
              $data8 = $this->input->post('cmt');
              $data9 = $this->input->post('ma_bhyt');
              $data10 = $this->input->post('ma_benh');


    // $today = date('Y-m-d H:i:s');

    $this->load->model('benhnhan_model');
    
        if ($this->benhnhan_model->addPost($data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10)) 
        {
          // $this->load->view('save1_view');
          redirect('benhnhan/',"refresh");
          
        }
        else {
          echo "Failed";
        }

  }
// public function editSim()
//   {  
//     $this->load->model('benh_model');
//     $ketqua = $this->benh_model->editByID();  
//     $ketqua = array('edit' => $ketqua)  ;
//          // echo $ketqua;
//     // truyen ketqua nay vao view edit de sửa dữ liệu 
//     // $this->load->view('benh_view', $ketqua);
//     echo "<pre>";
//     print_r($ketqua);
//     echo "</pre>";

//   }

//   public function updateData()
//   {
//     // lay du lieu tu view ve 
//         $ma_benh = $this->input->post('ma_benh');
//     $ten_benh = $this->input->post('ten_benh');
//     $trieu_chung= $this->input->post('trieu_chung');
//     $mo_ta = $this->input->post('mo_ta');

//     //  echo "ID nhan duoc : $ten_benh";
//     //  echo "so nhan duoc : $trieu_chung";
//     // echo "gia nhan duoc : $mo_ta";

//     $this->load->model('benh_model');

//     // su dung ham trong model giao tiep voi du lieu voi gia tri nhan dc tu view
//     if($this->benh_model->updateDataById($ma_benh,$ten_benh,$trieu_chung,$mo_ta))
//     {
//        redirect('benh', 'refresh');
       
//     }
//     else {
//       echo " khong thanh cong";
//     }


//   }

}

/* End of file benhnhan.php */
/* Location: ./application/controllers/benhnhan.php */