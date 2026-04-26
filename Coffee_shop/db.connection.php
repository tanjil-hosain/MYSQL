<?php
$connect = mysqli_connect("localhost","root", "", "coffee_shop" );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Brand Name</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $show = $connect->query("SELECT * FROM product");

        while(list($id, $name, $price, $brand_name) = $show->fetch_row()){
        ?>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $price; ?></td>
                <td><?php echo $brand_name; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table> 
</body>
</html>