<?php include 'header.php'; ?>

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
                <input type="submit" class="login_button" value="Update" />

            </form>
        </div>

    </div>
    </html>
<?php include 'footer.php'; ?>