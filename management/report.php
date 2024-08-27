<?php
include('../connect.php');
$id=$_GET['updateid'];
$sql="SELECT * from players_section where id='$id'";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$filename=$row['Image'];
$fname=$row['Name'];
$date=$row['DOB'];
$email=$row['Email'];
$contact=$row['Contact'];
$gender=$row['Gender'];
$pyr_code=$row['Pyr_Code'];
$category=$row['Sports_type'];
$blood=$row['Blood'];
$age=$row['Age'];
$team_name=$row['Team'];
$Syear=$row['Joining'];
$address=$row['Address'];
$nationality=$row['Nationality'];
$state=$row['State'];
$district=$row['District'];
$Bnumber=$row['Block_number'];
$document=$row['Identity'];
$bank_name=$row['Bank_Name'];
$account_name=$row['Account_Name'];
$ifsc_code=$row['Ifsc_Code'];

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Document</title>
		<link rel="stylesheet" href="report.css" />
	</head>
	<body>
		<h1>Sports Management <span>Player Code:<?php echo 'WY0',$id ?></span></h1>
		<div class="container">
			<div class="full">
				<p class="heading">Player Information</p>
				<div class="gen-info">
					<div class="first-div">
						<b>Full Name</b>
						<b>DOB</b>
						<b>Gender</b>
						<b>Age</b>
						<b>Nationality</b>
					</div>
					<div class="second-div">
						<p><?php echo $fname ?></p>
						<p><?php echo $date ?></p>
						<p><?php echo $gender ?></p>
						<p><?php echo $age ?></p>
						<p><?php echo $nationality ?></p>
						
					</div>
				</div>
				<hr />
				<div class="gen-info">
					<div class="first-div">
						<b>Address</b>
						<b>District</b>
						<b>State</b>
						<b>Block No</b>
						<b>Email Id</b>
						<b>Mobile No</b>
						<b>Identification</b>
					</div>
					<div class="second-div">
					<p><?php echo $address ?></p>
					<p><?php echo $district ?></p>
					<p><?php echo $state ?></p>
					<p><?php echo $Bnumber ?></p>
					<p><?php echo $email ?></p>
					<p><?php echo $contact ?></p>
					<p><?php echo $document ?></p>
					</div>
				</div>
				<hr />
				<div class="gen-info">
					<div class="first-div">
						<b>Sports Type</b>
						<b>Joining</b>
						<b>Blood Group</b>
						<b>Team Name</b>
						<b>Photograph</b>
					</div>
					<div class="second-div">
					<p><?php echo $category ?></p>
					<p><?php echo $Syear ?></p>
					<p><?php echo $blood ?></p>
					<p><?php echo $team_name ?></p>
					<p><img class="img" src="<?php echo "../registration/images/".$filename?>"></p>
					</div>
				</div>
				<hr />
			</div>
			<button>Print</button>
		</div>
	</body>
</html>
