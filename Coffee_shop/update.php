<?php
$connect = mysqli_connect("localhost","root", "", "coffee_shop" );


$uname = "";
$uprice = "";


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    
    if(mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_assoc($result);
        $uname = $data['name'];
        $uprice = $data['price'];
    }
}

if(isset($_POST['update'])){
    $new_name = $_POST['name'];
    $new_price = $_POST['price'];
    $id_to_update = $_GET['id']; 

    $update_sql = "UPDATE product SET name='$new_name', price='$new_price' WHERE id='$id_to_update'";

    if(mysqli_query($connect, $update_sql)){
        header("location:db_connection.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
</head>
<body>
    <h2>Update Product</h2>
    <form action="" method="post">
        Name: <br>
        <input type="text" name="name" value="<?php echo $uname; ?>"> <br> <br>
        
        Price: <br>
        <input type="text" name="price" value="<?php echo $uprice; ?>"> <br> <br>
        
        <input type="submit" name="update" value="Save & Change">
    </form>
</body>
</html>