<?php require "header.php"; ?>

<?php
if(isset($_POST['deactivate'])){
    $deactivate=mysqli_query($conn, "UPDATE users SET `status`='suspended' WHERE id='$id'");
    if($deactivate){
        header("location: ../login.php");
    }
}

?>


<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

              <div class="row">
                <div class="col-md-12">
                  
                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                      
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return true" enctype="multipart/form-data">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src='<?php echo $image; ?>'
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                              name="fileToUpload"
                            />
                          </label>
                          

                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Username</label>
                            <input
                              class="form-control"
                              type="text"
                              id="fullname"
                              name="username"
                              value=<?php echo $username; ?>
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Full Name</label>
                            <input class="form-control" type="text" name="fullName" id="lastName" value='<?php echo $name; ?>' />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              value='<?php echo $email; ?>'
                              placeholder="john.doe@example.com"
                              readonly
                            />
                          </div>
                         
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <div class="input-group input-group-merge">
                              
                              <input
                                type="text"
                                id="phoneNumber"
                                name="phone"
                                class="form-control"
                                placeholder="202 555 0111"
                                value='<?php echo $phone; ?>'
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value='<?php echo $address; ?>'/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">City</label>
                            <input class="form-control" type="text" id="city" name="city" placeholder="California" value='<?php echo $city; ?>' />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Zip Code</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zip"
                              placeholder="231465"
                              maxlength="6"
                              value='<?php echo $zip; ?>'
                            />
                          </div>
                          
                          <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">Language</label>
                            <select id="language" class="select2 form-select">
                              <option value="en">English</option>
                              
                            </select>
                          </div>
                          
                          <div class="mb-3 col-md-6">
                              <label for="zipCode" class="form-label">Referral link</label>
                              <div class="input-group">
                                  <input
                              type="text"
                              class="form-control"
                              id="ref"
                              name="ref"
                              placeholder="231465"
                              maxlength="6"
                              value='https://Betastockfx.com/register.php?ref=<?php echo $id; ?>'
                              readonly
                            />
                            <button type="button" onclick="copyRef()" class="btn btn-primary">Copy link</button>
                              </div>
                              <small class="text-secondary">
                                  Refer others to earn 5% of all their deposits
                              </small>
                            
                            
                          </div>
                        </div>
                        
                        <div class="mt-2">
                          <button type="submit" name="update" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  <div class="card">
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                          <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                      </div>
                      <form id="formAccountDeactivation" method='post' onsubmit="return true">
                        <div class="form-check mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation"
                            required
                          />
                          <label class="form-check-label" for="accountActivation"
                            >I confirm my account deactivation</label
                          >
                        </div>
                        <button type="submit" name='deactivate' class="btn btn-danger deactivate-account">Deactivate Account</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
<script>
    function copyRef() {
  /* Get the text field */
  var copyText = document.getElementById("ref");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  swal("Copied","Referral link copied to clipboard","success");
}

</script>

            <?php


if(isset($_POST['update'])){
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $full_name=mysqli_real_escape_string($conn,$_POST['fullName']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $address=mysqli_real_escape_string($conn,$_POST['address']);
    $zipcode=mysqli_real_escape_string($conn,$_POST['zip']);
    $city=mysqli_real_escape_string($conn,$_POST['city']);
    $organisation=mysqli_real_escape_string($conn,$_POST['organisation']);

    if(isset($_FILES['fileToUpload'])){
        //echo "<script>alert('file found')</script>";
        $image=$_FILES['fileToUpload']['name'];
        $image_tmp=$_FILES['fileToUpload']['tmp_name'];
        $target_dir = "images/avatar/";
        $target_file = $target_dir . basename($image);
        $move=move_uploaded_file($image_tmp, $target_file);
        if($move){
            $image=$target_dir.$image;

            
            mysqli_query($conn,"UPDATE `users` SET `image_src`='$image' WHERE `id`='$id'");
        }                     
    }
    else{
       // echo "<script>alert('file not found')</script>";
    }
    $update=mysqli_query($conn,"UPDATE `users` SET `name`='$full_name',`username`='$username', `zip_code`='$zipcode', `phone`='$phone',`address`='$address',`city`='$city', `organisation`='$organisation' WHERE `id`='$id'");
    //$update_plan=mysqli_query($conn,"UPDATE `accounts` SET `plan`='$plan' WHERE `user_id`='$id'");
    echo "  <script>
                swal('Good job!','your account has been updated','success');
                
            </script>";
}




            ?>



<?php require "footer.php";?>