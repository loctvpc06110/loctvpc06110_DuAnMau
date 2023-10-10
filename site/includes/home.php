<section id="hero">
    <h4>Trade - in offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons & up to 70% off</p>
    <button><a href="?page=shop">Shop now</a></button>
</section>
    <!--End Hero -->
     
<?php include('_feature.php'); ?> 
    <!--End Feature -->

<section id="product1" class="section-p1">

    <h2>Featured Products</h2>
    <p>Summer Collection New Morden Design</p>

    <div class="pro-container">

        <?php
        $db = new Product();
        $rows1 = $db->get4product(3, 4);

        foreach ($rows1 as $row1) { ?>

            <a href="?page=detail&id=<?php echo $row1['productID']; ?>">
                <div class="pro">
                    <img src="content/img/prod/<?php echo $row1['image'] ?>" alt="Image Shirt">
                    <div class="des">
                        <span>
                            <?php echo $row1['cate_name'] ?>
                        </span>
                        <h5>
                            <?php echo $row1['prd_name'] ?>
                        </h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$
                            <?php echo $row1['price'] ?>
                        </h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            </a>

        <?php } ?>

    </div>

</section>
    <!--End Featured Product -->

<section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Up tp <span>70% Off</span> - All Model & Accessories</h2>
    <a href="?page=shop"><button class="normal">Explore More</button></a>
</section>
    <!-- End Banner primary -->

<section id="product1" class="section-p1">

    <h2>New Arrivals</h2>
    <p>Summer Collection New Morden Design</p>

    <div class="pro-container">

        <?php
        $db = new Product();
        $rows2 = $db->get4product(7, 4);

        foreach ($rows2 as $row2) { ?>

            <a href="?page=detail&id=<?php echo $row2['productID']; ?>">
                <div class="pro">
                    <img src="content/img/prod/<?php echo $row2['image'] ?>" alt="Image Shirt">
                    <div class="des">
                        <span>
                            <?php echo $row2['cate_name'] ?>
                        </span>
                        <h5>
                            <?php echo $row2['prd_name'] ?>
                        </h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$
                            <?php echo $row2['price'] ?>
                        </h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            </a>

        <?php } ?>

    </div>

</section>
    <!-- End Product New Arrivals -->

<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>carazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best model is on sale at Model-Anime</span>
        <a href="?page=shop"><button class="white">Learn More</button></a>
    </div>
        <div class="banner-box banner-box2">
        <h4>spring/summer</h4>
        <h2>upcomming season</h2>
        <span>The best model is on sale at Model-Anime</span>
        <a href="?page=shop"><button class="white">Learn More</button></a>
    </div>
</section>

<section id="banner3">
    <div class="banner-box">      
        <h2>SEASONAL SALE</h2>
        <h3>Winter Collection -50% OFF</h3> 
    </div>
    <div class="banner-box banner-box2">      
        <h2>SEASONAL SALE</h2>
        <h3>Winter Collection -50% OFF</h3> 
    </div>
    <div class="banner-box banner-box3">      
        <h2>SEASONAL SALE</h2>
        <h3>Winter Collection -50% OFF</h3> 
    </div>
</section>
    <!-- End Banner scondary -->

<?php include("_newsletter.php"); ?>
     <!--End news --> 