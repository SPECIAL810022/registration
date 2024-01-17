  <?php
include 'connection.php';
$name = $_POST['name'];
$email = $_POST['mail'];
$password =$_POST['pass'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$course = $_POST['course'];
$language = implode(",", $_POST['language']);

$image = $_FILES['img']['name'];

$new_image = rand(965587,456578).'_'.time().'_'.$image;
$upload_path = 'upload/'.$new_image;
$source_path = $_FILES['img']['tmp_name'];

if(move_uploaded_file($source_path, $upload_path)){

	$user_insert = mysqli_query($conn,"INSERT INTO new_registration 
		VALUES('','$name','$email','$password','$gender','$dob','$address',
		'$course','$language','$upload_path')") or die(mysqli_error($conn));

	if($user_insert){
		
		header('location:user.php');
	}
	
	else{
		echo 'Records Not Saved';

	}
}


?>