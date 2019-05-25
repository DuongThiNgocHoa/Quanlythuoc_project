<?php include_once('header_view.php'); ?>
 <div class="container">
  <br>
  <h3 class="text-center">Bộ môn </h3>
 	<!-- <h3>Danh sách</h3> -->
 	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
   Thêm mới
  </button>

  <!-- The Modal -->
            <div class="modal fade " id="myModal">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                
                 <div class="container">
            <form action="<?php echo base_url(); ?>index.php/bomon/save"  method="post" enctype="multidata/form-data">
              
            <fieldset>
              <legend>Thêm thông tin bộ môn</legend>
              <div class="form-group">
                <label for="ma_bo_mon" class="col-md-2 control-label">Mã bộ môn</label>
                <div class="col-md-8">
                  <input name="ma_bo_mon" type="text"  class="form-control" id="ma_bo_mon" placeholder="Mã bộ môn">
                  
                </div>
                <div class="col-md-8">
                  
                </div>
              </div>
               <div class="form-group">
                <label for="ten_bo_mon" class="col-md-2 control-label">Tên bộ môn</label>
                <div class="col-md-8">
                  <input name="ten_bo_mon" type="text"  class="form-control" id="ten_bo_mon" placeholder="Tên bộ môn">
                  
                </div>
                <div class="col-md-8">
                  
                </div>
              </div>
              
              <div class="form-group">
                <label for="noi_dung_dieu_tri" class="col-md-2 control-label">Nội dung điều trị</label>
                 <div class="col-md-8">
                <textarea name="noi_dung_dieu_tri" class="form-control" id="noi_dung_dieu_tri" rows="5" placeholder="Nội dung điều trị"></textarea>
               
              </div>
              <div class="col-md-8">
                  
                </div>
               </div>
             
           <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              
               <input type="submit" class="btn btn-success " value="Update">
               <?php echo anchor('bomon', '<div class="btn btn-info">Back</div>'); ?>

            </div>
             
           </div>
            </fieldset>


          </form>
          </div>
                  
                </div>
              </div>
            </div>
 <!--  end dropdown thêm mới -->
 <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
 	<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Mã bộ môn</th>
      <th scope="col">Tên bộ môn</th>
      <th scope="col">Nội dung điều trị</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
  	  <?php if (count($add)) :?>
  	<?php foreach ($add as $add):{
  		
  	} ?>  
    <tr class="table">
      <td><?php echo $add->ma_bo_mon;?></td>
      <td><?php echo $add->ten_bo_mon;?></td>
      <td><?php echo $add->noi_dung_dieu_tri;?></td>
      <td >
        <?php echo anchor("bomon/editSim/$add->ma_bo_mon", '<button class="btn btn-success ">Sửa</button>') ?>  
        <?php echo anchor("bomon/delete/$add->ma_bo_mon", '<button class="btn btn-danger ">Xóa</button>') ?>
      </td>
    </tr>
    
    <?php endforeach; ?>
        <?php else: ?>
    		<tr>
    			<td>Không có dữ liệu</td>
    		</tr>
        <?php endif; ?>
      </tbody>
    </table> 
     </div>
  
                    <!-- Jquery Seach -->
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