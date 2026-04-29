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
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Price </td>
                <td>Brand_name</td>
                <td>Item</td>
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
                <td><?php echo $image; ?></td>

            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>