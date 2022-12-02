<?php
if(!isset($_SESSION))
{
    session_start();
}
include "header.php"; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>View Resumes</title>
        <link rel="stylesheet" href="style.css" />
    </head>

    <!-- the body section -->
    <body class="resume_body">
    <div>
        <div>
                <h1 class="title-register">Available Resumes</h1>
                <input type= "hidden" name="action" value="add_resume_form">
                <div class="row">
                    <?php $applicants = get_categories();
                    foreach ($applicants as $applicant) : ?>
                    <div class="column">
                        <div class="card">
                            <h3><?php echo $applicant['f_name'];?> <?php echo $applicant['l_name'];?></h3>
                            <p>DoB: <?php echo $applicant['dob'];?></p>
                            <p>Email: <?php echo $applicant['email'];?></p>
                            <p>Phone: <?php echo $applicant['phone_number'];?></p>
                            <p>Previous Job: <?php echo $applicant['previous_job'];?></p>
                            <a href="display_pdf.php?var_name=<?php echo $applicant['resume_pdf'] ?>">Full Resume</a>
                            <p></p>
                            <form action="controller.php" method="post">
                                <input type="hidden" name="action" value="show_update_resume">
                                <input type="hidden" name="resume_id" value="<?php echo $applicant['resume_id']; ?>">
                                <input type="submit" value="Update">
                            </form>
                            <p></p>
                            <form action="controller.php" method="post">
                                <input type="hidden" name="action" value="delete_resume">
                                <input type="hidden" name="resume_id" value="<?php echo $applicant['resume_id']; ?>">
                                <input type="submit" value="Delete">
                            </form>
                            <p></p>
                        </div>
                        <p></p>
                    </div>
                    <?php endforeach;?>
                </div>
    </div>
    </div>
    </body>
    </html>

<?php include "footer.php"; ?>