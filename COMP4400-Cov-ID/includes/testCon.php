<?php
$conn=mysqli_connect("localhost","root","root");
if($conn){
    echo"ok";
}else{
    echo"error";
}
phpinfo();