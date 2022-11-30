<?php include 'header.php'; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add Resume Form</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
    <main>
        <h1>Login</h1>
        <form action="." method="post" id="add_product_form">
            <input type="hidden" name="action" value="login">

            <p>
                <label>User Name:
                    <input type="text" name="user_name" />
                </label>
            </p>
            <p>
                <label>Password:
                    <input type="password" name="password" />
                </label>
            </p>

            <label>
                <input type="submit" value="Login" />
            </label>
            <br>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>


    </main>
    </body>


<?php include 'footer.php'; ?>