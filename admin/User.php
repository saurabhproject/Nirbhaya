<?php 
	include "header.php";
	include  "../connection.php";
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User Details</h1>
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
													<strong class="card-title">Users Registered</strong>
												</div>
												<div class="card-body">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th scope="col">Sr</th>
																<th scope="col">First Name</th>
																<th scope="col">Last Name</th>
																<th scope="col">Username</th>
																<th scope="col">Email</th>
																<th scope="col">Contact</th>
																<th scope="col">photo</th>
																<th scope="col">Delete</th>
															</tr>
														</thead>
														<tbody>
														<?php
														$count=0;
														$res=mysqli_query($link,"select * from register");
														 while($row=mysqli_fetch_array($res))
														 {
															$count=$count+1; 
														?>
															<tr>
																<th scope="row"><?php echo $count; ?></th>
																<td><?php echo $row["fname"]; ?></td>
																<td><?php echo $row["lname"]; ?></td>
																<td><?php echo $row["username"]; ?></td>
																<td><?php echo $row["email"]; ?></td>
																<td><?php echo $row["contact"]; ?></td>
																<td><?php echo $row["photo"]; ?></td>
																<td><a href="delete1.php?id=<?php echo $row["id"]; ?>"> Delete </a></td>
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
		include "footer.php"
   ?>