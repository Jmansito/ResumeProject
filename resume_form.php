<?php include 'header.php';
global $db;
try {
    $query = 'INSERT INTO Resume
            (Resume.f_name, Resume.l_name, Resume.dob, Resume.email,
                Resume.phone_number, Resume.previous_job, Resume.previous_job_desc,
             Resume.previous_job_sd, Resume.previous_job_ed, Resume.skill1,
             Resume.skill2, Resume.skill3, Resume.profile_pic, Resume.resume_pdf)
             VALUES 
                 (:f_name, :l_name, :dob, :email, :phone_number, :previous_job,
                  :previous_job_desc, :previous_job_sd, :previous_job_ed, 
                  :skill1, :skill2, :skill3, :profile_pic, :resume_pdf)';
}
catch (PDOException $exception){
    $exception = "error connecting";
    echo $exception;
}
$statement = $db->prepare($query);
$statement ->execute();
?>

<!DOCTYPE html>
<html>
<body>
    <main>
        <h2>Add User Resume Details</h2>
        <form action="." method="post" id="add_resume">
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
</body>
</html>

<?php include 'footer.php'; ?>

