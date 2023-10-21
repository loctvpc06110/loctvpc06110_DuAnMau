<div class="container-fluid">
    <div class="card-header">
        <h2>Add Product</h2>
        <a href="?act=home" style="padding: 8px;"><i class="fa-solid fa-arrow-left"></i> Back</a>
    </div>
    <form method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3 mt-3">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter Product Name" name="prodName" required>
        </div>
        <div class="form-floating mb-3 mt-3">
            <label>Status</label>
            <select class="form-control" name="prodStatus">
                <option value="Available">Available</option>
                <option value="Unavailable">Unavailable</option>
            </select>
        </div>
        <div class="form-floating mb-3 mt-3">
            <label>Image</label>
            <input type="file" class="form-control" name="image" required>
        </div>
        <div class="form-floating mb-3 mt-3">
            <label>Price</label>
            <input type="number" class="form-control" placeholder="Enter Price" name="prodPrice" required>
        </div>
        <div class="form-floating mt-3 mb-3">
            <label>Inventory</label>
            <input type="number" class="form-control" placeholder="Enter inventory Quantity" name="prodInventory" required>
        </div>
        <div class="form-floating mt-3 mb-3">
            <label>Description</label>
            <input type="text" class="form-control" placeholder="Enter Description" name="prodDesc" required>
        </div>
        <div class="form-floating mt-3 mb-3">
            <label>Product category</label>
            <select class="form-control" name="cateID">
                <?php
                $dbCate = new Category();
                $rows = $dbCate->getList();
                foreach ($rows as $row) { ?>
                    <option value="<? echo $row['cateID'] ?>"><? echo $row['cate_name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <button name="addProd" class="btn btn-primary">Add</button>
    </form>
</div>

<?php

if (isset($_POST['addProd'])) {

    $prodName = $_POST['prodName'];
    $prodStatus = $_POST['prodStatus'];

    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    $prodPrice = $_POST['prodPrice'];
    $prodInventory = $_POST['prodInventory'];
    $prodDesc = $_POST['prodDesc'];
    $cateID = $_POST['cateID'];
    
    $db = new Product();
    $addPro = $db->add($prodName, $prodStatus, $image, $prodPrice, $prodInventory, $prodDesc, $cateID);

    move_uploaded_file($image_tmp, 'content/img/prod/' . $image);
    move_uploaded_file($image_tmp, '../site/content/img/prod/' . $image);
    
    echo "<script>document.location='index.php?page=listProducts';</script>";
}

?>
