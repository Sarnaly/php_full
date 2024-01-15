<div class="personal_info col-sm-12 col-md-12 col-lg-6 col-xxl-6">
<?php 
	if(isset($_POST['photo_update'])){
		$student_photo=$_FILES['photo']['name'];
		  $photo_tmp=$_FILES['photo']['tmp_name'];
		$photo_update=mysqli_query($admin_dbcon,"UPDATE `logo_change` SET `logo`= WHERE `id`='1'");
		if($photo_update){
		  move_uploaded_file($photo_tmp,'images/'.$student_photo);
		  echo "<script>
		  alert('Your photo successfully updated!');
		  window.location.href='admin_index.php?page=main_logo';
		</script>";
		$student_photo=false;
		}
		else{
		  echo "<script>
		  alert('Photo update failed!');
		  window.location.href='admin_index.php?page=main_logo';
		</script>";
		}
	  }
	  $logo_data_select = mysqli_query($admin_dbcon , "SELECT * FROM `logo_change` WHERE `id`='1'");
	  $logo_data_fatch = mysqli_fetch_assoc($logo_data_select);
	?>
<form action="" method="POST" enctype="multipart/form-data">
    <img class="img-thumbnail" style="width:220px;height:220px;" src="images/<?=$logo_data_fatch['logo'];?>" alt=""><br>
    <label for="photo" class="form-label">Profile Picture</label>
    <input type="file" class="form-control" name="photo" id="photo" required style="width:30%;" >
    <br>
    <button type="submit" name="photo_update"  class="btn btn-primary">Change Profile</button>
</form>
</div>

















  <span class="title">Login</span>
                <form action="" method="post">
                    <div class="input-field">
                        <input type="text" name="username" id="<?php if(isset($input_error['username'])){echo $input_error['username'];}?>" placeholder="Enter your username" >
                        <i class="uil uil-envelope icon" id="<?php if(isset($input_error['username'])){echo $input_error['username'];}?>"></i>
                        <span style="color: red;"></span>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" id="<?php if(isset($input_error['password'])){echo $input_error['password'];}?>" name="password" placeholder="Enter your password" >
                        <i class="uil uil-lock icon" id="<?php if(isset($input_error['password'])){echo $input_error['password'];}?>"></i>
                        <i class="uil uil-eye-slash showHidePw" id="<?php if(isset($input_error['password'])){echo $input_error['password'];}?>"></i>
                        <span style="color: red;"></span>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="./admin/forgot_password/index.php" class="text">Forgot password?</a>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Login" name="submit">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>