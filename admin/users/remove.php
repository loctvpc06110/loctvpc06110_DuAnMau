<?php
    $id = $_GET['id'];
    $emailLogin = $_SESSION['admin'];
    $data = new User();
    $deleCmtUser = $data->deleCmtUser($id);
    $deleUser = $data->deleUser($id, $emailLogin);  
    echo "<script>document.location='index.php?page=listUsers';</script>";
?>