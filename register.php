<?php 
	include "header.php";
	include "connection.php";
?>

		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User Registration</h1>
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
											<div class="card-header"><strong>Register Here</strong></div>
											<div class="card-body card-block">
											<div class="form-group"><label  class=" form-control-label">First Name:</label><input type="text" placeholder="Enter Your First Name" class="form-control" name="fname" required=""></div>
											<div class="form-group"><label  class=" form-control-label">Last Name:</label><input type="text" placeholder="Enter Your Last Name" class="form-control" name="lname" required=""></div>
											<div class="form-group"><label  class=" form-control-label">Username:</label><input type="text" placeholder="Enter New Username" class="form-control" name="username" required=""></div>
											<div class="form-group"><label  class=" form-control-label">Password:</label><input type="password" placeholder="Enter New Password" class="form-control" name="password" required=""></div>
											<div class="form-group"><label  class=" form-control-label">Email:</label><input type="email" placeholder="Enter Your Mail Id" class="form-control" name="email" required=""></div>
											<div class="form-group"><label  class=" form-control-label">Contact:</label><input type="text" placeholder="Enter Your Contact No." class="form-control" name="contact" required=""></div>
											<div class="form-group"><label  class=" form-control-label">Photo Of User:</label><br><input type="file" name="photo" required="" value="Upload photo" accept=".jepg,.jpg,.png"></div>
											<div class="form-group"><input type="submit" name="submit1" value="Register" class="btn btn-success"></div>						
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
		$count = 0;
		$res = mysqli_query($link, "select * from register where username='$_POST[username]'") or die(mysqli_error($link));
		$count = mysqli_num_rows($res);
		
		if($count>0)
		{
			?>
			<script type="text/javascript">
				alert("Username already Exist!");
				window.location.href=window.location.href;
			</script>
			<?php
		} else {
			mysqli_query($link,"insert into register values(NULL,'$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$_POST[photo]')") or die(mysqli_error($link));
			?>
			<script type="text/javascript">
				alert("Registered successfully!");
				window.location="login.php";
				</script>
			<?php
		}
	}
	?>



<?php
	include "footer.php";
?>