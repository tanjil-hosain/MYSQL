<?php
$database = mysqli_connect("localhost", "root", "", "tanjil_70");
if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $address = $_POST['address'];
   $database->query("call add_manufacture('$name','$address')");
}
 if(isset($_POST['add_submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $man_id = $_POST['m_id'];
    $database->query("call add_product('$name','$price','$man_id')");
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_interface</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <h1>Manufacture:</h1>
            Name: <br>
            <input type="text" name="name"> <br> <br>
            Address: <br>
            <input type="text" name="address"> <br> <br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
    <br> <br>
     <form action="" method="post">
        <fieldset>
            <h1>
                Add Products
            </h1>
            Name: <br> 
            <input type="text" name="name"> <br> <br>
            Price: <br>
            <input type="text" name="price"> <br> <br>
            Man_id: <br> 
            <select name="" id="">
                <?php
                $manufac = $database->query("select * from manufacturs");
                while(list($_mid , $_uname) = $manufac->fetch_row()){
                    echo "<potion value='$_mid'> $_uname </option>";
                }
                ?>
            </select>
            <input type="submit" name="add_submit" value="Submit">
        </fieldset>
     </form>
</body>
</html>