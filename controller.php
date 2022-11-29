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

// add_employee action from resume form
else if($action == 'add_resume'){
    // do all the stuff
    //TODO finish
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
