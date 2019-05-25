<?php include_once('header_view.php'); ?>
 <div class="container">
  <br>
  <h3 class="text-center">Thông tin thuốc</h3>
 	<!-- <h3>Danh sách</h3> -->
 	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
   Thêm mới
  </button>

  <!-- The Modal -->
  <div class="modal fade " id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
       <div class="container">
  <form action="save/"  method="post" enctype="multidata/form-data"> 
  <fieldset>
    <legend>Thêm thông tin thuốc</legend>
    <div class="form-group row">
          <div class="col-sm-6">
            <div class="row">
              <label for="ten_thuoc" class="col-sm-4 form-control-label  ">Tên thuốc</label>
              <div class="col-sm-8">
                <input name="ten_thuoc" type="text" class="form-control" id="ten_thuoc" placeholder="Tên thuốc">
              </div>
            </div>
          </div>
          
          <div class="col-sm-6">
            <div class="row">
               
                <label for="ham_luong" class="col-sm-4 form-control-label ">Hàm lượng</label>
                <div class="col-sm-8">
                  <input name="ham_luong" type="text" class="form-control" id="ham_luong" placeholder="Hàm lượng">
                </div>          
               
            </div>
          </div>


          
        </div>
    <div class="form-group">

                <label for="formGroupExampleInput" class=" col-md-2 control-label">Mã lô thuốc</label>
                   <div class="col-md-8">
                <select name="ma_lo_thuoc" id="" class="form-control">
                     <?php foreach ($dl as $dulieu): ?>
                       
                    
                  <option type="text"><?= $dulieu['ma_lo_thuoc'] ?></option>
                  
             
                 <?php endforeach ?>
                  </select>
                </div> 
              </div>
    <div class="form-group">
      <label for="hoat_chat" class="col-md-2 control-label">Hoạt chất</label>
       <div class="col-md-8">
      <textarea name="hoat_chat" class="form-control" id="hoat_chat" rows="2" placeholder="Hoạt chất"></textarea>
     
    </div>
    <div class="col-md-8">
        
      </div>
     </div>
     <div class="form-group">
      <label for="chi_dinh" class="col-md-2 control-label">Chỉ định</label>
       <div class="col-md-8">
      <textarea name="chi_dinh" class="form-control" id="chi_dinh" rows="2" placeholder="Chỉ định"></textarea>
     
    </div>
    <div class="col-md-8">
        
      </div>
     </div>
     <div class="form-group">
      <label for="tac_dung_phu" class="col-md-2 control-label">Tác dụng phụ</label>
       <div class="col-md-8">
      <textarea name="tac_dung_phu" class="form-control" id="tac_dung_phu" rows="2" placeholder="Tác dụng phụ"></textarea>
     
    </div>
    <div class="col-md-8">
        
      </div>
     </div>
     <div class="form-group">
      <label for="luu_y" class="col-md-2 control-label">Lưu ý</label>
       <div class="col-md-8">
      <textarea name="luu_y" class="form-control" id="luu_y" rows="3" placeholder="Lưu ý"></textarea>
     
    </div>
    <div class="col-md-8">
        
      </div>
     </div>
    
    
 <div class="form-group">
  <div class="col-md-10 col-md-offset-2">
    
     <input type="submit" class="btn btn-success nutajax" value="Submit">
     <?php echo anchor('thuoc/', '<div class="btn btn-info">Back</div>'); ?>

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
          <th>STT</th>
          <th>Tên thuốc</th>
          <th>Mã lô thuốc</th>
          <th>Hoạt chất</th>
          <th>Hàm lượng</th>
          <th>Chỉ định</th>
          <th>Tác dụng phụ</th>
          <th>Lưu ý</th>
          <th>Action</th>

        </tr>
      </thead>
       <tbody id="myTable">
      <?php if (count($add)) :?>
    <?php foreach ($add as $add):{
      
    } ?>   
    <tr class="table">
      <td><?php echo $add->ma_thuoc;?></td>
      <td><?php echo $add->ten_thuoc;?></td>
      <td><?php echo $add->ma_lo_thuoc;?></td>
      <td><?php echo $add->hoat_chat;?></td>
      <td><?php echo $add->ham_luong;?></td>
      <td><?php echo $add->chi_dinh;?></td>
      <td><?php echo $add->tac_dung_phu;?></td>
      <td><?php echo $add->luu_y;?></td>
      <td >

        
 <?php echo anchor("thuoc/editSim/$add->ma_thuoc/", '<button class="btn btn-success ">Sửa</button>') ?> 
        
            
  <!-- The Modal -->
          
        
        <?php echo anchor("thuoc/delete/$add->ma_thuoc/", '<button class="btn btn-danger ">Xóa</button>') ?>
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

