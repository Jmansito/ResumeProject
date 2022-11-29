<?php include "header.php"; ?>
    <html>
    <head>
        <title>Employee Manager</title>
        <!--    <link rel="stylesheet" href="/MVC/main.css" />-->
        <link href="style.css?<?=  filemtime( $_SERVER['DOCUMENT_ROOT'] . "style.css" )  ?>" type="text/css" rel="stylesheet" />
    </head>

    <!-- the body section -->
    <body>
    Resume.f_name, Resume.l_name, Resume.dob, Resume.email,
    Resume.phone_number, Resume.previous_job, Resume.previous_job_desc,
    Resume.previous_job_sd, Resume.previous_job_ed, Resume.skill1,
    Resume.skill2, Resume.skill3, Resume.profile_pic, Resume.resume_pdf)

    <h1>List of applicants</h1>
    <section>
        <!-- display a table of applicants -->
        <table class = "center">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date Of Birth</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Previous Job</th>
                <th>Previous Job Desc</th>
                <th>previous_job_sd</th>
                <th>previous_job_ed</th>
                <th>skill1</th>
                <th>skill2</th>
                <th>skill3</th>
                <th>profile_pic</th>
                <th>resume_pdf</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <tr>
                <?php $applicants = get_categories();
                foreach ($applicants as $applicant) : ?>
                <td><?php echo $applicant['f_name'];?></td>
<!--                ADD THE REST OF THE FIELDS-->

<!--                buttons for admin to edit and delete, implement later -->

                <td><form action="." method="post">
                        <input type="hidden" name="action" value="show_update_applicant">
                        <input type="hidden" name="EMP_NUM" value="<?php echo $applicant['user']; ?>">
                        <input type="submit" value="Update">
                    </form></td>
                <td><form action="." method="post">
                        <input type="hidden" name="action" value="delete_applicant">
                        <input type="hidden" name="EMP_NUM" value="<?php echo $applicant['user']; ?>">
                        <input type="submit" value="Delete">
                    </form></td>
            </tr>

            <?php endforeach;?>
        </table>

        <p><button><a href="controller.php?action=add_resume">ADD RESUME</a></button></p>

    </section>

    </body>
    </html>
<?php include "footer.php"; ?>