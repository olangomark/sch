<?php 
session_start();
session_destroy();

// Sanitize the ID parameter
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Redirect to the login page
header('Location: ../index.php');
exit();
?>
<!DOCTYPE html>
<html>
<body>
<div style="width:150px;margin:auto;height:500px;margin-top:300px">
<?php

	include('../dist/includes/dbcon.php');
	//$date = date("Y-m-d H:i:s");
	//$id=$_SESSION['id'];
	//$remarks="has logged out the system at ";  
	//mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));
	
	session_destroy();
	
 echo '<meta http-equiv="refresh" content="2;url=../index.php">';
 echo'<progress max=100><strong>Progress: 60% done. </strong></progress><br>';
 echo'<span class="itext">Logging out please wait!...</span>';
?>
</div>
</body>
</html>

<?php 

