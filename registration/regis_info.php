<?php
include '../connect.php';

if(isset($_POST['submit'])){

    $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "images/" . $filename;
    

//get data from form  
$fname =mysqli_real_escape_string($conn, $_POST['name']);
$Dob=mysqli_real_escape_string($conn, $_POST['date']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$mobile=mysqli_real_escape_string($conn, $_POST['mobile']);
$gender=mysqli_real_escape_string($conn, $_POST['gender']);
$pyr_code=mysqli_real_escape_string($conn, $_POST['code']);
$category=mysqli_real_escape_string($conn, $_POST['Category']);
$blood=mysqli_real_escape_string($conn, $_POST['blood']);
$age=mysqli_real_escape_string($conn, $_POST['Age']);
$team_name=mysqli_real_escape_string($conn, $_POST['Team_name']);
$Syear=mysqli_real_escape_string($conn, $_POST['start_year']);
$address=mysqli_real_escape_string($conn, $_POST['address']);
$nationality=mysqli_real_escape_string($conn, $_POST['nationality']);
$state=mysqli_real_escape_string($conn, $_POST['state']);
$district=mysqli_real_escape_string($conn, $_POST['district']);
$Bnumber=mysqli_real_escape_string($conn, $_POST['block_number']);
$document=mysqli_real_escape_string($conn, $_POST['doc']);
$bank_name=mysqli_real_escape_string($conn, $_POST['bank_name']);
$account_name=mysqli_real_escape_string($conn, $_POST['account_name']);
$ifsc_code=mysqli_real_escape_string($conn, $_POST['ifsc_code']);


$query="insert into players_section (Image, Name, Contact, Identity, DOB, Joining, Blood,Age,
Sports_type, Email, Gender, Pyr_Code, Team, Address, Nationality, State, District, 
Block_number, Bank_Name, Account_Name, Ifsc_Code)
values('$filename','$fname', $mobile, '$document', '$Dob', '$Syear', '$blood','$age', '$category',
'$email', '$gender', '$pyr_code', '$team_name', '$address','$nationality','$state',
 '$district', '$Bnumber','$bank_name', '$account_name', '$ifsc_code')";
$iquery=mysqli_query($conn, $query);
if (move_uploaded_file($tempname, $folder)) {
    ?>
	<script>
		location.replace("../management/player_section.php");
		</script>
	<?php
} else {
    echo "<h3> Failed to upload image!</h3>";
}
}
else{
    header("Location: ../login.php");
}
error_reporting(0);

$msg = "";

// If upload button is clicked ...
// if (isset($_POST['upload'])) {

// 	$filename = $_FILES["uploadfile"]["name"];
// 	$tempname = $_FILES["uploadfile"]["tmp_name"];
// 	$folder = "images/" . $filename;
//     echo "$folder";
// 	$db = mysqli_connect("localhost", "root", "", "sports_ms");
  

	// // Get all the submitted data from the form
	// $sql = "INSERT INTO image (filename) VALUES ('$filename')";

	// // Execute query
	// mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	// if (move_uploaded_file($tempname, $folder)) {
	// 	echo "<h3> Image uploaded successfully!</h3>";
	// } else {
	// 	echo "<h3> Failed to upload image!</h3>";
	// }
// }
?>
<?php
//   $query = " select * from image ";
//   $result = mysqli_query($db, $query);
  
// while ($data = mysqli_fetch_assoc($result)) {
//   ?>
  <!-- <img src="images/"> -->
  <?php
// }

?>