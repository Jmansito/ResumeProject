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
    // default show applicants in the database
    //TODO finish
    get_categories();
    include('applicants_list.php');
}
else if ($action =='add_resume'){
    require('resume_form.php');
}
//
else if($action == 'add_resume_form'){
    //require('resume_form.php');
    $user_name = filter_input(INPUT_POST, 'user_name');
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
    //$profile_pic =  'profile_pic' ;
    //imagejpeg($profile_pic, '/images/');
    $profile_pic = $_FILES['profile_pic']['name'];
    $tmp = $_FILES['profile_pic']['tmp_name'];
    $path = getcwd() . DIRECTORY_SEPARATOR . 'images';
    $name = $path . DIRECTORY_SEPARATOR . $_FILES['profile_pic']['name'];
    //$resume_pdf = filter_input(INPUT_GET, 'resume_pdf' );
    $resume_pdf = $_FILES['resume_pdf']['name'];
    $tmp = $_FILES['resume_pdf']['tmp_name'];
    $path = getcwd() . DIRECTORY_SEPARATOR . 'images';
    $name = $path . DIRECTORY_SEPARATOR . $_FILES['resume_pdf']['name'];
    //imagejpeg($resume_pdf, '/images/');


    //TODO FIX ERROR HANDLING -- This if statement was blocking it. Current code is adding resume to database.

   if($f_name == NULL ||$l_name == NULL || $dob == NULL || $email == NULL || $phone_number == NULL||
    $previous_job == NULL || $previous_job_desc == NULL || $previous_job_sd == NULL || $previous_job_ed == NULL){
        echo "ERROR, CHECK VALUES AND TRY AGAIN";
    }
    else {
        add_resume($user_name, $f_name, $l_name,$dob, $email, $phone_number, $previous_job, $previous_job_desc,$previous_job_sd,
            $previous_job_ed, $skill1, $skill2, $skill3, $profile_pic, $resume_pdf);
        header('Location: home.php');
    }
}

else if ($action == 'login') {
    $user_name = filter_input(INPUT_POST, 'user_name');
    $password = filter_input(INPUT_POST, 'password');
    $pass = is_valid_user($user_name, $password);
    if ($pass) {
        $_SESSION['is_valid'] = true;
        echo"worked";
//        header ("Location: /ResumeProject/home.php");
    }
    else {
        echo"didnt work";
//        include ('login.php');
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

    add_user($user_name, $f_name, $l_name, $dob, $email, $phone_number, $password);

    // ADD THIS BACK ONCE IT IS WORKING

//    $id = add_user($user_name, $f_name, $l_name, $dob, $email, $phone_number, $password);
//    $name='UserName';
//    $value=$id;
//    $expiration = time()+(60*60*24*7);
//    setcookie($name, $value, $expiration);

    header("Location: ../ResumeProject/login.php");

}
