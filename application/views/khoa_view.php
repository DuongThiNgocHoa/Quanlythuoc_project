<?php include_once('header_view.php'); ?>
 <div class="container">
  <br>
  <h3 class="text-center">Khoa </h3>
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
              <legend>Thêm thông tin khoa</legend>
              <div class="form-group">
                <label for="ma_khoa" class="col-md-2 control-label">Mã khoa</label>
                <div class="col-md-8">
                  <input name="ma_khoa" type="text"  class="form-control" id="ma_khoa" placeholder="Mã khoa">
                  
                </div>
                <div class="col-md-8">
                  
                </div>
              </div>
               <div class="form-group">
                <label for="ten_khoa" class="col-md-2 control-label">Tên khoa</label>
                <div class="col-md-8">
                  <input name="ten_khoa" type="text"  class="form-control" id="ten_khoa" placeholder="Tên khoa">
                  
                </div>
                <div class="col-md-8">
                  
                </div>
              </div>
              <div class="form-group">

                <label for="formGroupExampleInput" class=" col-md-2 control-label">Bộ môn</label>
                   <div class="col-md-8">
                <select name="ten_bo_mon" id="" class="form-control">
                     <?php foreach ($dl as $dulieu): ?>
                       
                    
                  <option type="text"><?= $dulieu['ten_bo_mon'] ?></option>
                
                  
                </div> -->
                 <?php endforeach ?>
                  </select>
                <!-- <div class="col-md-8">
                  
                </div> -->
                </div>
              </div>
              <div class="form-group">
                <label for="pham_vi" class="col-md-2 control-label">Phạm vi</label>
                <div class="col-md-8">
                  <input name="pham_vi" type="text"  class="form-control" id="pham_vi" placeholder="Phạm vi">
                  
                </div>
                <div class="col-md-8">
                  
                </div>
              </div>
              
              
             
           <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              
               <input type="submit" class="btn btn-success " value="Update">
               <?php echo anchor('khoa/', '<div class="btn btn-info">Back</div>'); ?>

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
      <th scope="col" class="text-center">Mã khoa</th>
      <th scope="col" class="text-center">Tên khoa </th>
      <th scope="col" class="text-center">Bộ môn</th>
      <th scope="col" class="text-center">Phạm vi</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
  	   <?php if (count($add)) :?>
  	<?php foreach ($add
     as $add):{
  		
  	} ?>
    <tr class="table">
      <td><?php echo $add->ma_khoa;?></td>
      <td><?php echo $add->ten_khoa;?></td>
      <td><?php echo $add->ten_bo_mon;?></td>
        <td><?php echo $add->pham_vi;?></td>
      <td >
        <?php echo anchor("khoa/editSim/$add->ma_khoa", '<button class="btn btn-success ">Sửa</button>') ?>  
        <?php echo anchor("khoa/delete/$add->ma_khoa", '<button class="btn btn-danger ">Xóa</button>') ?>
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
             <!--  end Jquery Seach
 -->
