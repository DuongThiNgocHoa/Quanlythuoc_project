<?php include_once('header_view.php'); ?>
 <div class="container">

  <!-- <h3>Danh sách</h3> -->
   <br>
   <h3 class="text-center">Thông tin nhà thuốc</h3>
  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
   Thêm mới
  </button>


  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
       <div class="container">
  <form action="save"  method="post" enctype="multidata/form-data">
    
  <fieldset>
    <legend>Thêm thông tin nhà thuốc</legend>
    <div class="form-group">
      <label for="so_the_bhyt" class="col-md-2 control-label">Số thẻ BHYT</label>
      <div class="col-md-8">
        <input name="so_the_bhyt" type="text"  class="form-control" id="so_the_bhyt" placeholder="Số thẻ">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    <div class="form-group">
      <label for="ngay_bat_dau" class="col-md-2 control-label">Ngày bắt đầu</label>
      <div class="col-md-8">
        <input name="ngay_bat_dau" type="date"  class="form-control" id="ngay_bat_dau" placeholder="">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    <div class="form-group">
      <label for="ngay_ket_thuc" class="col-md-2 control-label">Ngày kết thúc</label>
      <div class="col-md-8">
        <input name="ngay_ket_thuc" type="date"  class="form-control" id="ngay_ket_thuc" placeholder="">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    <div class="form-group">
      <label for="pham_tram" class="col-md-2 control-label">Phần trăm</label>
      <div class="col-md-8">
        <input name="pham_tram" type="number"  class="form-control" id="pham_tram" placeholder="">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    
    
    
 <div class="form-group">
  <div class="col-md-10 col-md-offset-2">
    
     <input type="submit" class="btn btn-success " value="Submit">
     <?php echo anchor('nhathuoc/', '<div class="btn btn-info">Back</div>'); ?>

  </div>
   
 </div>
  </fieldset>


</form>
</div>
        
      </div>
    </div>
  </div>
 <!--  ket thuc modal -->
<input class="form-control" id="myInput" type="text" placeholder="Search..">
     <br>

  <table class="table table-bordered">
  <thead class="thead-light">
    <tr>
     <!--  <th scope="col">STT</th> -->
      <th scope="col">Mã nhà thuốc</th>
      <th scope="col">Tên nhà thuốc</th>
      <th scope="col">Địa chỉ </th>
      <th scope="col">Vị trí</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
   <!-- <?php if (count($add)) :?>
    <?php foreach ($add as $add):{
      
    } ?>  -->
    <tr class="table">
      <td> <?php echo $add->so_the_bhyt;?> </td>
      <td> <?php echo $add->ngay_bat_dau;?> </td>
      <td> <?php echo $add->ngay_ket_thuc;?> </td>
      <td> <?php echo $add->phan_tram;?></td>
      <td >
        <?php echo anchor("bhyt/editSim/", '<button class="btn btn-success ">Sửa</button>') ?>
        <?php echo anchor("bhyt/delete/", '<button class="btn btn-danger ">Xóa</button>') ?>
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
  