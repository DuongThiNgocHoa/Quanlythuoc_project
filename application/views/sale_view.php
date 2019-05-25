<?php include_once('header_view.php'); ?>
 <div class="container">
  
  <br>
  <h3 class="text-center">Chương trình khuyến mại</h3>
 	<!-- <h3>Danh sách</h3> -->
  
  <div class="form-group">
 	<button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal" >
   Thêm mới
  </button>
  </div>
  <br>
     
   
    
  


  <!-- The Modal -->
  <div class="modal fade " id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
       <div class="container">
  <form action="save"  method="post" enctype="multidata/form-data">
    
  <fieldset>
    <legend>Thêm chương trình khuyến mại</legend>
    <!-- <div class="form-group">
      <label for="ma_km" class="col-md-2 control-label">Mã khuyến mại</label>
      <div class="col-md-8">
        <input name="ma_km" type="text"  class="form-control" id="ma_km" placeholder="Mã khuyến mãi">
        
      </div>
      <div class="col-md-8">
        
      </div>
    </div> -->
    <div class="form-group">
      <label for="ngay_bdkm" class="col-md-2 control-label">Ngày bắt đầu</label>
      <div class="col-md-8">
        <input name="ngay_bdkm" type="date"  class="form-control" id="ngay_bdkm" placeholder="Ngày bắt đầu">
        
      </div>
      <div class="col-md-8">
        
      </div>
    </div>
    <div class="form-group">
      <label for="ngay_ktkm" class="col-md-2 control-label">Ngày kết thúc</label>
      <div class="col-md-8">
        <input name="ngay_ktkm" type="date"  class="form-control" id="ngay_ktkm" placeholder="Ngày kết thúc">
        
      </div>
      <div class="col-md-8">
        
      </div>
    </div>
    <div class="form-group">
      <label for="phan_tram" class="col-md-2 control-label">Phần trăm</label>
      <div class="col-md-8">
        <input name="phan_tram" type="number"  class="form-control" id="phan_tram" placeholder="Phần trăm">
        
      </div>
      <div class="col-md-8">
        
      </div>
    </div>
    <div class="form-group">
      <label for="so_luong_km" class="col-md-2 control-label">Số lượng</label>
      <div class="col-md-8">
        <input name="so_luong_km" type="text"  class="form-control" id="so_luong_km" placeholder="Số lượng">
        
      </div>
      <div class="col-md-8">
        
      </div>
    </div>
    
    
   
    
    
 <div class="form-group">
  <div class="col-md-10 col-md-offset-2">
    
     <input type="submit" class="btn btn-success " value="Submit">
     <?php echo anchor('sale', '<div class="btn btn-info">Back</div>'); ?>

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
 	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Mã khuyến mại</th>
      <th scope="col">Ngày bắt đầu</th>
      <th scope="col">Ngày kết thúc</th>
      <th scope="col">Phần trăm</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
  	  <?php if (count($add)) :?>
  	<?php foreach ($add as $add):{
  		
  	} ?>  
    <tr class="table">
      <td><?php echo $add->ma_km;?></td>
      <td><?php echo $add->ngay_bdkm;?></td>
      <td><?php echo $add->ngay_ktkm;?></td>
       <td><?php echo $add->phan_tram;?></td>
        <td><?php echo $add->so_luong_km;?></td>
      <td >

      	
 <?php echo anchor("sale/editSim", '<button class="btn btn-success ">Sửa</button>') ?> 
        
            
  <!-- The Modal -->
          
      	
        <?php echo anchor("sale/delete/$add->ma_km", '<button class="btn btn-danger ">Xóa</button>') ?>
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


