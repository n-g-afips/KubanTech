<strong>//bootstarp library</strong>
<script src="ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
 
<?php
 
// Load the database configuration file
include 'db.php';
?>
 
<!-- Show/hide CSV upload form -->
 
<script>
function formToggle(ID){
var element = document.getElementById(ID);
if(element.style.display === "none"){
element.style.display = "block";
}else{
element.style.display = "none";
}
}
</script>
<?php
// Get status message
if(!empty($_GET['status'])){
switch($_GET['status']){
case 'succ':
$statusType = 'alert-success';
$statusMsg = 'Members data has been imported successfully.';
break;
case 'err':
$statusType = 'alert-danger';
$statusMsg = 'Some problem occurred, please try again.';
break;
case 'invalid_file':
$statusType = 'alert-danger';
$statusMsg = 'Please upload a valid CSV file.';
break;
default:
$statusType = '';
$statusMsg = '';
}
}
?>
 
<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-8 container">
<div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>

<div class="row container">
<!-- Import & Export link -->
<div class="col-md-12 head">
<div class="float-right">
<a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
<a href="exportData.php" class="btn btn-primary"><i class="exp"></i> Export</a>
</div>
</div>
<!-- CSV file upload form -->
<div class="col-md-12" id="importFrm" style="display: none;">
<form action="import.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" />
<input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
</form>
</div>
 
<!-- Data list table -->
<div class="col-md-12">
<table class="table table-striped table-bordered">
<thead class="thead-dark">
<tr>
<th>#ID</th>
<th>ФИО</th>
<th>Должность</th>
<th>Уровень</th>
<th>--||--</th>
</tr>
</thead>
<tbody>
<?php
// Get member rows
$result = mysqli_query($con,"SELECT * FROM employee ORDER BY id DESC");
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['position']; ?></td>
<td><?php echo $row['lvl']; ?></td>
<td><a href="../employee/employee.php?id=<?php echo $row['id']; ?>"><input type="button" value="ПОДРОБНО"></td>
</tr>
<?php } }else{ ?>
<tr><td colspan="5">No member(s) found...</td></tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
