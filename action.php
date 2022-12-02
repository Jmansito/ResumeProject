<?php
if(!isset($_SESSION))
{
    session_start();
}
// Show applicants (mostly for testing for now)
function get_categories(){
    global $db;
    $query = 'SELECT * FROM `resume` WHERE `user_id` > 0';

    $statement = $db->prepare($query);
    $statement ->execute();
    $applicants = $statement-> fetchAll();
    $statement->closeCursor();
    return $applicants;
}
function add_resume($f_name, $l_name,$dob, $email, $phone_number, $previous_job, $previous_job_desc,$previous_job_sd,
                    $previous_job_ed, $skill1, $skill2, $skill3, $profile_pic, $resume_pdf){
    global $db;
    $data = [
        'user_name' => $_SESSION['username'],
        'user_id' => $_SESSION['id'],
        'f_name' => $f_name,
        'l_name' => $l_name,
        'dob' => $dob,
        'email' => $email,
        'phone_number' => $phone_number,
        'previous_job' => $previous_job,
        'previous_job_desc' => $previous_job_desc,
        'previous_job_sd' => $previous_job_sd,
        'previous_job_ed' => $previous_job_ed,
        'skill1' => $skill1,
        'skill2' => $skill2,
        'skill3' => $skill3,
        'profile_pic' => $profile_pic,
        'resume_pdf' => $resume_pdf,

    ];

    $query = "INSERT INTO `resume` (`user_name`,`user_id`,`f_name`,`l_name`,`dob`,`email`,`phone_number`,`previous_job`,
                      `previous_job_desc`,`previous_job_sd`,`previous_job_ed`,`skill1`,`skill2`,`skill3`,`profile_pic`,`resume_pdf`) 
        VALUES (:user_name, :user_id, :f_name, :l_name, :dob, :email, :phone_number, :previous_job,
                :previous_job_desc, :previous_job_sd, :previous_job_ed,
                :skill1, :skill2, :skill3, :profile_pic, :resume_pdf)";


    $statement = $db->prepare($query);
    $statement->execute($data);
    $statement->closeCursor();

}

function get_id($user_name){
    global $db;
    $query = 'SELECT * FROM users
              WHERE user_name = :user_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_name', $user_name);
    $statement->execute();
    $id = $statement->fetch();
    $statement->closeCursor();
    return $id;
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


function add_user($user_name, $f_name, $l_name, $dob, $email, $phone_number, $password) {
    global $db;
    $hashed_password = password_hash ($password, PASSWORD_BCRYPT);
    $data = [
        'user_name' => $user_name,
        'f_name' => $f_name,
        'l_name' => $l_name,
        'dob' => $dob,
        'email' => $email,
        'phone_number' => $phone_number,
        'password' => $hashed_password,
    ];
    $query = "INSERT INTO users (user_name, f_name, l_name, dob, email, phone_number, password) 
                VALUES (:user_name, :f_name, :l_name, :dob, :email, :phone_number, :password)";
    $statement = $db->prepare($query);
    $statement->execute($data);
    $id = $db->lastInsertId();
    $statement->closeCursor();
    return $id;
}


function is_valid_user($user_name, $password) {
    global $db;
    $query = 'select id,user_name, password from users
              where user_name = :user_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_name', $user_name);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();
    if ($row != null) {
        $hash = $row['password'];
        $_SESSION['username'] = $user_name;
        $_SESSION['password'] = $hash;
        $_SESSION['id'] = $row['id'];
        return password_verify($password, $hash);
    }
    else {
        return 0;
    }
}

function delete_resume($resume_id){
    global $db;
    $query = 'DELETE FROM resume
              WHERE resume_id = :resume_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':resume_id', $resume_id);
    $statement->execute();
    $statement->closeCursor();
}

function update_resume($resume_id,$f_name, $l_name,$dob, $email, $phone_number, $previous_job, $previous_job_desc,$previous_job_sd,
                    $previous_job_ed, $skill1, $skill2, $skill3, $profile_pic, $resume_pdf){
    global $db;
    $data = [
        'resume_id' => $resume_id,
        'f_name' => $f_name,
        'l_name' => $l_name,
        'dob' => $dob,
        'email' => $email,
        'phone_number' => $phone_number,
        'previous_job' => $previous_job,
        'previous_job_desc' => $previous_job_desc,
        'previous_job_sd' => $previous_job_sd,
        'previous_job_ed' => $previous_job_ed,
        'skill1' => $skill1,
        'skill2' => $skill2,
        'skill3' => $skill3,
        'profile_pic' => $profile_pic,
        'resume_pdf' => $resume_pdf,

    ];

    $query = "UPDATE resume SET f_name = :f_name,l_name = :l_name,dob = :dob 
                ,email = :email,phone_number = :phone_number,previous_job = :previous_job ,previous_job_desc = :previous_job_desc
                ,previous_job_sd = :previous_job_sd ,previous_job_ed = :previous_job_ed ,skill1 = :skill1,skill2 = :skill2
                ,skill3 = :skill3,profile_pic = :profile_pic,resume_pdf = :resume_pdf
        WHERE resume_id = :resume_id";

    $statement = $db->prepare($query);
    $statement->execute($data);
    $statement->closeCursor();

}

function get_resume($resume_id){
    global $db;
    $query= "SELECT * FROM `resume` WHERE `resume`.`resume_id` = '$resume_id'";

    $statement = $db->prepare($query);
    $statement ->execute();
    $resume = $statement-> fetchAll();
    $statement->closeCursor();
    return $resume;
}