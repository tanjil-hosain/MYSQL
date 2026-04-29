<?php
$database = mysqli_connect("localhost", "root", "" , "img_upload");
?>
<?php
if(isset($_POST['brand'])){
    $name= $_POST['name'];
    $contact= $_POST['contact'];
    $sql= "INSERT INTO brands(name, contact) VALUES('$name', '$contact')";

    if(mysqli_query($database, $sql)){
        header("location: product_add.php");
    }
}
?>
<?php 
if(isset($_POST['product'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $brand_id = $_POST['brand_id'];
    $img = $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmp, "uploads/". $img);

    $sql = "INSERT INTO products(name, price, brand_id, image) VALUES('$name', '$price', '$brand_id', '$img')";
    if(mysqli_query($database, $sql)){
        header("location:view.php");
    }

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
        Contact: <br>
        <input type="text" name="contact"> <br> <br>
        <input type="submit" name="brand" value="Add Brand">
    </form>

    <form action="" method="post" enctype="multipart/form-data">
        Name: <br>
        <input type="text" name="name"> <br>
        Price: <br>
        <input type="text" name="price"> <br> <br>
        Brand_id: <br>
        <select name="brand_id" >
            <?php 
            $brand_data = $database->query("SELECT * FROM brands");
            while(list($id,$brand_name) = $brand_data->fetch_row()){
                echo "<option value = '$id'> $brand_name</option>";
            }
             ?>
        </select>
        Image Upload: <br> <br>
        <input type="file" name="img" > <br> <br>
        <input type="submit" name="product" value="Add Product">


    </form>
</body>
</html>