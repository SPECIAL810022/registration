<?php 

$conn = mysqli_connect('localhost','root','','batch1') OR die(mysqli_error());


if($conn){
	echo 'Database Connected !';
}

else{
	echo 'Error Establishing a Database Connection';
}

?>