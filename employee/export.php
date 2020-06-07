<?php
// Load the database configuration file
include 'db.php';
$filename = "members_" . date('Y-m-d') . ".csv";
$delimiter = ",";
// Create a file pointer
$f = fopen('php://memory', 'w');
// Set column headers
$fields = array('ID', 'Name', 'Email', 'Phone', 'Created', 'Status');
fputcsv($f, $fields, $delimiter);
// Get records from the database
$result = mysqli_query($con,"SELECT * FROM employee ORDER BY id DESC");
if(mysqli_num_rows($result) > 0){
// Output each row of the data, format line as csv and write to file pointer
while($row = mysqli_fetch_assoc($result)){
$lineData = array($row['id'], $row['name'], $row['email'], $row['phone'], $row['created'], $row['status']);
fputcsv($f, $lineData, $delimiter);
}
}
// Move back to beginning of file
fseek($f, 0);
// Set headers to download file rather than displayed
header('Content-Type:text/csv');
header('Content-Disposition:attachment;filename="'.$filename.'";');
// Output all remaining data on a file pointer
fpassthru($f);
// Exit from file
exit();

