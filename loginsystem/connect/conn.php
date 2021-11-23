

<?php
define('server','localhost');
define('username','root');
define('password' ,'');
define('db', 'loginsystem');
class connect
{
function __construct()
{
$this->conn = new mysqli(server,username,password,db);

if($this->conn){
    echo "done";
}
else{
    echo "not";
}

}








}
$obj = new connect();

?>