<?php 
	include "header.php";
	include "connection.php";
?>

		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User Login</h1>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                           <form name="form1" action="" method="POST"> 
								<div class="card-body">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-header"><strong>Login Here</strong></div>
											<div class="card-body card-block">
											<div class="form-group"><label  class=" form-control-label">Username:</label><input type="text" placeholder="Enter New Username" class="form-control" name="username" required=""></div>
											<div class="form-group"><label  class=" form-control-label">Password:</label><input type="password" placeholder="Enter New Password" class="form-control" name="password" required=""></div>
											<div class="form-group"><input type="submit" name="submit1" value="Log In" class="btn btn-success"></div>						
											</div>
										</div>
									</div>
									
								</div>
							</form>
                        </div> 
                    </div>
                                               
                </div>
            </div>
         </div>
		 
		 
		 <?php
					if(isset($_POST["submit1"]))
					{
					$count=0;
					$res=mysqli_query($link,"select * from register where username='$_POST[username]' && password='$_POST[password]'");
					$count=mysqli_num_rows($res);
					
					if($count==0)
					{
					?>
						<script type="text/javascript">
					alert("Invalid Username Or Password!!! Try Again.");
					window.location.href=window.location.href;
						</script>
					<?php	
					}
					else 
					{
						?>
						<script type="text/javascript">
						alert("Log In successfully!!!")
							window.location="user/dashboard.php";
						</script>
						<?php
					}
					}	
				?>
<?php 
	include "footer.php";
	
?>