<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .wrap {
            width: 500px;
            margin: 20% auto;
        };
    </style>
</head>
<body>
    <?php
        if (isset($_GET["page"])) {
            $url = $_GET["page"];

            switch ($url) {
            case "admin":
                echo "<script>document.location='admin/index.php';</script>";
                break;
            case "site":
                echo "<script>document.location='site/index.php';</script>";
                break;
            }
        }
        
    ?>
    <div class="wrap">
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="?page=admin"><button class="btn btn-primary btn-lg" type="button" style="width: 100%;">Admin</button></a>
            <a href="?page=site"><button class="btn btn-secondary btn-lg" type="button" style="width: 100%;">Site</button></a>
        </div>
    </div>
    
</body>
</html>