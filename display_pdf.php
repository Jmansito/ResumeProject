<?php
$var_value = $_GET['var_name'];
header('Content-type: application/pdf');
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Content-Disposition: inline;filename='document.pdf'");
header("Content-length: ".strlen($var_value));
echo $var_value;
exit();
