<?php
require('top.inc.php');
$name='';
$description	='';
$icon_url='';
$image_url='';


$msg='';

if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from `services` where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$name=$row['name'];
		$description=$row['description'];
		$icon_url=$row['icon_url'];
		$image_url=$row['image_url'];

	}else{
		header('location:product.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$name=get_safe_value($con,$_POST['name']);
	$description=get_safe_value($con,$_POST['description']);
	$icon_url=get_safe_value($con,$_POST['icon_url']);
	$image_url=get_safe_value($con,$_POST['image_url']);


	$res=mysqli_query($con,"insert into `services`(name,description,icon_url,image_url,status) values('$name','$description','$image_url','$icon_url',1)");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){

			}else{
				$msg="Product already exist";
			}
		}else{
			$msg="Product already exist";
		}
	}



	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			if($name!=''){

				$update_sql="update `services` set name='$name',description='$description',image_url='$image_url',icon_url='$icon_url' where id='$id'";
			}else{
				$update_sql="update `services` set name='$name',description='$description',image_url='$image_url',icon_url='$icon_url' where id='$id'";
			}
			mysqli_query($con,$update_sql);
		}else{
			mysqli_query($con,"insert into `services`(name,description,image_url,status,icon_url,status) values('$name','$description','$image_url','$icon_url',1)");
		}
		header('location:product.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Services</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">

								<div class="form-group">
									<label for="categorie" class=" form-control-label">Service Name</label>
									<input type="text" name="name" placeholder="Enter product name" class="form-control" required value="<?php echo $name?>">
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Description</label>
									<textarea name="description" placeholder="Enter product description" class="form-control" required><?php echo $description?></textarea>
								</div>


								<div class="form-group">
									<label for="categories" class=" form-control-label">Icon Url</label>
									<input type="text" name="image_url" class="form-control" placeholder="please select icon from icons8.com and copy html embedded code and paste here !" <?php echo  $image_url?>>
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Image Url</label>
									<input type="text" name="icon_url" class="form-control" placeholder="save image at C:\xampp\htdocs\projectN\main\img ,enter image url as ./img/imagename.file_extension" <?php echo  $image_url?>>
								</div>

 								 <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>

<?php
require('footer.inc.php');
?>
