<?php include_once('header_view.php'); ?>
 <div class="container">

  <!-- <h3>Danh sách</h3> -->
   <br>
   <h3 class="text-center">Thông tin lô thuốc</h3>
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
    <legend class="text-center">Thêm thông tin lô thuốc</legend>
    <div class="form-group">
      <label for="ma_lo_thuoc" class="col-md-2 control-label">Mã lô thuốc</label>
      <div class="col-md-8">
        <input name="ma_lo_thuoc" type="text"  class="form-control" id="ma_lo_thuoc" placeholder="Mã lô thuốc">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    <div class="form-group">
      <label for="nha_sx" class="col-md-2 control-label">Nhà sản xuất</label>
      <div class="col-md-8">
        <input name="nha_sx" type="text"  class="form-control" id="nha_sx" placeholder="Nhà sản suất">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    <div class="form-group">
      <label for="so_luong" class="col-md-2 control-label">Số lượng</label>
      <div class="col-md-8">
        <input name="so_luong" type="number"  class="form-control" id="so_luong" placeholder="Số lượng">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    <div class="form-group">
      <label for="ngay_sx" class="col-md-2 control-label">Ngày sản xuất</label>
      <div class="col-md-8">
        <input name="ngay_sx" type="date"  class="form-control" id="ngay_sx" placeholder="">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
       <div class="form-group">
      <label for="han_sd" class="col-md-2 control-label">Hạn sử dụng</label>
      <div class="col-md-8">
        <input name="han_sd" type="date"  class="form-control" id="han_sd" placeholder="Hạn sử dụng">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    
    
    
 <div class="form-group">
  <div class="col-md-10 col-md-offset-2">
    
     <input type="submit" class="btn btn-success " value="Submit">
     <?php echo anchor('lothuoc/', '<div class="btn btn-info">Back</div>'); ?>

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
      <th scope="col">STT</th>
      <th scope="col">Mã lô thuốc</th>
      <th scope="col">Nhà sản xuất</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Ngày sản xuất</th>
      <th scope="col">Hạn sử dụng</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
  <?php if (count($add)) :?>
    <?php foreach ($add as $add):{
      
    } ?>  
    <tr class="table">
      <td> <?php echo $add->id_lothuoc;?> </td>
      <td> <?php echo $add->ma_lo_thuoc;?> </td>
      <td> <?php echo $add->nha_sx;?> </td>
      <td> <?php echo $add->so_luong;?></td>
      <td> <?php echo $add->ngay_sx;?></td>
      <td> <?php echo $add->han_sd;?></td>
      <td >
        <?php echo anchor("lothuoc/editSim/$add->id_lothuoc", '<button class="btn btn-success ">Sửa</button>') ?>
        <?php echo anchor("lothuoc/delete/$add->id_lothuoc", '<button class="btn btn-danger ">Xóa</button>') ?>
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
  

