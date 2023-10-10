<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">List Products Categories</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="?page=addCate"><button class="btn text-gray-100 bg-gradient-primary">Add</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Create Date</th>
                        <th>Update Date</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Create Date</th>
                        <th>Update Date</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </tfoot>
                <tbody>

                    <?php
                    $dblist = new Category();
                    $rows = $dblist->getList();

                    foreach ($rows as $row) { ?>
                        <tr>
                            <td><? echo $row['cateID']?></td>
                            <td><? echo $row['cate_name']?></td>
                            <td><? echo $row['create_date']?></td>
                            <td><?echo $row['update_date']?></td>
                            <td><a href="?page=editCate&id=<? echo $row['cateID']?>" class="nav-link"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="?page=removeCate&id=<? echo $row['cateID']?>" class="nav-link"><i class="fa-regular fa-circle-xmark"></i></a></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>