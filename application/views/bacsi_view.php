<?php include_once('header_view.php'); ?>

 <div class="container bg-view">
  <br>
  <h3 class="text-center">Thông tin bác sĩ</h3>
 	<!-- <h3>Danh sách</h3> -->
 	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
   Thêm mới
  </button>

  <!-- The Modal -->
  <div class="modal fade " id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
       <div class="container">
           

                    <form class="form-horizontal"  action="save/"  method="post" enctype="multipart/form-data"> 
                    <fieldset>
                      <div class="modal-header ">
                          <h4 align="center">Thêm thông tin bác sĩ </h4>
                      </div>
                        <div class="modal-body">
                         <div class="form-group ">
                                <label for="ma_bac_si"  ">Mã bác sĩ</label>
                                <div class="col-sm-4">
                                  <input name="ma_bac_si" type="text" class="form-control" id="ma_bac_si" placeholder="Mã bác sĩ">
                                </div>
                                <div class="col-sm-4">
                              </div>
                            </div>
                                <div class="form-group">
                        <label for="ten_bs" class="col-md-2 control-label">Tên bác sĩ</label>
                         <div class="col-md-4">
                        <input type="text"  name="ten_bs" class="form-control"  placeholder="Tên bác sĩ">
                       
                      </div>
                      <div class="col-md-4">
                          
                        </div>
                       </div>
                           <div class="form-group ">   
                             
                                  <label for="anh_bs" class="col-sm-4 form-control-label ">Ảnh
                                  </label>
                                  <div class="col-sm-8">
                                    <input name="anh_bs" type="file" class="form-control" id="anh_bs" placeholder="Ảnh ">
                                  </div>
                           <div class="col-sm-8">
                              </div>
                            </div>
                                 
                      <div class="form-group">
                        <label for="sdt_bs" class="col-md-2 control-label">Số điện thoại</label>
                         <div class="col-md-8">
                        <input type="text"  name="sdt_bs" class="form-control" id="sdt_bs"  placeholder="Số điện thoại">
                       
                      </div>
                      <div class="col-md-8">
                          
                        </div>
                       </div>
                       
                        <div class="form-group">
                        <label for="email" class="col-md-2 control-label">Email</label>
                         <div class="col-md-8">
                        <input type="email"  name="email" class="form-control" id="email"  placeholder="Email">
                       
                      </div>
                      <div class="col-md-8">
                          
                        </div>
                       </div>
                       
                        <div class="form-group row">
                          <div class="col-md-6">
                            <div class="rows">
                              <label for="ngay_bdct" class=" control-label">Ngày bắt đầu công tác</label>
                              <div class="col-md-8">
                               <input type="date"  name="ngay_bdct" class="form-control" id="ngay_bdct"  placeholder="Ngày bắt đầu">
                       
                            </div>
                          </div>
                        </div>
                              <div class="col-md-6">
                                <div class="rows">
                                  <label for="ngay_ktct" class=" control-label">Ngày kết thúc công tác</label>
                            <div class="col-md-8">
                            <input type="date"  name="ngay_ktct" class="form-control" id="ngay_ktct"  placeholder="Ngày kết thúc">
                              
                                </div>
                            </div>
                           </div>
                        </div>

                      
                        <div class="form-group">
                        <label for="chuyen_nganh" class=" control-label">Chuyên ngành</label>
                         <div class="col-md-8">
                        <input type="text"  name="chuyen_nganh" class="form-control" id="chuyen_nganh"  placeholder="Chuyên ngành">
                       
                      </div>
                      <div class="col-md-8">
                          
                        </div>
                       </div>
                       <div class="form-group">
                        <label for="ma_csyt" class="col-md-2 control-label">Mã CSYT</label>
                         <div class="col-md-8">
                        <input type="text"  name="ma_csyt" class="form-control" id="ma_csyt"  placeholder="Mã CSYT">
                       
                      </div>
                      <div class="col-md-8">
                          
                        </div>
                       </div>
                      
                     
                      
                   <div class="form-group">
                    <div class="col-md-10 col-md-offset-2">
                      
                       <input type="submit" class="btn btn-success " name="btnadd" value="Submit">
                       <?php echo anchor('bacsi/', '<div class="btn btn-info">Back</div>'); ?>

                    </div>
                     
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
  <div class="table-responsive table-responsive-sm" >
    <table class="table table-bordered ">
      <thead class="thead-light">
        <tr >
          <th >STT</th>
          <th >Mã bác sĩ</th>
          <th >Họ và tên  </th>
          <th>Ảnh</th>
          <th >Số điện thoại</th>
          <th>Email</th>
          <th >Chuyên ngành</th>
          <th >Ngày bắt đầu công tác</th>
          <th >Ngày kết thúc công tác</th>
          <th>Mã CSYT</th>
          <th >Action</th>

        </tr>
      </thead>
       <tbody id="myTable">
      <?php if (count($add)) :?>
    <?php foreach ($add as $add):{
      
    } ?>  
	  <tr class="table">
	  <td  ><?php echo $add->id_bs;?></td>
	  <td  ><?php echo $add->ma_bac_si;?></td>
	  <td  ><?php echo $add->ten_bs;?></td>
      <td><img src="<?php echo $add->anh_bs;?>" width="100px" height="100px" ></td>
      <td><?php echo $add->sdt_bs;?></td>
      <td><?php echo $add->email;?></td>
      <td ><?php echo $add->chuyen_nganh;?></td>
      <td><?php echo $add->ngay_bdct;?></td>
      <td><?php echo $add->ngay_ktct;?></td>
      <td><?php echo $add->ma_csyt;?></td>
      <td>
      
	 <?php echo anchor("bacsi/editSim/$add->id_bs/", '<button class="btn btn-success ">Sửa</button>') ?> 
	        
	 <?php echo anchor("bacsi/delete/$add->id_bs/", '<button class=" btn btn-danger btn-xs ">Xóa</button>') ?>
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

