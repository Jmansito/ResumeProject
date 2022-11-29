<?php include 'header.php';

?>

    <main>
        <h2>Add User Resume Details</h2>
        <form action="." method="post" id="add_resume">
            <input type= "hidden" name="action" value="add_resume">

            <label>First Name:</label>
            <input type="text" name ="f_name">
            <br>

            <label>Last Name:</label>
            <input type="text" name="l_name" />
            <br>

            <label>Date Of Birth:</label>
            <input type="date" name="dob" />
            <br>

            <label>Email:</label>
            <input type="text" name="email" />
            <br>

            <label>Phone Number:</label>
            <input type="text" name="phone_number" />
            <br>

            <label>Previous Job:</label>
            <input type="text" name="previous_job" />
            <br>

            <label>Previous Job Description:</label>
            <input type="text" name="previous_job_desc" />
            <br>

            <label>Previous Job Start Date:</label>
            <input type="date" name="previous_job_sd" />
            <br>

            <label>Previous Job End Date:</label>
            <input type="date" name="previous_job_ed" />
            <br>

            <label>Skill 1:</label>
            <input type="text" name="skill1" />
            <br>
            <label> Skill 2:</label>
            <input type="text" name="skill2" />
            <br>
            <label>Skill 3:</label>
            <input type="text" name="skill3" />
            <br>
            <label>Profile Pic</label>
            <input type="file" name="profile_pic" />
            <br>
            <label>Resume PDF</label>
            <input type="file" name="resume_pdf" />
            <br>
            <input type="submit" value="Add Resume" />
    </main>

<?php include 'footer.php'; ?>

