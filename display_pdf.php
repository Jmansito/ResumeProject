<?php
$var_value = $_GET['var_name'];
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=" . $var_value);
@readfile('images/' . $var_value);
exit();
