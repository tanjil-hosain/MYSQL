<?php
$connect = mysqli_connect("localhost","root", "", "coffee_shop" );

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $price = $_POST['price'];
    $brand_name = $_POST['brand_name'];

    $sql ="INSERT INTO product( name , price , brand_name) VALUES('$name', '$price', '$brand_name')";
    if (mysqli_query($connect, $sql)) {
        echo "success";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <style>
        form{
            width: 400px;
        }
    </style>
</head>
<body>
   <fieldset>
     <form action="" method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
    
  </div>
   <div class="mb-3">
    <label class="form-label">Price</label>
    <input type="text" class="form-control" name="price">
    
  </div>
    <div class="mb-3">
    <label class="form-label">Brand_name</label>
    <input type="text" class="form-control" name="brand_name">
    
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </fieldset>
    <br>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>