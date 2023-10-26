<section id="page-header">
    <h2>#Stayhome</h2>

    <p>Save more with coupons & up to 70% off</p>
</section>

<section id="product1" class="section-p1">
    <h2>All Products</h2>

    <?php
    // Limit là số dòng dữ liệu hiển thị mỗi trang
    $limit = 12;

    // Tìm CURRENT_PAGE
    if (isset($_GET["pagination"])) {
        $current_page = $_GET["pagination"];
    } else {
        $current_page = 1;
    }
    ;

    // Start là đòng dữ liệu bất đầu
    $start = (intval($current_page - 1)) * $limit;

    // Truy vấn danh sách
    $dblist = new Product();
    $rows = $dblist->getListLimit($start, $limit);

    ?>
    <div class="pro-container">

        <?php foreach($rows as $row) {?>

            <div class="pro">
                <form method="post" action="?page=addcart">
                    <a href="?page=detail&id=<?php echo $row['productID']; ?>">
                        <img src="content/img/prod/<?php echo $row['image']; ?>" alt="Image Shirt">
                        <div class="des">
                            <span>
                                <?php echo $row['cate_name']; ?>
                            </span>
                            <h5>
                                <?php echo $row['prd_name']; ?>
                            </h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$
                                <?php echo $row['price']; ?>
                            </h4>
                        </div>
                    </a>
                    <i class="fa-solid fa-cart-shopping cart"></i>
                </form>
            </div>

            <?php } ?>
    </div>

</section>

<?php
$limit = 12;

// tính tổng số dòng dữ liệu

$total_records = $dblist->number_rows();

// Tính tổng số trang
$total_page = ceil($total_records / $limit);

$pageLink = "<section id='pagination' class='section-p1'>";
for ($i = 1; $i <= $total_page; $i++) {
    $pageLink .= "<a href='?page=shop&pagination=" . $i . "'>$i</a>";
}
echo $pageLink . "</section>";
?>

<?php include("_newsletter.php"); ?>
<!--End news -->
