<?php include 'header.php'; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body class="login_body">
    <div class="login_form">
        <div class="login-wrapper">
            <form class="form_login" action="controller.php" method="post" id="signup">
                <h1 class="title-register">Create your account</h1>
                <input class="login_input" type="hidden" name="action" value="register">

                <div class="login_div">
                    <input type="text" class="login_input" name="user_name" />
                    <label for="" class="login_label">Username</label>
                </div>
                <div class="login_div">
                    <input type="password" class="login_input" name="password" />
                    <label for="" class="login_label">Password</label>
                </div>
                <div class="login_div">
                    <input type="text" class="login_input" name="f_name" />
                    <label for="" class="login_label">First Name</label>
                </div>
                <div class="login_div">
                    <input type="text" class="login_input" name="l_name" />
                    <label for="" class="login_label">Last Name</label>
                </div>
                <div class="login_div">
                    <input type="date" class="login_input" name="dob" />
                    <label for="" class="login_label">Date Of Birth</label>
                </div>
                <div class="login_div">
                    <input type="text" class="login_input" name="email" />
                    <label for="" class="login_label">Email</label>
                </div>
                <div class="login_div">
                    <input type="text" class="login_input" name="phone_number" />
                    <label for="" class="login_label">Phone Number</label>
                </div>
                <input type="submit" class="login_button" value="Register" />
                <p class="login_link">Already have an account? <a href=login.php>Log in</a></p>
            </form>

        </div>

    </div>

    </body>

<?php include 'footer.php'; ?>