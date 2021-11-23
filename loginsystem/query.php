<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'loginsystem');
class conn
{
function __construct()
{
$this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection


}
 
// Function for registration
	public function registration($name,$phone,$email,$password)
	{
	$result=mysqli_query($this->conn,"INSERT INTO `signup` (`name`,`phone`,`email`,`Password`) values('$name','$phone','$email','$password')");
	return $result;
	}
// Function for signin
 
public function getdata(){
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql="SELECT * from `signup` where email='$email' and Password='$password'";
    $result=mysqli_query($this->conn,$sql);
    $num=mysqli_num_rows($result);
    if($num){
      
        session_start();
        $_SESSION['email']=$email;
        echo "<script>alert('You are logedin.');</script>";
echo "<script>window.location.href='index.php'</script>";

  
    
    }else{
      echo "ns";
    }
    
}

}



}
?>