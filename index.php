<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <STYLE>
        
    </STYLE>
</head>
<body><h1 align="CENTER">ENTER DETAILS</h1>
    <form action="addvalue.php" method="post" align="center">
Enter first number:
<input type="number"name="roll"><br>
Enter name:
<input type="text" name="name"><br>
Enter address:
<input type="text" name="address"><br>
Enter marks:
<input type="number"name="marks"><br><br>
<button>Submit</button>
    </form>
    
</body>
</html>
<?php
if(isset($_POST)){
    $roll=$_POST['roll'];
    $name=$_POST['name'];
    $address=$_POST['address'];
$marks=$_POST['marks'];
}


?><html>
<table border="1px">
    <tr>
        <th>Roll</th>
        <th>Name</th>
        <th>Address</th>
        <th>Marks</th>
    </tr><?php
    include'db.php';
    $sql="SELECT * FROM student";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $roll= $row["roll"];
            $name= $row['name'];
            $address= $row['address'];
            $marks= $row['marks'];
        }
    }
    ?>

    <tr>
        <td><?php echo "$roll";?></td>
        <td><?php echo "$name";?></td>
        <td><?php echo "$address";?></td>
        <td><?php echo "$marks";?></td>
    </tr>
</table>
