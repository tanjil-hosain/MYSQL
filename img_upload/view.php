<?php
$database = mysqli_connect("localhost", "root", "", "img_upload");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="3" style="border-collapse: collapse;">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Price </td>
                <td>Brand_name</td>
                <td>Item</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $show =  $database->query("SELECT * FROM products");
            while(list($id, $name, $price, $brand_name, $image) = $show->fetch_row()){

      
             ?>
            <tr>
                <td><?php echo  $id;  ?></td>
                <td><?php echo $name;  ?></td>
                <td><?php echo $price; ?></td>
                <td><?php echo $brand_name; ?></td>
                <td><img src="uploads/<?php echo $image; ?>" alt="pic" width="30px"></td>
                <td><button><a href="delete.php?delete=<?php echo  $id; ?>">Delete</a></button></td>

            </tr>
            <?php } ?>
        </tbody>
    </table>
    <br> <br>
    <button><a href="product_add.php">Add Products</a></button>
</body>
</html>