<?php
    include "code.php";
?>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="index.php">
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
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a class="btn ml-5 n-cnt" href="register.php" role="button" style="border:none; border-radius:30px; background:#ff9108; color:#fff; letter-spacing: 2px; padding: 5px 12px; font-weight: 600;">
                        Register </a>
                        </li>
                    </ul>
                </div>
            </nav>
    <br><br>
    <br><br>
<div class="container ">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="code.php" method="post">
              <div class="form-label-group">
                <input name="username" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
                <p class="text-center" style="color:red;">
                    <?php echo $message;  ?>
                </p>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="btnLogin" type="submit">Sign in</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-secondary btn-block text-uppercase" type="submit">New user ? Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>


<?php include 'footer.php'; ?>
