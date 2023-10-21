<?php
    $email = $_SESSION['login_email_user'];
    
    $db = new User();
    $row_up = $db->getByEmail($email);

    $email_old = $row_up['email'];

    if(isset($_POST['saveIn4'])) {
        $username = $_POST['customer_name'];
        $email = $_POST['customer_email'];
        $password = $_POST['customer_password'];
        $phone = $_POST['customer_phone'];
        $address = $_POST['customer_address'];

        $saveInfo = $db->updateUser($username, $address, $phone, $email, $password, $row_up['user_id']);
        echo "<script>document.location='?page=info';</script>";
    }
?>

    <section id="container-in4" class="section-p1">
            <h2>Your Information</h2>
            
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name: </label><br>
                    <input type="text" name="customer_name" class="form-control" value="<?php if (isset($row_up['username'])) echo $row_up['username'];?>">
                </div>
                <div class="form-group">
                    <label for="">Email: </label><br>
                    <input type="email" name="customer_email" class="form-control" value="<?php if (isset($row_up['email'])) echo $row_up['email'];?>">
                </div>
                <div class="form-group">
                    <label for="">Password: </label><br>
                    <input type="text" name="customer_password" class="form-control" value="<?php if (isset($row_up['password'])) echo $row_up['password'];?>">
                </div>
                <div class="form-group">
                    <label for="">Phone: </label><br>
                    <input type="text" name="customer_phone" class="form-control" value="<?php if (isset($row_up['phone'])) echo $row_up['phone'];?>">
                </div>
                <div class="form-group">
                    <label for="">Address: </label><br>
                    <input type="text" name="customer_address" class="form-control" value="<?php if (isset($row_up['address'])) echo $row_up['address'];?>">
                </div>
              <button class="normal btn-checkout" name="saveIn4">Save</button>
              <a href="?login=logout_user" class="w3-bar-item w3-button">Log out</a>
            </form>
           
    </section>