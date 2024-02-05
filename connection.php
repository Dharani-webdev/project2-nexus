<?php
$servername="localhost";
$username="root";
$password="";
$dbname="customer_data";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed".mysqli_connect_error();}
if(isset($_POST['save'])){
    $cname=$_POST['name'];
    $emailid=$_POST['email'];
    $contactnum=$_POST['contact'];
    $sql_query="INSERT INTO customer(name,email,contact) VALUES('$cname','$emailid','$contactnum')";
    if(mysqli_query($conn,$sql_query)){
        echo "Customer data stored successfully.";
    }
    else{
        echo "Error: ".$sql . "" . mysqli_error($conn);
    }
    
}
?>
