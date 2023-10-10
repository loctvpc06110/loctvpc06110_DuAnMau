<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">List Products</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="?page=addProd"><button class="btn text-gray-100 bg-gradient-primary">Add</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Status Product</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Inventory</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Status Product</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Inventory</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </tfoot>
                <tbody>

                    <?php
                    $dblist = new Product();
                    $rows = $dblist->getList_InnerJoin_Cate();
                    
                    foreach ($rows as $row) { ?>
                        <tr>
                            <td><? echo $row['productID']?></td>
                            <td><? echo $row['prd_name']?></td>
                            <td><? echo $row['prd_status']?></td>
                            <td>
                                <img src="content/img/prod/<? echo $row['image']?>" alt="image-product" width="80px">
                            </td>
                            <td>$ <? echo $row['price']?></td>
                            <td><? echo $row['inventory']?></td>
                            <td><? echo $row['description']?></td>
                            <td><? echo $row['cate_name']?></td>
                            <td><a href="?page=editProd&id=<? echo $row['productID']?>" class="nav-link"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="?page=removeProd&id=<? echo $row['productID']?>" class="nav-link"><i class="fa-regular fa-circle-xmark"></i></a></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>