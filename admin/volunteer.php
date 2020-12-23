<?php 
	include "header.php";
	include  "../connection.php";
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
									
									 <div class="col-lg-12">
											<div class="card">
												<div class="card-header">
													<strong class="card-title">Volunteer Details</strong>
												</div>
												<div class="card-body">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th scope="col">Sr</th>
																<th scope="col">Full Name</th>
																<th scope="col">Email</th>
																<th scope="col">Mobile</th>
																<th scope="col">Address</th>
																<th scope="col">ID proof</th>
																<th scope="col">Photo</th>
																<th scope="col">Edit</th>
																<th scope="col">Delete</th>
															</tr>
														</thead>
														<tbody>
														<?php
														$count=0;
														$res=mysqli_query($link,"select * from volunteer");
														 while($row=mysqli_fetch_array($res))
														 {
															$count=$count+1; 
														?>
															<tr>
																<th scope="row"><?php echo $count; ?></th>
																<td><?php echo $row["name"]; ?></td>
																<td><?php echo $row["email"]; ?></td>
																<td><?php echo $row["mobile"]; ?></td>
																<td><?php echo $row["address"]; ?></td>
																<td><?php echo $row["proof"]; ?></td>
																<td><?php echo $row["vphoto"]; ?></td>
																<td><a href="edit.php?id=<?php echo $row["id"]; ?>"> Edit </a></td>
																<td><a href="delete.php?id=<?php echo $row["id"]; ?>"> Delete </a></td>
															</tr> 
															<?php
														 }
														?>
															
															
														</tbody>
													</table>
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