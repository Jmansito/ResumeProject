<?php

// Show applicants (mostly for testing for now)
function get_categories(){
    global $db;
    $query = 'SELECT Resume.f_name, Resume.l_name, Resume.dob, Resume.email,
    Resume.phone_number, Resume.previous_job, Resume.previous_job_desc,
    Resume.previous_job_sd, Resume.previous_job_ed, Resume.skill1,
    Resume.skill2, Resume.skill3, Resume.profile_pic, Resume.resume_pdf)
    From Resume
    ORDER BY Resume.f_name;';

    $statement = $db->prepare($query);
    $statement ->execute();
    $applicants = $statement-> fetchAll();
    $statement->closeCursor();
    return $applicants;
}