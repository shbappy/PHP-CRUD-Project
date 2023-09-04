<?php
include "inc/header.php";
?>

    
        <section>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">


                    <h2>All Users Data</h2>


                    <table id="usersData" class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                            <th scope="col">#Sl.</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Father's Name</th>
                            <th scope="col">Mother's Name</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone Number</th>
							<th scope="col">Status</th>
							<th scope="col">Join Date</th>
							<th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>


							<?php

							$sql = "SELECT * FROM users ORDER BY name ASC";
							//sending the SQL to the database

							$allData =mysqli_query($db, $sql);

								$sl = 0;
							//return the data from database

							//mysqli_fetch_assos--- function dara data gula k recieve kore anar jnno use hoy

							while( $row = mysqli_fetch_assoc( $allData ) ){
								$id           =$row ['id'];
								$name         =$row['name'];
								$fname        =$row['fname'];
								$mname        =$row['mname'];
								$address      =$row['address'];
								$email        =$row['email'];
								$phone        =$row['phone'];
								$status       =$row['status'];
								$join_date    =$row['join_date'];
								$sl++;

								?>


									<tr>
									<th scope="row"><?php echo $sl; ?></th>
									<td> <?php echo $name; ?></td>
									td> <?php echo $fname; ?></td>
									td> <?php echo $mname; ?></td>
									td> <?php echo $address; ?></td>
									<td><?php echo $email; ?></td>
									<td><?php echo $phone; ?></td>
									<td>
									    <?php 
										  if( $status== 1){
											echo '<span class="badge bg-success">Active</span>';
										  }
										  else if( $status== 0 ){
											echo '<span class="badge bg-danger">Inactive</span>';
										  }
										?>
									</td>
									<td><?php echo $join_date; ?></td>
									<td>
										<div class="btn btn-group">
											<a href="update.php?id=<?php echo $id; ?>" Class="btn btn-success btn-sm">Update</a>
											<a href="" Class="btn btn-danger btn-sm">Delete</a>
										</div>
									</td>
									</tr>
								<?php

							}

							?>



                        </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </section>






    <?php
        include "inc/footer.php";
    ?>	
  