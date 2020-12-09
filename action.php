<?php   
  $mysqli=new mysqli('localhost','root','','comment');
  if($mysqli->connect_error){
    printf("can not connect databse %s\n",$mysqli->connect_error);
    exit();
  }

  $msg = "";

  if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $comment=$_POST['comment'];
      $date=date("Y-m-d");

      $query = "INSERT INTO comment_table(name,comment,cur_date)VALUES('$name','$comment','$date')";
      $insert=$mysqli->query($query);

      if($mysqli->query($query)){
          $msg = "Thank you! We will get back soon";
      }
      else{
          $msg= "<span style='color:red'>Retry again, something went wrong !</span>";
      }
  }

?> 