<?php include 'header.php'; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Resume Project Home Page</title>
        <link rel="stylesheet" href="/style.css">
    </head>
    <body>
    <div class="title-wrapper">
        <!-- Change title of header as needed -->
        <h1>A Web Development Project For Displaying Resumes</h1>
        <p>This project was designed by Josh Mansito and Kelvin Lal for
        CSCI 3800 Web Development. The website is built with php, html,
        sql, and CSS. For this project, a password protected admin can add and
        edit resumes in the database, then anyone can view them on the site.</p>

        <div class="main-body-image">
            <article class="main-page">
                <div>
                    <figure class="main-page-image">
                        <img src="images/resume-art.png" alt="Resume Image" loading="lazy" width="500" style="width: 500px">
                    </figure>
                </div>

            </article>
        </div>
    </div>
    <div class="title-wrapper">
        <h2>All Features Of This Project</h2>
    </div>
    <div class="features-list-wrap">
        <ul class="feature-list" style="list-style-image:url('images/green-check.png') ">
            <li>
                <p>Navigation Bar Integration</p>
            </li>
            <li>
                <p>Password Protected Admin Login</p>
            </li>
            <li>
                <p>Database Manipulation And Display</p>
            </li>
            <li>
                <p>Resume Creation</p>
            </li>
        </ul>
    </div>
    </body>
    </html>
<?php include 'footer.php'; ?>