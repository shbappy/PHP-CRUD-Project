<?php
include "inc/header.php";
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">

            <h2>Update User Information</h2>

            <?php
//GET super glober variable dara url theke kono data k track kora hoy
                if( isset( $_GET['id']) ){
                    $userID = $_GET['id'];
                    
                    //To get the existing data from database for this user
                    $sql = "SELECT * FROM users WHERE id='$userID' ";
                    $data =mysqli_query( $db, $sql);


                    while( $row = mysqli_fetch_array( $data ) ){
                        $id           =$row ['id'];
                        $name         =$row['name'];
                        $fname        =$row['fname'];
                        $mname        =$row['mname'];
                        $address      =$row['address'];
                        $email        =$row['email'];
                        $phone        =$row['phone'];
                        $status       =$row['status'];
                        

                        ?>


                       <form action="" method="POST" class="needs-validation" novalidate>

                       <input type="hidden" name="updateUserID" value="<?php echo $id; ?>">
                            <div class="mb-3">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" class="form-control" value=<?php echo $name; ?> name="name" required />
                                <div class="invalid-feedback">
                                   Please choose a Name.
                                  </div>
 
                            </div>
                            <div class="mb-3">
                                <label for="name">Father's Name</label>
                                <input type="text" id="fname" class="form-control" value=<?php echo $fname; ?> name="fname" required />
                                <div class="invalid-feedback">
                                   Please choose a Name.
                                  </div>
 
                            </div>
                            <div class="mb-3">
                                <label for="name">Mother's Name</label>
                                <input type="text" id="mname" class="form-control" value=<?php echo $mname; ?> name="mname" required />
                                <div class="invalid-feedback">
                                   Please choose a Name.
                                  </div>
 
                            </div>
                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input type="text" id="address" class="form-control" value=<?php echo $address; ?> name="address" required />
                                <div class="invalid-feedback">
                                   Please choose a Address.
                                  </div>
 
                            </div>
                            <div class="mb-3">
                                <label for="email">Email Address</label>
                                <input type="text" id="email" class="form-control" value=<?php echo $email; ?> name="email" required />
                                    <div class="invalid-feedback">
                                        Please choose a Email Addresse.
                                    </div>
                            </div>
                            <div class="mb-3">
                                <label for="name">Phone Number</label>
                                <input type="number" id="phone" class="form-control" value=<?php echo $phone; ?> name="phone" required />
                                <div class="invalid-feedback">
                                    Please choose a Phone Number.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="status">Account Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Please Select the Status</option>
                                        <option value="1" <?php if ( $status == 1){ echo 'selected'; } ?> >Active</option>
                                        <option value="0" <?php if ( $status == 0){ echo 'selected'; } ?> >Inactive</option>
                                    </select>
                                <div class="invalid-feedback">
                                    Please choose a Phone Number.
                                </div>
                            </div>
                            <div class="mb-3">
                            
                                <input type="submit" name="dataUpdate" class="btn btn-primary" value="Update Data" />
                            </div>
                        </form>

                        <?php
                    }

                    if ( isset( $_POST['dataUpdate'] ) ){
                       $name     = mysqli_real_escape_string( $db, $_POST['name']);
                       $fname    = mysqli_real_escape_string( $db, $_POST['fname']);
                       $mname    = mysqli_real_escape_string( $db, $_POST['mname']);
                       $address  = mysqli_real_escape_string( $db, $_POST['address']);
                       $email    = mysqli_real_escape_string( $db, $_POST['email']);
                       $phone    = mysqli_real_escape_string( $db, $_POST['phone']);
                       $status   = mysqli_real_escape_string( $db, $_POST['status']);

                       

                       //update existing data into database
                       $sql = "UPDATE users SET name='$name', fname='$fname', mname='$mname', address='$address',email='$email', phone='$phone', status='$status' WHERE id='$userID' ";
                       $updateQuery = mysqli_query( $db, $sql );

                       if ( $updateQuery ) {
                        header("Location: index.php");
                      }
                      else {
                        die("Mysqli Error!" . mysqli_error($db));
                      }
                    }
                }



            ?>
            </div>
        </div>
    </div>
</section>


<?php
        include "inc/footer.php";
    ?>