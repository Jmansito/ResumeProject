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
        <h1>Register</h1>
        <form action="." method="post" id="add_product_form">
            <input type="hidden" name="action" value="register">

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
            <p>
                <label>First Name:
                    <input type="text" name="f_name" />
                </label>
            </p>
            <p>
                <label>Last Name:
                    <input type="text" name="l_name" />
                </label>
            </p>

            <label>&nbsp;</label>
            <input type="submit" value="Register" />
            <br>

        </form>
        <p>Already have an account? <a href="login.php">Log in</a></p>

    </main>
    </body>
<?php include 'footer.php'; ?>