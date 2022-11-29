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
