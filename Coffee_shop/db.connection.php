<?php
$connect = mysqli_connect("localhost","root", "", "coffee_shop" );
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
     <form>
  <div class="mb-3">
    <label class="form-label">name</label>
    <input type="text" class="form-control" name="name">
    
  </div>
   <div class="mb-3">
    <label class="form-label">name</label>
    <input type="text" class="form-control" name="name">
    
  </div>
    <div class="mb-3">
    <label class="form-label">name</label>
    <input type="text" class="form-control" name="name">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
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