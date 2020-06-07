<?php
// Load the database configuration file
// print_r($_POST);
if(isset($_POST['importSubmit'])){
// Allowed mime types
include "rtf.php";
include 'db.php';


$qstring="";

$csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
$rtfMimes = array('application/rtf','application/x-rtf','text/richtext','application/msword');
#echo $_FILES['file']['type']; die();

// Validate whether selected file is a CSV file
if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $rtfMimes)){
// If the file is uploaded




if(is_uploaded_file($_FILES['file']['tmp_name'])){
// Open uploaded CSV file with read-only mode
//$csvFile = fopen($_FILES['file']['tmp_name'], 'r');
// Skip the first line
//fgetcsv($csvFile,10000,",");
// Parse data from CSV file line by line
#while(($line = fgetcsv($csvFile,1000,",")) !== FALSE){
//} Get row data

$text = rtf2text($_FILES['file']['tmp_name']);


$index=0;
$mod_str = explode(". ",$text);
foreach ($mod_str as $sent){
$prevQuery = "SELECT id FROM documentation WHERE doc = '".$_FILES['file']['name']."'";
$prevResult = mysqli_query($con,$prevQuery);
//echo $prevResult;
if(mysqli_num_rows($prevResult) < 1){
mysqli_query($con,"INSERT INTO documentation (position,doc, no_pt, text) VALUES (1,".$_FILES['file']['name'].",$index,".$sent.")");
}
}
    

#print $text;
#die();







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

