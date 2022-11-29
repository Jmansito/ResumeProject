<?php include 'header.php'; ?>

<main>
    <h1>Login</h1>
    <form action="." method="post" id="add_product_form">
        <input type="hidden" name="action" value="login">

        <label>User Name:</label>
        <input type="text" name="user_name" />
        <br>

        <label>Password:</label>
        <input type="password" name="password" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Login" />
        <br>

    </form>

</main>

<?php include 'footer.php'; ?>