<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resume Project</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
<div class="header-wrap">
    <header class="main">
        <a class="logo"><img src="images/Banner.png" alt="Logo banner" width=500 height=100></a>
        <div class="background-image">
            <div class="header-container">
                <div class="top-nav">
                    <a href="home.php">Home</a>
                    <a href="resumes.php">Resumes</a>
                    <a href="about.php">About</a>
                    <?php
                    if(!isset($_SESSION))
                    {
                        session_start();
                    }
                    if(!isset($_SESSION['username'])) : ?>
                        <a href="login.php">Login</a>
                    <?php else : ?>
                        <a href="logout.php">Logout</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
</div>
</body>
</html>