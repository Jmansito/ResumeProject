<?php include 'header.php'; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>About</title>
        <link rel="stylesheet" href="/style.css">
    </head>
    <body>
    <div class="title-wrapper">
        <!-- Change title of header as needed -->
        <h1>About Our Team: The Bug Busters</h1>
        <p>Our goal is to design and maintain a functional website that holds resumes
            for potential work applicants.</p>
        <section class="about-container">
            <div class="left-half">
                <article>
                    <figure class="main-page-image">
                        <img src="images/the-rock.jpg" alt="Resume Image" loading="lazy" width="500" style="width: 500px">
                    </figure>
                    <p>Josh Mansito is an upcoming graduate of Computer Science.</p>
                </article>
            </div>
            <div class="right-half">
                <article>
                    <figure class="main-page-image">
                        <img src="images/khart.jpg" alt="Resume Image" loading="lazy" width="500" style="width: 500px">
                    </figure>
                    <p>kELvin lAL dO goOOD</p>
                </article>
            </div>
        </section>
    </div>
    <div class="main-body-image">
        <article class="main-page">
            <div class="title-wrapper">
                <h2>Core Goals Of Our Project</h2>
            </div>
            <div class="goals-list-wrap">
                <ul class="goals-list" style="list-style:none ">
                    <li>
                        <h3>HOME PAGE</h3>
                        <p> The home page will house the welcome screen and directory for the site.
                            We plan to have buttons or a navigation panel for getting to each section of the site.
                            Basic home page layout and design will include a title and a short description of the site.</p>
                    </li>
                    <li>
                        <h3>NAVIGATION</h3>
                        <p> Navigation will have multiple options, for now, we know we want to include
                            the homepage, a page that lists available applicants, and potentially a third page for
                            building a resume in the site either by filling out a form in the site or uploading your own
                            resume</p>
                    </li>
                    <li>
                        <h3>RESUMES</h3>
                        <p> This page will list all people that are in the database. It will only show
                            their names, a brief description of their focused skills, and a link to their full resume.
                            Other options will include some extra customization tools to make a resume stand out.
                        </p>
                    </li>
                    <li>
                        <h3>LOGIN / ADMIN</h3>
                        <p> The login section will allow for password protected services. These services will include
                            adding / editing / removing resumes and applicants from the database. A secondary goal will
                            be to separate user and admin privileges.
                        </p>
                    </li>
                </ul>
            </div>
        </article>
    </div>
    </body>
    </html>
<?php include 'footer.php'; ?>