<?php
require('top.inc.php');
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Add Admin User</strong><small> </small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">

								<div class="form-group">
									<label for="categorie" class=" form-control-label">Username</label>
									<input type="text" name="username" placeholder="Enter Username" class="form-control">
								</div>


								<div class="form-group">
									<label for="categories" class=" form-control-label">Password</label>
									<input type="text" name="password" class="form-control" placeholder="Enter Password">
								</div>


 								 <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php //echo $msg?></div>
							</div>
						</form>
						<?php
						if(isset($_POST['submit'])){
							$username=get_safe_value($con,$_POST['username']);
							$password=get_safe_value($con,$_POST['password']);
              $password=md5($password);

							$res=mysqli_query($con,"INSERT INTO admin_users(username,password) VALUES ('$username','$password')");
							if($res>0){
								echo "Data Inserted Successfully";
							}else{
								echo "non inserted";
							}
						}
						?>
                     </div>
                  </div>
               </div>
            </div>
         </div>

<?php
require('footer.inc.php');
?>
