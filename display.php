
<?php
require_once "config.php";
session_start();
if(isset($_POST['name']))
echo $_SESSION['name']  =$_POST['name'];
echo $_SESSION['age']   =$_POST['age'];
echo $_SESSION['address']=$_POST['address'];
echo $_SESSION['gender']=$_POST['gender'];
echo $_SESSION['email'] =$_POST['email'];
echo $_SESSION['country']=$_POST['country'];
if(isset($_POST['save']))
{
echo  $name   =$_SESSION['name'];
echo  $age    =$_SESSION['age'];
echo  $address=$_SESSION['address'];
echo  $gender=$_SESSION['gender'];
echo  $email  =$_SESSION['email'];
echo  $country=$_SESSION['country'];

  // $query="SELECT name,email from biodata where name='$name' AND email='$email'";
  // $checkUser=$con->query($query);
  //
  // if($checkUser->num_rows> 0)
  // {
  //   echo "Already exist";
  // }
  // else
  // {
  //   $sql = "INSERT INTO biodata (name,age,gender,address,email,country) VALUES ('$name',$age,'$gender','$address','$email','$country')";
  //   if($con->query($sql)===true){
  //     echo "okay inserted";
  //
  //   }
  //   else {
  //     echo "error". $sql."<br />". $con->error;
  //     }

  //  }

}

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form  action="display.php" method="post">
   <input type="submit" name="save" value="Save">
     </form>

   </body>
 </html>
