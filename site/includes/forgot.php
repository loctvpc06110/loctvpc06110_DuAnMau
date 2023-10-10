<section id="login">
    <div class="wrap">
        <div class="heading">
            <img src="content/img/logo.png" width="200px">
            <h4>Forgot Password</h4>
            <?php global $err;
            if ($err != "") { ?>
                <div class="alert alert-danger">
                    <?= $err ?>
                </div>
            <?php } ?>
        </div>

        <form method="post">

            <div class="form-group">
                <input type="text" required name="email" value="<?php if (isset($email))
                    echo $email ?>">
                    <span>Email</span>
                    <i></i>
                </div>

                <div class="form-group btn">
                    <a href="?page=signup">Create an account ?</a>
                    <button class="normal" name="sendEmail">Send Email</button>
                </div>

            </form>

        </div>
    </section>