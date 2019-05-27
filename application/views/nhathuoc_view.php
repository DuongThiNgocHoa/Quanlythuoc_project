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
  <form action="save/"  method="post" enctype="multidata/form-data">
    
  <fieldset>
    <legend>Thêm thông tin nhà thuốc</legend>
    
      
    
    <div class="form-group">

                <label for="ma_nha_thuoc" class="  control-label">Mã nhà thuốc</label>
                   <div class="col-md-8">
                <select name="ma_nha_thuoc" id="ma_nha_thuoc" class="form-control">
                     <?php foreach ($string as $value): ?>
                       
                    
                  <option type="text" <?= $value ?>><?= $value ?></option>
                
                  
                </div> 
                 <?php endforeach ?>
                  </select>
                <!-- <div class="col-md-8">
                  
                </div> -->
                </div>
              </div>
   
    <div class="form-group">
      <label for="ten_nha_thuoc" class=" control-label">Tên nhà thuốc</label>
      <div class="col-md-8">
        <input name="ten_nha_thuoc" type="text"  class="form-control" id="ten_nha_thuoc" placeholder="Tên nhà thuốc">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    <div class="form-group">
      <label for="dia_chi_nt" class="col-md-2 control-label">Địa chỉ</label>
      <div class="col-md-8">
        <input name="dia_chi_nt" type="text"  class="form-control" id="dia_chi_nt" placeholder="Địa chỉ">
        
      </div>
      <div class="col-md-8">
      </div>
    </div>
    <div class="form-group">
      <label for="ma_thuoc" class="col-md-2 control-label">Thuốc</label>
      <div class="col-md-8">
        <textarea name="ma_thuoc" type="text"  class="form-control" id="ma_thuoc" rows="5" placeholder="Thuốc">
        </textarea>
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
      <th scope="col">STT</th>
      <th scope="col">Mã nhà thuốc</th>
      <th scope="col">Tên nhà thuốc</th>
      <th scope="col">Địa chỉ </th>
       <th scope="col">Mã thuốc </th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
    <?php if (count($add)) :?>
    <?php foreach ($add as $add):{
      
    } ?> 
    <tr class="table">
      <td> <?php echo $add->id_nhathuoc;?> </td>
      <td> <?php echo $add->ma_nha_thuoc;?> </td>
      <td> <?php echo $add->ten_nha_thuoc;?> </td>
      <td> <?php echo $add->dia_chi_nt;?></td>
        <td> <?php echo $add->ma_thuoc;?></td>
      <td >
        <?php echo anchor("nhathuoc/editSim/$add->id_nhathuoc/", '<button class="btn btn-success ">Sửa</button>') ?>
        <?php echo anchor("nhathuoc/delete/$add->id_nhathuoc/", '<button class="btn btn-danger ">Xóa</button>') ?>
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
  