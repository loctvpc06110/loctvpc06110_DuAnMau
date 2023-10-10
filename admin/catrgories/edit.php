<?php
$id = $_GET['id'];

$data = new Category();
$row = $data->getByID($id);

if (isset($_POST['editCate'])) {
    $CateName = $_POST['categoryName'];
    $edit = $data->update($CateName, $row['cateID']);
    echo "<script>document.location='index.php?page=listCategories';</script>";
}
?>

<div class="container-fluid">
    <div class="card-header">
        <h2>Edit Category</h2>
    </div>
    <form method="post">
        <div class="form-floating mb-3 mt-3">
            <label>Category Name</label>
            <input type="text" class="form-control" placeholder="Enter Category Name" name="categoryName"
                value="<?php echo $row['cate_name'] ?>" required>

        </div>
        <button name="editCate" class="btn btn-primary">Save</button>
    </form>
</div>