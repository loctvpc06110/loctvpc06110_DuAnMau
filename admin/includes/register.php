<?php
$err = "";
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rePassword = $_POST['rePassword'];

    if (strlen($email) < 5) {
        $err .= "Invalid email ! <br/>";
    }
    if (strlen($password) < 8) {
        $err .= "Password needs to be at least 8 characters long ! <br/>";
    }
    if ($password != $rePassword) {
        $err .= "Password & Retype Password must be the same ! <br/>";
    }

    if ($err == "") {
        $db = new User();
        if ($db->checkAccount($email)) {
            $newAcc = $db->createAcc($email, $password);
            echo "<script>document.location='index.php?page=login';</script>";
        } else {
            $err .= "Your email is registered ! <br/>";
        }
    }
}
?>
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>

                    <form class="user" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                placeholder="Email Address" required name="email">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                    placeholder="Password" required name="password">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"
                                    placeholder="Repeat Password" required name="rePassword">
                            </div>
                        </div>
                        <?php global $err;
                        if ($err != "") { ?>
                            <div class="alert alert-danger">
                                <?= $err ?>
                            </div>
                        <?php } ?>
                        <button class="btn btn-primary btn-user btn-block" name="register">
                            Register Account
                        </button>
                        <hr>
                        <a href="#" class="btn btn-google btn-user btn-block">
                            <i class="fab fa-google fa-fw"></i> Register with Google
                        </a>
                        <a href="#" class="btn btn-facebook btn-user btn-block">
                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                        </a>
                    </form>

                    <hr>
                    <div class="text-center">
                        <a class="small" href="$">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="?page=login">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>