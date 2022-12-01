<?php include 'header.php'; ?>
<?php
if(!isset($_SESSION['username'])){
    header("Location:login.php");
}
?>
<div class="title-wrapper">
    <!-- Change title of header as needed -->
    <!-- Still need to style this page -->
    <h1>Please Select What You Would Like To Do</h1>
    <p><button class="login_button"><a href="controller.php?action=add_resume">ADD RESUME</a></button></p>
    <p><button class="login_button"><a href="controller.php?action=list_applicants">SHOW APPLICANTS</a></button></p>

</div>

<?php include 'footer.php'; ?>
