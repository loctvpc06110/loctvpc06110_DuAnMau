<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$db_comment = new Comment();
$db = new Product();
$row = $db->getDetailProductByID($id);
?>
<section id="prodetails" class="section-p1">

    <div class="single-pro-image">
        <div class="main-img" id="MainImg">
            <img src="content/img/prod/<?php echo $row['image']; ?>" width="100%">
        </div>
    </div>
    <div class="single-pro-details">
        <form method="post" action="?page=cart">

            <input type="hidden" name="prd_ID" value="<?php echo $row['productID']; ?>">
            <input type="hidden" name="prd_name_cart" value="<?php echo $row['prd_name']; ?>">
            <input type="hidden" name="price_cart" value="<?php echo $row['price']; ?>">
            <input type="hidden" name="image_cart" value="<?php echo $row['image']; ?>">

            <h6 id="categoryPro">
                <?php echo $row['cate_name']; ?>
            </h6>
            <h4 id="namePro">
                <?php echo $row['prd_name']; ?>
            </h4>
            <h2 id="pricePro">$
                <?php echo $row['price']; ?>
            </h2>
            <select name="size_cart">
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>
            <input name="quantity_cart" type="number" value="1">
            <button type="submit" name="add_cart" class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span id="describePro">
                <?php echo $row['description']; ?>
            </span>

        </form>
    </div>

</section>

<?php
$email = $_SESSION['login_email_user'];
$db_user = new User();
$row_user = $db_user->getByEmail($email);


if (isset($_POST['comment'])) {
    $content = $_POST['content'];

    $cmt = $db_comment->createComment($id, $content, $row_user['user_id']);
    echo "<script>document.location='index.php?page=detail&id=$id';</script>";
}

?>
<section id="comment" class="section-p1">
    <h3>Comment Product</h3>
    <form method="POST" action="">
        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" rows="5" id="comment" name="content"></textarea>
        </div>
        <button class="btn btn-primary" name="comment">Submit</button>
    </form>
    <hr>
    <h3>List comment</h3>
    <div class="comment-list">
        <?php
        $rows_cmt = $db_comment->showCommentByProdID($id);
        foreach ($rows_cmt as $row_cmt) { ?>
            <div class="form-group">
                <label for="comment">Comment cre: <? echo $row_cmt['email']?></label>
                <input class="form-control" type="text" value="<? echo $row_cmt['content']?>">
            </div>
            <hr>
        <?php } ?>
    </div>
</section>


<section id="product1" class="section-p1">

    <h2>Similar Product</h2>
    <p>Summer Collection New Morden Design</p>

    <div class="pro-container">

        <?php
        $rows_sml = $db->getSimilar($row['cate_name'], $row['productID']);

        foreach ($rows_sml as $row_sml) { ?>

            <a href="?page=detail&id=<?php echo $row_sml['productID']; ?>">
                <div class="pro">
                    <img src="content/img/prod/<?php echo $row_sml['image'] ?>" alt="Image Shirt">
                    <div class="des">
                        <span>
                            <?php echo $row_sml['cate_name'] ?>
                        </span>
                        <h5>
                            <?php echo $row_sml['prd_name'] ?>
                        </h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$
                            <?php echo $row_sml['price'] ?>
                        </h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            </a>

        <?php } ?>

    </div>

</section>

<?php include("_newsletter.php"); ?>
<!--End news -->