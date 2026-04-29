<?php
$database = mysqli_connect("localhost", "root", "", "img_upload");

if(isset($_GET['delete'])){
    $delete = $_GET['delete'];

    $sql ="DELETE FROM products WHERE id = '$delete'";

    if(mysqli_query($database, $sql)){
        echo "Deleted!!";
        header('location:view.php');
    }
    
}
?>