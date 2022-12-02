<?php include 'header.php'; ?>
<?php
// we can import all the resume variables here if we want them filled with current values
$resume_id = filter_input (INPUT_POST, 'resume_id', FILTER_VALIDATE_INT);
$f_name = filter_input(INPUT_POST, 'f_name');
$l_name = filter_input(INPUT_POST, 'l_name');
$dob = filter_input(INPUT_POST, 'dob');
$email = filter_input(INPUT_POST, 'email');
$phone_number = filter_input(INPUT_POST, 'phone_number', FILTER_VALIDATE_INT);
$previous_job = filter_input(INPUT_POST, 'previous_job' );
$previous_job_desc = filter_input(INPUT_POST, 'previous_job_desc');
$previous_job_sd = filter_input(INPUT_POST, 'previous_job_sd' );
$previous_job_ed = filter_input(INPUT_POST, 'previous_job_ed' );
$skill1 = filter_input(INPUT_POST, 'skill1' );
$skill2 = filter_input(INPUT_POST, 'skill2' );
$skill3 = filter_input(INPUT_POST, 'skill3' );


//TODO IMPORTANT, if we want the placeholders to show, we will need a new css for all of this. Current css hides placeholder for formatting

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update Resume Form</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body class="login_body">
    <div class="resume_form">
        <div class="login-wrapper">
            <form class="form_login" action="controller.php" method="post" id="add_resume_form" enctype="multipart/form-data">
                <h1 class="title-register">Please Update Any Fields</h1>
                <input class="login_input" type= "hidden" name="action" value="update_resume">
                <div class="login_div">
                    <input type="text" class="login_input" name ="f_name">
                    <label for="" class="login_label">First Name</label>
                </div>
                <div class="login_div">
                    <input type="text" class="login_input" name ="l_name">
                    <label for="" class="login_label">Last Name</label>
                </div>
                <div class="login_div">
                    <input type="date" class="login_input" name ="dob">
                    <label for="" class="login_label">Date Of Birth</label>
                </div>
                <div class="login_div">
                    <input type="text" class="login_input" name ="email">
                    <label for="" class="login_label">Email</label>
                </div>
                <div class="login_div">
                    <input type="text" class="login_input" name ="phone_number">
                    <label for="" class="login_label">Phone Number</label>
                </div>
                <div class="login_div">
                    <input type="text" class="login_input" name ="previous_job">
                    <label for="" class="login_label">Previous Job</label>
                </div>
                <div class="job_desc_div">
                    <input type="text" class="login_input" name ="previous_job_desc">
                    <label for="" class="login_label">Previous Job Description</label>
                </div>
                <div class="login_div">
                    <input type="date" class="login_input" name ="previous_job_sd">
                    <label for="" class="login_label">Previous Job Start Date</label>
                </div>
                <div class="login_div">
                    <input type="date" class="login_input" name ="previous_job_ed">
                    <label for="" class="login_label">Previous Job End Date</label>
                </div>
                <div class="login_div">
                    <input type="text" class="login_input" name ="skill1">
                    <label for="" class="login_label">Skill 1</label>
                </div>
                <div class="login_div">
                    <input type="text" class="login_input" name ="skill2">
                    <label for="" class="login_label">Skill 2</label>
                </div>
                <div class="login_div">
                    <input type="text" class="login_input" name ="skill3">
                    <label for="" class="login_label">Skill 3</label>
                </div>
                <div class="file_div">
                    <input type="file" class="file_input" name ="profile_pic">
                    <label for="" class="file_label">Profile Picture</label>
                </div>
                <div class="file_div">
                    <input type="file" class="file_input" name ="resume_pdf" >
                    <label for="" class="file_label">Resume PDF</label>
                </div>
                <input type="submit" class="login_button" value="Add Resume" />

            </form>
        </div>

    </div>
    </html>
<?php include 'footer.php'; ?>