<?php include 'header.php';
//$dsn = 'mysql:host=localhost;
//             dbname=resume_website';
//$username = 'root';
//$password = '';
//try {
//    $db = new PDO($dsn, $username,
//        $password);
//} catch (PDOException $ex) {
//    //error here
//    $ex = "error connecting";
//    echo $ex;
//}

?>
<main>
    <h1>Resumes in the DB</h1>
    <a href="resume_form.php?">Add Resume</a>
    <p><button><a href="controller.php?action=list_applicants">SHOW APPLICANTS TEST</a></button></p>



</main>
<?php include 'footer.php'; ?>
