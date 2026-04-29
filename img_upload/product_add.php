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

    <form action="" method="post">
        Name: <br>
        <input type="text" name="name"> <br>
        Price: <br>
        <input type="text" name="price"> <br> <br>
        Brand_id: <br>
        <select name="brand_id" >
            <?php 
            $brand_data = $database->query("SELECT * FROM brands");
            while(list($id,$brand_name) = $brand_data->fetch_assoc()){
                echo "<option value = '$id'> $brand_name</option>";
            }
             ?>
        </select>
        
        Image: 
    </form>
</body>
</html>