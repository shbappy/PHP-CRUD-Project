<?php
include "inc/header.php";
?>
    
        <section>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <form action="" method="POST" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" class="form-control" name="name" required />
                                <div class="invalid-feedback">
                                   Please choose a Name.
                                  </div>
 
                            </div>

                            <div class="mb-3">
                                <label for="fname">Father's Name</label>
                                <input type="text" id="fname" class="form-control" name="fname" required />
                                <div class="invalid-feedback">
                                   Please choose your Father's Name.
                                  </div>
 
                            </div>

                            <div class="mb-3">
                                <label for="mname">Mather's Name</label>
                                <input type="text" id="mname" class="form-control" name="mname" required />
                                <div class="invalid-feedback">
                                   Please choose your Mothers's Name.
                                  </div>
 
                            </div>

                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input type="text" id="address" class="form-control" name="address" required />
                                <div class="invalid-feedback">
                                   Please choose your Address.
                                  </div>
 
                            </div>
                            <div class="mb-3">
                                <label for="email">Email Address</label>
                                <input type="text" id="email" class="form-control" name="email" required />
                                    <div class="invalid-feedback">
                                        Please choose a Email Addresse.
                                    </div>
                            </div>
                            <div class="mb-3">
                                <label for="phone">Phone Number</label>
                                <input type="number" id="phone" class="form-control" name="phone" required />
                                <div class="invalid-feedback">
                                    Please choose a Phone Number.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="status">Account Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Please Select the Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                <div class="invalid-feedback">
                                    Please choose a Phone Number.
                                </div>
                            </div>
                            <div class="mb-3">
                            
                                <input type="submit" name="dataSubmit" class="btn btn-primary" value="submit" />
                            </div>
                        </form>

                            <?php
                            
                        ///post use korle url diye data jabe nah

                                if( isset($_POST['dataSubmit']) ){
                                   $name     = mysqli_real_escape_string( $db, $_POST['name'] );
                                   $fname    = mysqli_real_escape_string( $db, $_POST['fname'] );
                                   $mname    = mysqli_real_escape_string( $db, $_POST['mname'] );
                                   $address  = mysqli_real_escape_string( $db, $_POST['address'] );
                                   $email    = mysqli_real_escape_string( $db, $_POST['email'] );
                                   $phone    = mysqli_real_escape_string( $db, $_POST['phone']);
                                   $status   = mysqli_real_escape_string( $db, $_POST['status']);

                                    //writing an SQL code to insert new data into our database table -- users table

                                    $sql = " INSERT INTO users( name, fname, mname, address, email, phone, status, join_date ) VALUES ( '$name', '$fname', '$mname'; '$address'; '$email', '$phone', '$status', now() )";


                                    
                                   
                                }
                            ?>



                    </div>
                </div>
            </div>

        </section>






    <?php
        include "inc/footer.php";
    ?>
