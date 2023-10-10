<?php
$err = "";
if (isset($_POST['login'])) {

    $email = $_POST['email'] ?? "";
    $password = $_POST['password'] ?? "";
    $user = new User();
    if ($email == "" || $password == "") {
        $err .= "Bạn phải nhập thông tin đầy đủ";
    } else {
        if ($user->checkUserCustomer($email, $password)) {
            $result = $user->userid($email, $password);
            $_SESSION['login_email_user'] = $email;
            echo "<script>document.location='index.php?page=home';</script>";
        } else {
            $err .= "Tài khoản hoặc mặt khẩu không chính xác";
        }
    }
}
?>
<section id="login">
    <div class="wrap">
        <div class="heading">
            <img src="content/img/logo.png" width="200px">
        </div>
        <form method="post">
            <div class="form-group">
                <input type="text" required id="_email" name="email">
                <span>Email</span>
                <i></i>
            </div>

            <div class="form-group">
                <input type="password" required id="_password" name="password">
                <span>Password</span>
                <i></i>
            </div>
            <br>
            <div class="mb3 form-check">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember account</label>
            </div>
            <?php global $err;
            if ($err != "") { ?>
                <div class="alert alert-danger">
                    <?= $err ?>
                </div>
            <?php } ?>
            <div class="form-group">
                <a href="?page=forgot" class="forgot_pw">Forget password ?</a=>
            </div>

            <div class="form-group btn">
                <a href="?page=signup">Need an account ?</a>
                <button class="normal" name="login">Login</button>
            </div>
        </form>
    </div>
</section>