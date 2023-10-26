<div class="container-fluid">
    <div class="card-header">
        <h2>Add Category</h2>
    </div>
    <form method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3 mt-3">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter Category Name" name="cateName" required>
        </div>
        <button name="addCate" class="btn btn-primary">Add</button>
    </form>
</div>

<?php

if (isset($_POST['addCate'])) {
    $cateName = $_POST['cateName'];

    $db = new Category();
    $addPro = $db->add($cateName);

    echo "<script>document.location='index.php?page=listCategories';</script>";
}

?>
