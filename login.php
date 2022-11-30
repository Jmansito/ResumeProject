<?php include 'header.php'; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add Resume Form</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body class="login_body">
    <div class="login_form">
        <div class="login-wrapper">
            <form class="form_login" action="." method="post" id="add_product_form">
                <h1 class="title">Sign in</h1>
                <input class="login_input" type="hidden" name="action" value="login">

                <div class="login_div">
                        <input type="text" class="login_input" name="user_name" />
                        <label for="" class="login_label">Username</label>
                </div>
                <div class="login_div">
                        <input type="password" class="login_input" name="password" />
                        <label for="" class="login_label">Password</label>
                </div>
                <input type="submit" class="login_button" value="Login" />
                <p class="login_link">Don't have an account? <a href="signup.php">Sign up</a></p>
            </form>

        </div>

    </div>

    </body>


<?php include 'footer.php'; ?>