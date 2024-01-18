<?php  

$conn=mysqli_connect("localhost","root","","vehicle_db");

if(!$conn){
echo "connection error";

}

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['mobileNumber'];
    $address = $_POST['address'];
    $ftype = $_POST['fuel_type'];
    $vnumber = $_POST['v_number'];
    $ac = $_POST['ac'];
 


}



?>