<?php
include 'nav\nav.php';
include 'query.php';
$obj = new conn();
if($_SERVER['REQUEST_METHOD']=='POST'){

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql=$obj->registration($name,$phone,$email,$password);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Registration successfull.');</script>";
echo "<script>window.location.href='login.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
}


  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="bootstrap.css">
   
</head>
<body>
<div class="container my-5">

   <div class="row">
       <div class="col-6">
       <img src="image\1.jpg"  style="width: 24rem;">
       
       </div>
       <div class="col-6">

     
<form method="POST" >
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name ="name"  style="width: 20rem;">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone No.</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name ="phone"  style="width: 20rem;">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name ="email"  style="width: 20rem;">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name ="password"  style="width: 20rem;">
  </div>
 
  <button type="submit" class="btn btn-dark">SINGUP</button>
</form>
       </div>
   </div>
</div>
</body>
</html>