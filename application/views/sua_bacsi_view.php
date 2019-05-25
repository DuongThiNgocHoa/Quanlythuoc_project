<!DOCTYPE html>
<html lang="en"><head>
	<title> Giao diện hiển thị danh sách nhân sự </title>
	<meta charset="iso-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1">  

	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
</head>
<body >

	 
  
 		<div class="container">
		<div class="text-xs-center">
			<h3 class="display-3"> Sửa  bác sĩ</h3>
			<hr>
		</div>
	</div>

 		 
 			<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>/index.php/bacsi/update_bacsi">


				<?php foreach ($dulieukq as $value): ?>
					
			

 				<div class="form-group row">
					<div class="col-sm-6">
						<div class="row">
							<label for="anh" class="col-sm-4 form-control-label text-xs-right ">Ảnh đại diện</label>
		 					<div class="col-sm-8">
		 						<div class="row">
		 							<div class="col-sm-6">
		 								<img src="<?= $value['anhavatar'] ?>" alt="" class="img-fluid">
		 							</div>
		 						</div>
		 						<input type="hidden" name="id" value="<?= $value['id'] ?>">
		 						<input type="hidden" name="anhavatar2" value="<?= $value['anhavatar'] ?>">
		 						<input name="anhavatar" type="file" class="form-control" id="anhavatar" placeholder="Upload anh">

		 					</div>

						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							 
			 					<label for="ten" class="col-sm-4 form-control-label text-xs-right">Tên nhân viên</label>
			 					<div class="col-sm-8">
			 						<input name="ten" type="text" class="form-control" id="ten" placeholder="Tên nhân viên" value="<?= $value['ten'] ?>">
			 					</div> 					
			 				 
						</div>
					</div>


 					
 				</div>
 				 
				
 				 

				<div class="form-group row">

					<div class="col-sm-6">
						<div class="row">
							<label for="tuoi" class="col-sm-4 form-control-label text-xs-right">Tuổi</label>
		 					<div class="col-sm-8">
		 						<input value="<?= $value['tuoi'] ?>" name="tuoi" type="number" class="form-control" id="tuoi" placeholder="tuoi">
		 					</div> 	
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<label for="sdt" class="col-sm-4 form-control-label text-xs-right">Tel</label>
		 					<div class="col-sm-8">
		 						<input value="<?= $value['sdt'] ?>" name="sdt" type="text" class="form-control" id="sdt" placeholder="sdt">
		 					</div>

						</div>
					</div>
				


 									
 				</div>
 				 <div class="form-group row">
			 		<div class="col-sm-6">
						<div class="row">
						<label for="sodonhang" class="col-sm-4 form-control-label text-xs-right">Số đơn hàng</label>
	 					<div class="col-sm-8">
	 						<input value="<?= $value['sodonhang'] ?>" name="sodonhang" type="number" class="form-control" id="sodonhang" placeholder="sodonhang">
	 					</div>

						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
						<label for="linkfb" class="col-sm-4 form-control-label text-xs-right">Link facebook </label>
	 					<div class="col-sm-8">
	 						<input value="<?= $value['linkfb'] ?>" name="linkfb" type="text" class="form-control" id="linkfb" placeholder="linkfb">
	 					</div>

						</div>
					</div>



 				 </div>

				<?php endforeach ?>

 				 
 				<div class="form-group row text-xs-center">
 					<div class="col-sm-offset-2 col-sm-10">
 						<button type="submit" class="btn btn-outline-success">Lưu</button>
 
 					</div>
 				</div>
 			</form>
 		 

 	</div>
</body>
</html>