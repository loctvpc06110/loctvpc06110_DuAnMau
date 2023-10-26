<?php 
    if (!isset($_SESSION['admin'])){
        echo "<script>document.location='index.php?page=login';</script>";
    }
?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">List Comments</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Most Eecent Comment</th>
                        <th>Total Comments</th>
                        <th>See details</th>
                    </tr>
                </thead>
                <tfoot>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Most Eecent Comment</th>
                    <th>Total Comments</th>
                    <th>See details</th>
                    </tr>
                </tfoot>
                <tbody>

                    <?php
                    $dblist = new Comment();
                    $rows = $dblist->getProductHaveComment();

                    $i = 1;

                    foreach ($rows as $row) { ?>

                        <tr>
                            <td>
                                <? echo $i++; ?>
                            </td>
                            <td>
                                <? echo $row['prd_name'] ?>
                            </td>
                            <td>
                                <?
                                $lastcmt = $dblist->getLastComment($row['prod_id']);
                                echo $lastcmt['lastCmt'];
                                ?>
                            </td>
                            <td>
                                <?
                                $totalcmt = $dblist->getTotalComment($row['prod_id']);
                                echo $totalcmt['totalCmt'];
                                ?>
                            </td>
                            <td><a href="?page=detailComment&id=<?echo $row['prod_id']?>"><button  type="button" class="btn btn-secondary">See</button></a></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

