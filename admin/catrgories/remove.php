<?php 
    $id = $_GET['id'];
    $data = new Category();
    $setProdCate = $data->setProdCate($id);
    $dele = $data->delete($id);  
    echo "<script>document.location='index.php?page=listCategories';</script>";
?>