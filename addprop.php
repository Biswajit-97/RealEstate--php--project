<?php
$mysqli=new mysqli('localhost','root','','property');
	if($mysqli->connect_error){
		printf("can not connect databse %s\n",$mysqli->connect_error);
		exit();
	}

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$monthly=$_POST['monthly'];
	$address=$_POST['address'];
	$access=$_POST['access'];
	$floor=$_POST['floor'];
	$utility=$_POST['utility'];
	$descrip=mysqli_real_escape_string($mysqli ,$_POST['descrip']);
	
	$target_dir="uploads/";
	$target_file= $target_dir . basename($_FILES["images"]["name"]);
	$temp_file=$_FILES["images"]["name"];
	move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);
	
	
	$query="INSERT INTO propety (name,monthly,address,access,floor,utility,descrip,images) VALUES ('$name','$monthly','$address','$access','$floor','$utility','$descrip','$temp_file')";
    $insert=$mysqli->query($query);

    $last_id = $mysqli->insert_id;
	$c=count($_FILES['img']['name']);
	if($insert){
		if($c < 10){
			for ($i=0; $i <$c; $i++) { 
				$img_name=$_FILES['img']['name'][$i];
				move_uploaded_file($_FILES['img']['tmp_name'][$i] , "uploads/" .$img_name);
				$query_multi="INSERT INTO details(images,proid) VALUES ('$img_name','$last_id')";
				$ins=$mysqli->query($query_multi);
			}
		}

	}
    


}


?>
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="admin.php">
                        DreamProperty
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item   mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="admin.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="#">Add Property</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="message.php">Messages</a>
                        </li>
                        <li class="nav-item">
                        <a class="btn ml-5 n-cnt" href="logout.php" role="button" style="border:none; border-radius:30px; background:#ff9108; color:#fff; letter-spacing: 2px; padding: 5px 12px; font-weight: 600;">
                        Logout </a>
                        </li>
                    </ul>
                </div>
            </nav> <br> <br> <br> <br> <br>


<div class="container mt-4"> 

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Add a Property </legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"> Property</label>
      <div class="col-lg-10">
        <input type="text" name="name" class="form-control"  placeholder="Name Of Property">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Monthly Charge</label>
      <div class="col-lg-10">
        <input type="text" name="monthly" class="form-control"  placeholder="Monthly Charge">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="address" rows="3" id="textArea"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Access</label>
      <div class="col-lg-10">
        <input type="text" name="access" class="form-control"  placeholder="Access">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Floor Space</label>
      <div class="col-lg-10">
        <input type="text" name="floor" class="form-control"  placeholder="Floor Space">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Utility</label>
      <div class="col-lg-10">
        <input type="text" name="utility" class="form-control"  placeholder="Utility">
      </div>
    </div>

    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Description</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="descrip" rows="3" id="textArea"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Featured Image</label>
      <div class="col-lg-10">
        <input type="file" name="images">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Rooms Images</label>
      <div class="col-lg-10">
        <input type="file" name="img[]" multiple>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-danger">Cancel</button>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

</div>


<?php  include 'footer.php' ; ?>