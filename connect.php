<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

//connection
$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

//create table..
// $sql = "CREATE TABLE myguest(
//  Id int(40) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//  firstname VARCHAR(49),
//  lastname VARCHAR(49),
//  email VARCHAR (49),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn ->query($sql)){
//     echo "succeful created table";
// }else{
//     echo "fail to create table" .$conn->error;
// }

//insert table
 
 // $sql = "insert into myguest(firstname,lastname,email) VALUES('twalibu','myanza','tibe@gmail.com')";
 // if($conn->query($sql)==TRUE){
 // 	$last_id = $conn->insert_id;
 // 	echo "sucefuly data inserted. Last inserted id is:" .$last_id;
 // }else{
 // 	echo "error" .$sql. "<br>".$conn->error;
 // }
//select data
 $sql = "select id,firstname from myguest";
 $result = $conn->query($sql);
 if($result->num_rows >0){
 	while($row = $result->fetch_assoc()){
     echo "<br>id:".$row['id']. " -firstname:".$row['firstname']."<br>";
 	}
 }else{
 	echo "0 result";
 }


$conn->close();










// //create db
// $sql = "CREATE DATABASE mydb";
// if(mysqli_query($conn,$sql)){
//     echo "database created sucefuly";
// }else
// {
//     echo "error of creating db" .mysqli_error($conn);
// }
// mysqli_close($conn);

?>