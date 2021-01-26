<?php

$link = mysqli_connect("localhost", "root", "", "mydb");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$cnic = mysqli_real_escape_string($link, $_REQUEST['cnic']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$status = mysqli_real_escape_string($link, $_REQUEST['status']);
$date = date(mysqli_real_escape_string($link, $_REQUEST['date'])); 
    $orgDate = $date;   
    $datea = str_replace('/"', '-', $orgDate);  
    $newDate = date("Y/m/d", strtotime($datea));  
$image = $filepath = "images/" . $_FILES["file"]["image"];
// Attempt insert query execution
$sql = "INSERT INTO form (username, password, cnic, status, date, gender, image) VALUES ('$username', '$password', '$cnic', '$status', '$newDate', '$gender', '$image')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>