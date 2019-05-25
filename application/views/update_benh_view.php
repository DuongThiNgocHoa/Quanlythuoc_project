<?php include_once('header_view.php'); ?>
<div class="container">    
      <h3 class="text-xs-center"> Sửa thông tin  </h3>
      <hr>     
  </div>
 <form action="benh/updateData"  method="post" enctype="multidata/form-data">
   <?php if (count($ketqua)) :?>
  <?php foreach ($ketqua as  $value): ?>
<div class="modal fade " id="myModal1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
              
               <div class="container">
          
            
          <fieldset>
            <legend>Bệnh</legend>
            <div class="form-group">
              <label for="ten_benh" class="col-md-2 control-label">Bệnh</label>
              <div class="col-md-8">
                <input name="ten_benh" type="text"  class="form-control" id="ten_benh" value="<?php echo $ketqua->ten_benh;?>" placeholder="Bệnh">
                
              </div>
              <div class="col-md-8">
                
              </div>
            </div>
            
            <div class="form-group">
              <label for="trieu_chung" class="col-md-2 control-label">Triệu chứng</label>
               <div class="col-md-8">
              <textarea name="trieu_chung" class="form-control" id="trieu_chung" rows="5" value="<?php echo $ketqua->trieu_chung;?>"placeholder="Triệu chứng"></textarea>
             
            </div>
            <div class="col-md-8">
                
              </div>
             </div>
             <div class="form-group">
              <label for="mo_ta" class="col-md-2 control-label">Mô tả</label>
               <div class="col-md-8">
              <textarea name="mo_ta" class="form-control" id="mo_ta" rows="5" value="<?php echo $ketqua->mo_ta;?>" placeholder="Mô tả"></textarea>
             
            </div>
            <div class="col-md-8">
                
              </div>
             </div>
             <div class="form-group">
              <div class="col-md-10 col-md-offset-2">
                
                 <button type="Update" class="btn btn-success " value="Update">Update</button>
                 <?php echo anchor('benh', '<div class="btn btn-info">Back</div>'); ?>

              </div>
   
 </div>
  </fieldset>


</div>
        
      </div>
    </div>
      
  </div>
<?php endforeach ?>
</form>

 