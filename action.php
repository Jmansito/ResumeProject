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
function add_resume($user_name,$f_name, $l_name,$dob, $email, $phone_number, $previous_job, $previous_job_desc,$previous_job_sd,
                    $previous_job_ed, $skill1, $skill2, $skill3, $profile_pic, $resume_pdf){
    global $db;

    $query = 'INSERT INTO `Resume`
          (Resume.user_name, Resume.f_name, Resume.l_name, Resume.dob, Resume.email,
               Resume.phone_number, Resume.previous_job, Resume.previous_job_desc,
               Resume.previous_job_sd, Resume.previous_job_ed, Resume.skill1,
               Resume.skill2, Resume.skill3, Resume.profile_pic, Resume.resume_pdf)
            VALUES
                (:user_name, :f_name, :l_name, :dob, :email, :phone_number, :previous_job,
                    :previous_job_desc, :previous_job_sd, :previous_job_ed,
                    :skill1, :skill2, :skill3, :profile_pic, :resume_pdf)';
    $statement = $db->prepare($query);
    $statement->bindValue('user_name', $user_name);
    $statement->bindValue('f_name', $f_name);
    $statement->bindValue('l_name', $l_name);
    $statement->bindValue('dob', $dob);
    $statement->bindValue('email', $email);
    $statement->bindValue('phone_number', $phone_number);
    $statement->bindValue('previous_job', $previous_job);
    $statement->bindValue('previous_job_desc', $previous_job_desc);
    $statement->bindValue('previous_job_sd', $previous_job_sd);
    $statement->bindValue('previous_job_ed', $previous_job_ed);
    $statement->bindValue('skill1', $skill1);
    $statement->bindValue('skill2', $skill2);
    $statement->bindValue('skill3', $skill3);
    $statement->bindValue('profile_pic', $profile_pic);
    $statement->bindValue('resume_pdf', $resume_pdf);
    $statement->execute();
    $statement->closeCursor();

}

function get_user($user_id) {
    global $db;
    $query = 'SELECT * FROM user
              WHERE id = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
}


function add_user($user_name, $password, $name, $interest) {
    global $db;
    $_password = password_hash ($password, PASSWORD_BCRYPT);
    $query = 'INSERT INTO user
                 (user_name, password, name, interest)
              VALUES
                 (:user_name, :password, :name, :interest)';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_name', $user_name);
    $statement->bindValue(':password', $_password);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':interest', $interest);
    $statement->execute();
    $id = $db->lastInsertId();
    $statement->closeCursor();
    return $id;
}


function is_valid_user($user, $password) {
    global $db;
    $query = 'select password from users
              where user = :user';
    $statement = $db->prepare($query);
    $statement->bindValue(':user', $user);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();
    if ($row != null) {
        $hash = $row['password'];
        return password_verify($password, $hash);
    }
    else {
        return 0;
    }
}