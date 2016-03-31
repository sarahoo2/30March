
<?php
require_once "config.php";
session_start();
    if(isset($_POST['age']))
    {
    $_SESSION['name']  =$_POST['name'];
    $_SESSION['age']   =$_POST['age'];
    $_SESSION['address']=$_POST['address'];
    $_SESSION['gender']=$_POST['gender'];
    $_SESSION['email'] =$_POST['email'];
    $_SESSION['country']=$_POST['country'];
    }
    if(isset($_POST['save']))
    {
    $name=$_SESSION['name'];
    $age =$_SESSION['age'] ;
    $address=$_SESSION['address'];
    $gender=$_SESSION['gender'];
    $email=$_SESSION['email'];
    $country=$_SESSION['country'];

    $query="SELECT name,email from biodata where name='$name' AND email='$email'";
    $checkUser=$con->query($query);

    if($checkUser->num_rows> 0)
    {
      echo "Already exist";
    }

    else
    {
      $sql = "INSERT INTO biodata (name,age,gender,address,email,country) VALUES ( '$name' ,'$age','$gender','$address','$email','$country')";
      if($con->query($sql)===true){
      echo "okay inserted";
    }

    else
    {
      echo "error". $sql."<br />". $con->error;
    }
    }
    }
   ?>
<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
    <title>
    </title>
  </head>
    <body>
     <p>
       Name: <?php echo $_SESSION['name']; ?></br>
     </p>

     <p>
       Age: <?php echo $_SESSION['age']; ?></br>
     </p>

     <p>
       Address: <?php echo $_SESSION['email']; ?></br>
     </p>

     <form  action="" method="post">
       <input type="hidden" name="save" value="Save" />
       <input type="submit"  value="Save">
     </form>
   </body>
</html>
