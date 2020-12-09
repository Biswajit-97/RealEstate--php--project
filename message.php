<?php   

  require 'action.php';

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
                            <a class="nav-link" href="addprop.php">Add Property</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Messages</a>
                        </li>
                        <li class="nav-item">
                        <a class="btn ml-5 n-cnt" href="logout.php" role="button" style="border:none; border-radius:30px; background:#ff9108; color:#fff; letter-spacing: 2px; padding: 5px 12px; font-weight: 600;">
                        Logout </a>
                        </li>
                    </ul>
                </div>
            </nav><br><br><br><br>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <?php
        $sql= "SELECT * FROM comment_table ORDER BY id DESC";
        $result= $conn->query($sql);
        while($row=$result->fetch_assoc()){
      ?>
      <div class="card mb-2 border-secondary">
          <div class="card-header bg-secondary py-1 text-light">
            <span class="font-italic"> <?= $row['name'] ?></span> 
            <span class="float-right font-italic">On: <?= $row['cur_date'] ?></span>
          </div>
          <div class="card-body py-2">
            <p class="card-text"><?= $row['comment'] ?></p>
          </div>
      </div>


       <?php } ?>
    
    </div>
  </div>

</div>
<br><br>
<?php  include 'footer.php' ; ?>
