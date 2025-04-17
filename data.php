<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="sneakerstore";

$conn = new mysqli($servername, $username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ".conn->connect_error); 
} 

$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$card_number=$_POST['card_number'];
$expiry_month=$_POST['expiry_month'];
$expiry_year=$_POST['expiry_year'];
$ccv=$_POST['ccv'];

//Insert data into database
$ql="INSERT INTO payments (name, phone, address, card_number, expiry_month, expiry_year, ccv)
VALUES('$name', '$phone','$address','$card_number','$expiry_month','$expiry_year','$ccv')";

if($conn->query($sql) --- TRUE){

    echo "<script>alert('checkout complete')</script>";

    echo"<script>window.setTimeout(function(){ wiondow.location.href = 'index.html';},1000);</script>";
}else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}
?>