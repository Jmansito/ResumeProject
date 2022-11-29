<?php
require('database.php');
require('action.php');
require('resume_form.php');

$action = filter_input (INPUT_POST, 'action');
if ($action == NULL) {
    exit;
    //$action = filter_input (INPUT_GET, 'action');
   // if ($action == NULL) {
     //   $action = 'list_applicants';
    //}
}

if($action == 'list_applicants'){
    // default show applicants in the database
    //TODO finish
    get_categories();
    include('applicants_list.php');
}

//
else if($action == 'add_resume'){

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
    $profile_pic = filter_input(INPUT_POST, 'profile_pic' );
    $resume_pdf = filter_input(INPUT_POST, 'resume_pdf' );

    if($f_name == NULL ||$l_name == NULL || $dob == NULL || $email == NULL || $phone_number == NULL||
    $previous_job == NULL || $previous_job_desc == NULL || $previous_job_sd == NULL || $previous_job_ed == NULL){
        echo "ERROR, CHECK VALUES AND TRY AGAIN";
    }
    else {
        add_resume($f_name, $l_name,$dob, $email, $phone_number, $previous_job, $previous_job_desc,$previous_job_sd,
            $previous_job_ed, $skill1, $skill2, $skill3, $profile_pic, $resume_pdf);
       // header('Location: resume.php');
    }
}

else if ($action == 'login') {
    $user = filter_input(INPUT_POST, 'user_name');
    $password = filter_input(INPUT_POST, 'password');
    $pass = is_valid_user($user, $password);
    if ($pass) {
        $_SESSION['is_valid'] = true;
        header ("Location: .");
    }
    else {
        include ('../view/login_form.php');
    }
}
