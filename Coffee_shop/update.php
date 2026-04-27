<?php
$connect = mysqli_connect("localhost","root", "", "coffee_shop" );
if($_GET['id']){
    $id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    $uid = $data['id'];
    $uname = $data['name'];
    $uprice = $data['price'];
}
if(isset($_POST['update'])){
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <br>
        <input type="text" name="name"> <br> <br>
        Price: <br>
        <input type="text" name="price"> <br> <br>
        <input type="submit" name="update" value="Save & Change">
    </form>
</body>
</html>