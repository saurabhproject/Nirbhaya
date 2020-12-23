<?php 
	include "header.php";
	include  "connection.php";
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Volunteer Page</h1>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                           <form name="form1" action="" method="post"> 
								<div class="card-body">
									<div class="col-lg-6">
										<div class="card">
											<div class="card-header"><strong>Volunteer Add</strong></div>
											<div class="card-body card-block">
											<div class="form-group"><label for="company" class=" form-control-label">Full Name</label><input type="text" placeholder="Volunteer Name" class="form-control" name="name" required=""></div>
											<div class="form-group"><label for="vat" class=" form-control-label">Email</label><input type="email" placeholder="Email Address" class="form-control" name="email" required=""></div>
											<div class="form-group"><label for="vat" class=" form-control-label">Mobile</label><input type="text" placeholder="Mobile No" class="form-control" name="mobile" required=""></div>
											<div class="form-group"><label for="vat" class=" form-control-label">Address</label><input type="text" placeholder="Address" class="form-control" name="address" required=""></div>
											<div class="form-group"><label for="vat" class=" form-control-label">ID Proof</label><br><input type="file" name="proof" required="" accept=".pdf"></div>
											<div class="form-group"><label for="vat" class=" form-control-label">Volunteer Photo</label><br><input type="file" name="vphoto" required="" accept=".jepg,.jpg,.png"></div>
											<div class="form-group"><input type="submit" name="submit1" value="Done" class="btn btn-success"></div>						
											</div>
										</div>
									</div>
									 <div class="col-lg-6">
										
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
	mysqli_query($link,"insert into volunteer values(NULL,'$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[address]','$_POST[proof]','$_POST[vphoto]')") or die(mysqli_error($link));
?>
	<script type="text/javascript">
		alert("volunteer added successfully!");
		window.location.href=window.location.href;
	</script>
	<?php
}
		 
?>		 

 <?php
		include "footer.php"
   ?>