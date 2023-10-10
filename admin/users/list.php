<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">List User</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Permissions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Permissions</th>
                    </tr>
                </tfoot>
                <tbody>

                    <?php
                    $dblist = new User();
                    $rows = $dblist->getUser();

                    foreach ($rows as $row) { ?>
                        <tr>
                            <td><? echo $row['user_id']?></td>
                            <td><? echo $row['username']?></td>
                            <td><? echo $row['address']?></td>
                            <td><? echo $row['phone']?></td>
                            <td><? echo $row['email']?></td>
                            <td><? echo $row['password']?></td>
                            <td><? echo $row['permissions']?></td>         
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>