<?php
// Load the database configuration file
include 'db.php';
// print_r($_POST);
if(isset($_POST['importSubmit'])){
// Allowed mime types
$csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
// Validate whether selected file is a CSV file
if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
// If the file is uploaded
if(is_uploaded_file($_FILES['file']['tmp_name'])){
// Open uploaded CSV file with read-only mode
$csvFile = fopen($_FILES['file']['tmp_name'], 'r');
// Skip the first line
//fgetcsv($csvFile,10000,",");
// Parse data from CSV file line by line
while(($line = fgetcsv($csvFile,1000,",")) !== FALSE){
// Get row data

$qstring = "";

$name = $line[0];
print $name;
print "|";
$position = $line[1];
print $position;
$regdate = $line[2];
$is_reg = $line[3];
$tab_nr = $line[4];
$is_pos_approved = $line[5];
$lvl = $line[6];
$is_health = $line[7];
$skill1 = $line[8];
$skill2	= $line[9];
$skill3	= $line[10];
$skill4	= $line[11];
$skill5	= $line[12];
$skill6	= $line[13];


// Check whether member already exists in the database with the same email
$prevQuery = "SELECT id FROM employee WHERE tab_nr = '".$line[4]."'";
$prevResult = mysqli_query($con,$prevQuery);
//echo $prevResult;
if(mysqli_num_rows($prevResult) > 0){
// Update member data in the database
mysqli_query($con,"UPDATE employee SET name = '".$name."', position = '".$position."', regdate = '".$regdate."', is_reg = '".$is_reg."', tab_nr = '".$tab_nr."', is_pos_approved = '".$is_pos_approved."', lvl = '".$lvl."', is_health = '".$is_health."', skill1 = '".$skill1."', skill2 = '".$skill2."', skill3 = '".$skill3."', skill4 = '".$skill4."', skill5 = '".$skill5."', skill6 = '".$skill6."'  WHERE tab_nr = '".$tab_nr."'");
}else{
// Insert member data in the database
mysqli_query($con,"INSERT INTO employee (name, position, regdate, is_reg, tab_nr, is_pos_approved, lvl, is_health, skill1, skill2, skill3, skill4, skill5, skill6) VALUES ('".$name."', '".$position."', '".$regdate."', '".$is_reg."', '".$tab_nr."', '".$is_pos_approved."', '".$lvl."', '".$is_health."', '".$skill1."', '".$skill2."', '".$skill3."', '".$skill4."', '".$skill5."', '".$skill6."')");
}
}
// Close opened CSV file
fclose($csvFile);
$qstring = '?status=succ';
}else{
$qstring = '?status=err';
}
}else{
$qstring = '?status=invalid_file';
}
}
// Redirect to the listing page
header("Location:index.php".$qstring);

