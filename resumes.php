<?php include 'header.php'; ?>
<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location:login.php");
}
?>
<main>
    <h1>Resumes in the DB</h1>
    <p><button><a href="controller.php?action=add_resume">ADD RESUME</a></button></p>
    <p><button><a href="controller.php?action=list_applicants">SHOW APPLICANTS TEST</a></button></p>



</main>
<?php include 'footer.php'; ?>
