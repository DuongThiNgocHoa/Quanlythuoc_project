<?php include_once('header_view.php'); ?>
 <div class="container">

  <!-- <h3>Danh sách</h3> -->
   <br>
   <h3 class="text-center">Thông tin thuốc được bán</h3>
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
    <legend>Thêm thông tin thuốc được bán</legend>
    <div class="form-group">
      <label for="ma_thuoc_db" class="col-md-2 control-label">Mã thuốc được bán</label>
      <div class="col-md-8">
        <input name="ma_thuoc_db" type="text"  class="form-control" id="ma_thuoc_db" placeholder="">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>

    <div class="form-group">
      <label for="ma_lo_thuoc" class="col-md-2 control-label">Mã lô thuốc</label>
      <div class="col-md-8">
        <input name="ma_lo_thuoc" type="text"  class="form-control" id="ma_lo_thuoc" placeholder="">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    <div class="form-group">
      <label for="ma_nha_thuoc" class="col-md-2 control-label">Mã nhà thuốc</label>
      <div class="col-md-8">
        <input name="ma_nha_thuoc" type="text"  class="form-control" id="ma_nha_thuoc" placeholder="">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    <div class="form-group">
      <label for="so_luong_tong" class="col-md-2 control-label">Số lượng</label>
      <div class="col-md-8">
        <input name="so_luong_tong" type="text"  class="form-control" id="so_luong_tong" placeholder="">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    <div class="form-group">
      <label for="don_vi" class="col-md-2 control-label">Đơn vị</label>
      <div class="col-md-8">
        <input name="don_vi" type="text"  class="form-control" id="don_vi" placeholder="viên/lọ/vỉ...">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    <div class="form-group">
      <label for="gia_ban_le" class="col-md-2 control-label">Giá bán lẻ</label>
      <div class="col-md-8">
        <input name="gia_ban_le" type="text"  class="form-control" id="gia_ban_le" placeholder="10000">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    <div class="form-group">
      <label for="ma_khuyen_mai" class="col-md-2 control-label">Mã khuyến mại</label>
      <div class="col-md-8">
        <input name="ma_khuyen_mai" type="text"  class="form-control" id="ma_khuyen_mai" placeholder="">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    
    
    
 <div class="form-group">
  <div class="col-md-10 col-md-offset-2">
    
     <input type="submit" class="btn btn-success " value="Submit">
     <?php echo anchor('thuocduocban/', '<div class="btn btn-info">Back</div>'); ?>

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
      <th scope="col">Mã thuốc bán</th>
      <th scope="col">Mã lô thuốc</th>
      <th scope="col">Nhà thuốc</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
   <?php if (count($add)) :?>
    <?php foreach ($add as $add):{
      
    } ?> 
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
  

