<?php include 'header.php'; ?>
<br><br><br> 
<?php    
$mysqli=new mysqli('localhost','root','','property');
	if($mysqli->connect_error){

		printf("can not connect databse %s\n",$mysqli->connect_error);
		exit();
	}

	$query="SELECT * FROM propety";
	$read=$mysqli->query($query);


?>
<div class="container ">
  <div class="row text-center mb-5"><h2 class="font-weight-bold" style="color: orange;">Properties For Rent</h2></div>
  <div class="row mt-4">

<?php while($row=$read->fetch_assoc())  { ?>

    <div class="col-md-4">
      <div class="card">
        <img src="uploads/<?php echo  $row['images']; ?>" style="height:210px;">
        <div class="card-body">
          <h4 class="card-title"><?php echo  $row['name'];   ?></h4>
          <p class="card-text">
          <?php echo  $row['address'];   ?> </p>
          <div class="options d-flex flex-fill">
          </div>
          <div class="buy d-flex justify-content-between align-items-center">
            <div class="price text-success"><h5 class="mt-4"><?php echo  $row['monthly'];   ?> <small>per month</small></h5></div>
          </div>
        </div>
      </div>
    </div>

<?php  }  ?>

  </div>
</div><br><br><br>
<?php include 'loc.php'; ?><br><br><br>
<?php include 'footer.php'; ?>
