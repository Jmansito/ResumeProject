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
        <h2>Add User Resume Details</h2>
        <form action="controller.php" method="post" id="add_resume_form" enctype="multipart/form-data">
            <input type= "hidden" name="action" value="add_resume_form">
            <p>
                <label for="user_name">User Name:
                    <input type="text" name ="user_name">
                </label>
            </p>
            <p>
                <label for="first_name">First Name:
                    <input type="text" name ="f_name">
                </label>
            </p>
            <p>
                <label for="last_name">Last Name:
                    <input type="text" name ="l_name">
                </label>
            </p>
            <p>
                <label for="date_of_birth">Date Of Birth:
                    <input type="date" name ="dob">
                </label>
            </p>
            <p>
                <label for="email_address">Email:
                    <input type="text" name ="email">
                </label>
            </p>
            <p>
                <label for="phone_number">Phone Number:
                    <input type="text" name ="phone_number">
                </label>
            </p>
            <p>
                <label for="previous_job">Previous Job:
                    <input type="text" name ="previous_job">
                </label>
            </p>
            <p>
                <label for="prev_job_desc">Previous Job Description:
                    <input type="text" name ="previous_job_desc">
                </label>
            </p>
            <p>
                <label for="previous_job_sd">Previous Job Start Date:
                    <input type="date" name ="previous_job_sd">
                </label>
            </p>
            <p>
                <label for="previous_job_ed">Previous Job End Date:
                    <input type="date" name ="previous_job_ed">
                </label>
            </p>
            <p>
                <label for="skill1">Skill 1:
                    <input type="text" name ="skill1">
                </label>
            </p>
            <p>
                <label for="skill2">Skill 2:
                    <input type="text" name ="skill2">
                </label>
            </p>
            <p>
                <label for="skill3">Skill 3:
                    <input type="text" name ="skill3">
                </label>
            </p>
            <p>
                <label for="profile_pic">Profile Pic:
                    <input type="file" name ="profile_pic">
                </label>
            </p>
            <p>
                <label for="resume_pdf">Resume PDF:
                    <input type="file" name ="resume_pdf" >
                </label>
            </p>
            <input type="submit" value="Add Resume" />

        </form>
    </main>
</html>

<?php include 'footer.php'; ?>

