<?php include_once('header_view.php'); ?>
 <div class="container">
  <br>
  <h3 class="text-center">Thông tin bệnh nhân</h3>
 	<!-- <h3>Danh sách</h3> -->
 	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
   Thêm mới
  </button>

  <!-- The Modal -->
  <div class="modal fade " id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
       <div class="container">
  <form action="save/"  method="post" enctype="multipart/form-data"> 
  <fieldset>
    <legend>Thêm thông tin bệnh nhân </legend>
    <div class="form-group ">
              <label for="ma_benh_nhan" class="col-sm-4 form-control-label  ">Mã bệnh nhân</label>
              <div class="col-sm-8">
                <input name="ma_benh_nhan" type="text" class="form-control" id="ma_benh_nhan" placeholder="Mã bệnh nhân">
              </div>
              <div class="col-sm-8">
          	</div>
          </div>
              <div class="form-group">
      <label for="anh_bn" class="col-md-2 control-label">Ảnh</label>
       <div class="col-md-8">
      <input type="file"  name="anh_bn" class="form-control"  placeholder="Ảnh">
     
    </div>
    <div class="col-md-8">
        
      </div>
     </div>
         <div class="form-group ">   
           
                <label for="ho_ten" class="col-sm-4 form-control-label ">Họ và tên</label>
                <div class="col-sm-8">
                  <input name="ho_ten" type="text" class="form-control" id="ho_ten" placeholder="Họ và tên ">
                </div>
				 <div class="col-sm-8">
          	</div>
          </div>
               
           
    <div class="form-group">

                <label for="gioi_tinh" class=" col-md-2 control-label">Giới tính</label>
                   <div class="col-md-8">
                <select name="gioi_tinh" id="" class="form-control">
                     
                       
                    
                  <option >Nam</option>
                      <option >Nữ</option>
                  </select>
                </div> 
              </div>
    <div class="form-group">
      <label for="ngay_sinh" class="col-md-2 control-label">Ngày sinh</label>
       <div class="col-md-8">
      <input type="date"  name="ngay_sinh" class="form-control" id="ngay_sinh"  placeholder="Ngày sinh">
     
    </div>
    <div class="col-md-8">
        
      </div>
     </div>
     
      <div class="form-group">
      <label for="dia_chi" class="col-md-2 control-label">Địa chỉ</label>
       <div class="col-md-8">
      <input type="text"  name="dia_chi" class="form-control" id="dia_chi"  placeholder="Địa chỉ">
     
    </div>
    <div class="col-md-8">
        
      </div>
     </div>
     
      <div class="form-group row">
      	<div class="col-md-6">
      		<div class="rows">
      			<label for="sdt" class=" control-label">Số điện thoại</label>
       			<div class="col-md-8">
     				 <input type="text"  name="sdt" class="form-control" id="sdt"  placeholder="Số điệnt thoại">
     
    			</div>
    		</div>
    	</div>
            <div class="col-md-6">
            	<div class="rows">
            		<label for="cmt" class=" control-label">Chứng minh thư</label>
					<div class="col-md-8">
					<input type="text"  name="cmt" class="form-control" id="cmt"  placeholder="CMT">
        		
      				</div>
     			</div>
     		 </div>
     	</div>

    
      <div class="form-group">
      <label for="ma_bhyt" class="col-md-2 control-label">Mã BHYT</label>
       <div class="col-md-8">
      <input type="text"  name="ma_bhyt" class="form-control" id="ma-bhyt"  placeholder="Mã BHYT">
     
    </div>
    <div class="col-md-8">
        
      </div>
     </div>
     <div class="form-group">
      <label for="ma_benh" class="col-md-2 control-label">Bệnh</label>
       <div class="col-md-8">
      <input type="text"  name="ma_benh" class="form-control" id="ma_benh"  placeholder="Bệnh">
     
    </div>
    <div class="col-md-8">
        
      </div>
     </div>
    
   
    
 <div class="form-group">
  <div class="col-md-10 col-md-offset-2">
    
     <input type="submit" class="btn btn-success " name="btnadd" value="Submit">
     <?php echo anchor('benhnhan/', '<div class="btn btn-info">Back</div>'); ?>

  </div>
   
 </div>
  </fieldset>


</form>
</div>
        
      </div>
    </div>
  </div>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th >Mã BN</th>
          <th >Ảnh bệnh nhân</th>
          <th >Họ và tên</th>
          <th>Giới tính</th>
          <th >Ngày sinh</th>
          <th>Địa chỉ</th>
          <th >SĐT</th>
          <th >CMT</th>
            <th >Mã BHYT</th>
              <th ">Bệnh</th>
          <th>Action</th>

        </tr>
      </thead>
       <tbody id="myTable">
       <?php if (count($add)) :?>
    <?php foreach ($add as $add):{
      
    } ?>  
    <tr class="table">
      <td  ><?php echo $add->ma_benh_nhan;?></td>
      <td><img src="<?php echo $add->anh_bn;?>" width="100px" height="100px" ></td>
      <td><?php echo $add->ho_ten;?></td>
      <td><?php echo $add->gioi_tinh;?></td>
      <td ><?php echo $add->ngay_sinh;?></td>
      <td><?php echo $add->dia_chi;?></td>
      <td><?php echo $add->sdt;?></td>
      <td><?php echo $add->cmt;?></td>
       <td><?php echo $add->ma_bhyt;?></td>
        <td><?php echo $add->ma_benh;?></td>
      <td >

        
 <?php echo anchor("bacsi/editSim/$add->ma_benh_nhan/", '<button class="btn btn-success ">Sửa</button>') ?> 
        
            
  <!-- The Modal -->
          
        
        <?php echo anchor("bacsi/delete/$add->ma_benh_nhan/", '<button class=" btn btn-danger btn-xs ">Xóa</button>') ?>
      </td>
    </tr>
    
<?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td>No records Found</td>
    </tr>
    <?php endif; ?>
  </tbody>
      
    </table>
  </div>


<!--   Jquery Seach -->
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<!-- end Seach -->
 	 

  

 <!-- <script>
  
   $('.nutajax').click(function(event) {
    /* Act on the event */

    $.ajax({
    url: 'benh/save',
    type: 'POST',
    dataType: 'json',
    data: {
      ten_benh: $('#ten_benh').val(),
      trieu_chung: $('#trieu_chung').val(),
      mo_ta: $('#mo_ta').val()
     
    },
    })
    .done(function() {
      console.log("success");

      // them noi dung bang ham append

    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    

    });
   });


   
    
   </script> -->
   <!-- <script>
     $('.nutxoaajax').click(function(event) {
     $.ajax({
    url: 'benh/delete',
    type: 'POST',
    dataType: 'json',
    data: {
      ten_benh: $('#ten_benh').val(),
      trieu_chung: $('#trieu_chung').val(),
      mo_ta: $('#mo_ta').val()
     
    },
    })
     .done(function() {
       console.log("success");
     })
     .fail(function() {
       console.log("error");
     })
     .always(function() {
       console.log("complete");
     });
     
   </script> -->

