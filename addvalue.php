<?php
$roll=$_POST['roll'];
$name=$_POST['name'];
$address=$_POST['address'];
$marks=$_POST['marks'];
echo'Roll'.$roll.'Name'.$name.'Address'.$address.'Marks'.$marks;
include'db.php';
$sql = "INSERT INTO student (name, address, marks) VALUES ('$name', '$address', $marks)";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:index.php");

}
?>
