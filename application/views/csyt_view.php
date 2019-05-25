<?php include_once('header_view.php'); ?>
 <div class="container">
  <br>
  <h3 class="text-center">Cơ sở y tế </h3>
  
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
              <legend>Thêm thông tin CSYT</legend>
              <div class="form-group">
                <label for="ma_csyt" class="col-md-2 control-label">Mã CSYT</label>
                <div class="col-md-8">
                  <input name="ma_csyt" type="text"  class="form-control" id="ma_csyt" placeholder="Mã CSYT">
                  
                </div>
                <div class="col-md-8">
                  
                </div>
              </div>
               <div class="form-group">
                <label for="ten_csyt" class="col-md-2 control-label">Tên CSYT</label>
                <div class="col-md-8">
                  <input name="ten_csyt" type="text"  class="form-control" id="ten_csyt" placeholder="Tên CSYT">
                  
                </div>
                <div class="col-md-8">
                  
                </div>
              </div>
              <div class="form-group">

                <label for="formGroupExampleInput" class=" col-md-2 control-label">Loại CSYT</label>
                   <div class="col-md-8">
                <select name="loai_csyt" id="" class="form-control">
                    
                    
                  <option >Tuyến xã và tương đương </option>
                   <option >Tuyến huyện và tương đương </option>
                    <option >Tuyến tỉnh và tương đương </option>
                     <option >Tuyến trung ương và tương đương </option>
                  
                  
                <!-- <div class="col-md-8">
                  <input name="ten_khoa" type="text"  class="form-control" id="ten_khoa" placeholder="Tên khoa">
                  
                </div> -->
                
                  </select>
                <!-- <div class="col-md-8">
                  
                </div> -->
                </div>
              </div>
              <div class="form-group">

                <label for="formGroupExampleInput" class=" col-md-2 control-label">Khoa</label>
                   <div class="col-md-8">
                <select name="ten_khoa" id="" class="form-control">
                     <?php foreach ($dl as $dulieu): ?>
                       
                    
                  <option type="text"><?= $dulieu['ten_khoa'] ?></option>
                  
                  
                <!-- <div class="col-md-8">
                  <input name="ten_khoa" type="text"  class="form-control" id="ten_khoa" placeholder="Tên khoa">
                  
                </div> -->
                 <?php endforeach ?>
                  </select>
                <!-- <div class="col-md-8">
                  
                </div> -->
                </div>
              </div>
              <div class="form-group">
                <label for="dia_chi" class="col-md-2 control-label">Địa chỉ</label>
                <div class="col-md-8">
                  <input name="dia_chi" type="text"  class="form-control" id="dia_chi" placeholder="Địa chỉ">
                  
                </div>
                <div class="col-md-8">
                  
                </div>
              </div>
              
              
             
           <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              
               <input type="submit" class="btn btn-success " value="Update">
               <?php echo anchor('csyt/', '<div class="btn btn-info">Back</div>'); ?>

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
      <th scope="col">Mã CSYT</th>
      <th scope="col">Tên CSYT </th>
      <th scope="col">Loại CSYT</th>
      <th scope="col">Khoa</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody  id="myTable">
  	   <?php if (count($add)) :?>
  	<?php foreach ($add
     as $add):{
  		
  	} ?>
    <tr class="table">
      <td><?php echo $add->ma_csyt;?></td>
      <td><?php echo $add->ten_csyt;?></td>
      <td><?php echo $add->loai_csyt;?></td>
        <td><?php echo $add->ten_khoa;?></td>
        <td><?php echo $add->dia_chi;?></td>
      <td >
        <?php echo anchor("csyt/editSim/$add->ma_csyt", '<button class="btn btn-success ">Sửa</button>') ?>  
        <?php echo anchor("csyt/delete/$add->ma_csyt", '<button class="btn btn-danger ">Xóa</button>') ?>
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
  

