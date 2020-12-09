<?php   

  require 'action.php';

?>

 
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6 bg-light rounded mt-2">
      <h4 class="text-center p-2">Any Quries ? <span style="color:orange;"> Write Queries Here</span></h4><br><br>
      <form  method="POST" >
        <div class="form-group">
          <input type="text" name="name" class="form-control rounded-0" placeholder="Username please" required>
        </div>
        <div class="form-group">
          <textarea name="comment" class="form-control rounded-0" placeholder="Write Quries " required></textarea>
        </div>
        <div class="form-group">
          <input name="submit" type="submit" class="btn btn-warning rounded-0" value="Send to us">

          <h5 class="float-right text-success p-2"><?= $msg; ?></h5>
        </div>
      </form>
    </div>
  </div>

</div>


