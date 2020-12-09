<?php
$mysqli=new mysqli('localhost','root','','property');
	if($mysqli->connect_error){

		printf("can not connect databse %s\n",$mysqli->connect_error);
		exit();
	}

if(isset($_GET['posts'])){

	$id=$_GET['posts'];
	$query= "SELECT * FROM propety where id='$id'";
	$readd=$mysqli->query($query);
}

?>
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="#">
                        DreamProperty
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item">
                        <a class="btn ml-5 n-cnt" href="logout.php" role="button" style="border:none; border-radius:30px; background:#ff9108; color:#fff; letter-spacing: 2px; padding: 5px 12px; font-weight: 600;">
                        Logout </a>
                        </li>
                    </ul>
                </div>
            </nav><br><br><br><br><br><br>


<div class="container">
    <?php while ($row= $readd->fetch_assoc()) {  ?>

      <div class="container ">
            <div class="productdetailbox row">
                <div class="col-md-6 fig">
                <div class="row">
                <div class="col-md-12">
                <?php  $image_name="SELECT * FROM propety as p join details as d 
      					on p.id =d.proid where d.proid =".$row['id'];
      					$read1=$mysqli->query($image_name);
      					foreach ($read1 as $value) { ?>
      						<img src="uploads/<?php echo $value['images']; ?>" style="height:150px; width:140px;"/>
      						
      					<?php  } ?>
                    </div>
                </div>
                </div>
                <div class="col-md-6 main">
                    <h2><?php echo $row['name']; ?></h2><br>
                    <h5><i class="fa fa-map-marker-alt"></i> <?php echo $row['address']; ?></h5><br>
                    <p><?php echo $row['descrip']; ?></p><br>
                    <h3 class="price-kit">
                      Monthly: <?php echo $row['monthly']; ?>
                     </h3>
                </div>
            </div>
        </div>
    <?php  } ?>


</div>
<br>
<hr>
<br><br>
<?php include 'input.php'; ?>
<br>
<br>
<?php include 'footer.php'; ?>

