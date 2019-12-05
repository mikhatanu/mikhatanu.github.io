<?php
    require_once("connect.php");

    $idbarang = $_POST['id'];

    $resultbeli = $con->query("SELECT * FROM products where id=$idbarang");
    
    mysqli_fetch_array($resultbeli);
    var_dump($resultbeli);
    

jdsahfjsahjkfhkds
?>
