<?php include 'header.php';
$dsn = 'mysql:host=localhost;
             dbname=resume_website';
$username = 'root';
$password = 'Coyote.460';
try {
    $db = new PDO($dsn, $username,
        $password);
} catch (PDOException $ex) {
    //error here
    $ex = "error connecting";
    echo $ex;
}

?>
<main>
    <h1>Resumes in the DB</h1>
    <a href="resume_form.php?">Add Resume</a>



</main>
<?php include 'footer.php'; ?>
