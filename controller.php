<?php
require('database.php');
require('action.php');


$action = filter_input (INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input (INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_applicants';
    }
}

if($action == 'list_applicants'){
    //get_categories();
    include('applicants_list.php');
}
else if ($action =='add_resume'){
    require('resume_form.php');
}
//
else if($action == 'add_resume_form'){
    //require('resume_form.php');
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

    // Profile pic blob
    $profile_pic = $_FILES['profile_pic']['name'];
    $tmp = $_FILES['profile_pic']['tmp_name'];
    $path = getcwd() . DIRECTORY_SEPARATOR . 'images';
    $name = $path . DIRECTORY_SEPARATOR . $_FILES['profile_pic']['name'];

    //Resume pdf blob
    $resume_pdf = $_FILES['resume_pdf']['name'];
    $tmp = $_FILES['resume_pdf']['tmp_name'];
    $path = getcwd() . DIRECTORY_SEPARATOR . 'images';
    $name = $path . DIRECTORY_SEPARATOR . $_FILES['resume_pdf']['name'];
    $success = move_uploaded_file($tmp, $name);


    add_resume($f_name, $l_name,$dob, $email, $phone_number, $previous_job, $previous_job_desc,$previous_job_sd,
        $previous_job_ed, $skill1, $skill2, $skill3, $profile_pic, $resume_pdf);
        header('Location: home.php'); //TODO Change this to redirect to view applicants

}

else if ($action == 'login') {
    $user_name = filter_input(INPUT_POST, 'user_name');
    $password = filter_input(INPUT_POST, 'password');
    $pass = is_valid_user($user_name, $password);
    if ($pass) {
        $_SESSION['is_valid'] = true;
        header ("Location: home.php");
    }
    else {
        echo"didnt work";
        include ('login.php');
    }
}
else if ($action == 'register') {
    $user_name = filter_input(INPUT_POST, 'user_name');
    $password = filter_input(INPUT_POST, 'password');
    $f_name = filter_input(INPUT_POST, 'f_name');
    $l_name = filter_input(INPUT_POST, 'l_name');
    $dob = filter_input(INPUT_POST, 'dob');
    $email = filter_input(INPUT_POST, 'email');
    $phone_number = filter_input(INPUT_POST, 'phone_number');
    if($user_name == NULL || $password == NULL || $f_name == NULL || $l_name == NULL
        || $dob == NULL || $email == NULL || $phone_number == NULL){
        echo "Invalid employee data. Check all fields and try again.";
    } else {
        add_user($user_name, $f_name, $l_name, $dob, $email, $phone_number, $password);
        header('Location: home.php');
    }

}

else if ($action == 'delete_resume'){
    $resume_id = filter_input (INPUT_POST, 'resume_id', FILTER_VALIDATE_INT);
    delete_resume($resume_id);
    header('Location: applicants_list.php');
}

else if ($action == 'show_update_resume'){
    $resume_id = filter_input (INPUT_POST, 'resume_id', FILTER_VALIDATE_INT);
    $resume = get_resume($resume_id);
    include('update_resume_form.php');
}

else if($action == 'update_resume'){
    //require('resume_form.php');
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

    // Profile pic blob
    $profile_pic = $_FILES['profile_pic']['name'];
    $tmp = $_FILES['profile_pic']['tmp_name'];
    $path = getcwd() . DIRECTORY_SEPARATOR . 'images';
    $name = $path . DIRECTORY_SEPARATOR . $_FILES['profile_pic']['name'];

    //Resume pdf blob
    $resume_pdf = $_FILES['resume_pdf']['name'];
    $tmp = $_FILES['resume_pdf']['tmp_name'];
    $path = getcwd() . DIRECTORY_SEPARATOR . 'images';
    $name = $path . DIRECTORY_SEPARATOR . $_FILES['resume_pdf']['name'];
    $success = move_uploaded_file($tmp, $name);


    update_resume($resume_id,$f_name, $l_name,$dob, $email, $phone_number, $previous_job, $previous_job_desc,$previous_job_sd,
        $previous_job_ed, $skill1, $skill2, $skill3, $profile_pic, $resume_pdf);
    header('Location: home.php'); //TODO Change this to redirect to view applicants

}
