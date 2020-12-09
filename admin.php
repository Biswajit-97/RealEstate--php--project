<?php
session_start();
if(isset($_SESSION['role']))
{
    if($_SESSION['role'] != 'Admin')
    {
        header('Location: user.php');
    }
}
else
{
    header('Location: login.php');
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
                        <li class="nav-item   mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="addprop.php">Add Property</a>
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
            </nav>
            <br><br><br> <br><br>
            <?php include 'property.php'; ?><br><br>
            <?php include 'loc.php'; ?><br><br><br>
            <?php include 'footer.php'; ?>