<?php 
    $id = $_GET['id'];
    $data = new Category();
    $dele = $data->delete($id);  
    echo "<script>document.location='index.php?page=listCategories';</script>";
?>