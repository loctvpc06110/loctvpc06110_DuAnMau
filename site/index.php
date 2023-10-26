<?php
session_start();
if (isset($_GET['login'])) {
    $logout_user = $_GET['login'];
} else {
    $logout_user = '';
}
if ($logout_user == 'logout_user') {
    unset($_SESSION['login_email_user']);
    echo "<script>document.location='index.php?page=login';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocTVPC06110</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./content/css/style.css">
</head>

<body>
    <?php include('includes/_header.php'); ?>

    <?php
    include('../admin/includes/pdo.php');
    include('../admin/products/product.php');
    include('../admin/users/user.php');
    include('../admin/comments/comment.php');

    if (isset($_GET["page"])) {
        $url = $_GET["page"];
    } else {
        $url = "home";
    }

    if ($url == "home") {
        include("includes/home.php");
    } else if ($url == "shop") {
        include("includes/shop.php");
    } else if ($url == "blog") {
        include("includes/blog.php");
    } else if ($url == "about") {
        include("includes/about.php");
    } else if ($url == "contact") {
        include("includes/contact.php");
    } else if ($url == "login") {
        include("includes/login.php");
    } else if ($url == "signup") {
        include("includes/signup.php");
    } else if ($url == "cart") {
        include("includes/cart.php");
    } else if ($url == "forgot") {
        include("includes/forgot.php");
    } else if ($url == "search") {
        include("includes/search.php");
    } else if ($url == "detail") {
        include("includes/dtlproduct.php");
    } else if ($url == "info") {
        include("includes/info.php");
        
    }
    ?>

    <?php include('includes/_footer.php'); ?>

    <script src="./content/js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>