<?php include_once('header_view.php'); ?>
 <div class="container">
  <br>
  <h3 class="text-center">Thông tin loại bệnh</h3>
 	<!-- <h3>Danh sách</h3> -->
 	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
   Thêm mới
  </button>

  <!-- The Modal -->
  <div class="modal fade " id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
       <div class="container">
  <form action="benh/save"  method="post" enctype="multidata/form-data">
    
  <fieldset>
    <legend>Thêm thông tin bệnh</legend>
    <div class="form-group">

      <label for="ten_benh" class="col-md-2 control-label">Bệnh</label>
      <div class="col-md-8">
        <input name="ten_benh" type="text"  class="form-control" id="ten_benh" placeholder="Bệnh">
        
      </div>
      <div class="col-md-8">
        
      </div>
    </div>
    
    <div class="form-group">
      <label for="trieu_chung" class="col-md-2 control-label">Triệu chứng</label>
       <div class="col-md-8">
      <textarea name="trieu_chung" class="form-control" id="trieu_chung" rows="5" placeholder="Triệu chứng"></textarea>
     
    </div>
    <div class="col-md-8">
        
      </div>
     </div>
     <div class="form-group">
      <label for="mo_ta" class="col-md-2 control-label">Mô tả</label>
       <div class="col-md-8">
      <textarea name="mo_ta" class="form-control" id="mo_ta" rows="5" placeholder="Mô tả"></textarea>
     
    </div>
    <div class="col-md-8">
        
      </div>
     </div>
    
    
 <div class="form-group">
  <div class="col-md-10 col-md-offset-2">
    
     <input type="submit" class="btn btn-success nutajax" value="Submit">
     <?php echo anchor('benh', '<div class="btn btn-info">Back</div>'); ?>

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
 	<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col" class="text-center">Bệnh</th>
      <th scope="col" class="text-center">Triệu chứng</th>
      <th scope="col" class="text-center">Mô tả</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
  	 <?php if (count($add)) :?>
  	<?php foreach ($add as $add):{
  		
  	} ?> 
    <tr class="table">
      <td><?php echo $add->ten_benh;?></td>
      <td><?php echo $add->trieu_chung;?></td>
      <td><?php echo $add->mo_ta;?></td>
      <td >

      	
 <!-- <?php //echo anchor("benh/editSim", '<button class="btn btn-success ">Sửa</button>') ?>  -->
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Sửa</button>
        <div class="modal fade " id="myModal1">
         
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      for
       <div class="container">
  <form action="benh/updateData"  method="post" enctype="multidata/form-data">
    
  <fieldset>
    <legend>Sửa thông tin bệnh</legend>
    <?php foreach ($edit as $value): ?>
      
    
    <div class="form-group">

      <label for="ten_benh" class="col-md-2 control-label">Bệnh</label>
      <div class="col-md-8">
        <input name="ten_benh" type="text"  class="form-control" value="<?= $value['ten_benh'] ?>" id="ten_benh" placeholder="Bệnh">
        
      </div>
      <div class="col-md-8">
        
      </div>
    </div>
    
    <div class="form-group">
      <label for="trieu_chung" class="col-md-2 control-label">Triệu chứng</label>
       <div class="col-md-8">
      <textarea name="trieu_chung" class="form-control" value="<?= $value['trieu_chung'] ?>"  id="trieu_chung" rows="5" placeholder="Triệu chứng"></textarea>
     
    </div>
    <div class="col-md-8">
        
      </div>
     </div>
     <div class="form-group">
      <label for="mo_ta" class="col-md-2 control-label">Mô tả</label>
       <div class="col-md-8">
      <textarea name="mo_ta" class="form-control" id="mo_ta" value="<?= $value['mo_ta'] ?>"  rows="5" placeholder="Mô tả"></textarea>
     
    </div>
    <div class="col-md-8">
        
      </div>
     </div>
    
    
 <div class="form-group">
  <div class="col-md-10 col-md-offset-2">
    
     <input type="submit" class="btn btn-success nutajax" value="Update">
     <?php echo anchor('benh', '<div class="btn btn-info">Back</div>'); ?>

  </div>
   
 </div>
 <?php endforeach ?>
  </fieldset>


</form>
</div>
        
      </div>
    </div>
  </div> 

          
      	
        <?php echo anchor("benh/delete/$add->ma_benh", '<button class="btn btn-danger nutxoaajax">Xóa</button>') ?>
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

