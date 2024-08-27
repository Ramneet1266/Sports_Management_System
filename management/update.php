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
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../registration/registration.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>--> 
</head>
<body>
    <div class="container">
        <header>UPDATE DETAILS</header>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="name" placeholder="Enter your name"
                            value="<?php echo $fname; ?>" >
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="date" placeholder="Enter birth date"
                            value="<?php echo $date; ?>" >
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email"
                            value="<?php echo $email; ?>" >
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobile" placeholder="Enter mobile number"
                            value="<?php echo $contact; ?>" >
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" value="<?php echo $gender; ?>">
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>PYR Code</label>
                            <input type="text" name="code" placeholder="Enter Player Code"
                            value="<?php echo $pyr_code; ?>" >
                        </div>
                        <div class="input-field">
                            <label>Blood</label>
                            <input type="text" name="blood" placeholder="Enter Blood Group"
                            value="<?php echo $blood; ?>" >
                        </div>
                        <div class="input-field">
                            <label>Age</label>
                            <input type="text" name="Age" placeholder="Enter Age"
                            value="<?php echo $age; ?>" >
                        </div>
                        <div class="input-field">
                            <label>Image</label>
                            <input type="File" name="uploadfile" style="border:none;"
                            value="<?php echo $filename; ?>">
                        </div>

                        <div class="input-radio">
                <input type="radio" name="team" value="yes" onclick="text(0)" >
                <label for="Yes" class="font">Join a Team </label>
                <input type="radio" name="team" value="no"  onclick="text(1)" >
                <label for="No" class="font" >Play Individually</label>
                </div>
                    </div>
                </div>

                <div class="details ID" >

                    <div class="fields" id="my_code" >
                        

                        <div class="input-field">
                            <label>Team Name</label>
                            <select name="Team_name" value="<?php echo $team_name; ?>">
                                <option disabled selected>Select Team</option>
                                <option>Titans</option>
                                <option>Black Clover</option>
                                <option>Super Lions</option>
                                <option>Universe 07</option>
                                <option>Team 07</option>
                            </select>
                        </div>

                    </div>
                    <div id="my_code1">
                    <div class="input-field">
                            <label>Category</label>
                            <select name="Category" value="<?php echo $category; ?>">
                                <option disabled selected>Select Category</option>
                                <option>Football</option>
                                <option>Cricket</option>
                                <option>Badminton</option>
                                <option>Hockey</option>
                                <option>Tennis</option>
                            </select>
                        </div>
                   
                        <div class="input-field" >
                            <label style="margin-left:10px">Joining Year</label>
                            <input type="date" name="start_year" placeholder="Enter Starting Year"
                            value="<?php echo $Syear; ?>" >
                        </div>
                    </div>
                    
                </div> 

                <button class="nextBtn" type="button">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
            </div>
            

            <div class="form second" style="height:100%;">
                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address Type</label>
                            <input type="text" name="address" placeholder="Permanent or Temporary"
                            value="<?php echo $address; ?>" >
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" name="nationality" placeholder="Enter nationality"
                            value="<?php echo $nationality; ?>" >
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" name="state" placeholder="Enter your state"
                            value="<?php echo $state; ?>" >
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <input type="text" name="district" placeholder="Enter your district"
                            value="<?php echo $district; ?>" >
                        </div>

                        <div class="input-field">
                            <label>Block Number</label>
                            <input type="number" name="block_number" placeholder="Enter block number"
                            value="<?php echo $Bnumber; ?>" >
                        </div>

                        <div class="input-field">
                            <label for="doc">Identity Document</label>
                            <select name="doc">
                                <option disabled selected>Select Document</option>
                                <option >Aadhar Card</option>
                                <option>Passport</option>
                                <option>Driving License</option>
                                <option>Voter ID Card</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Bank Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Bank Name</label>
                            <input type="text" name="bank_name" placeholder="Enter Bank name"
                            value="<?php echo $bank_name; ?>" >
                        </div>

                        <div class="input-field">
                            <label>Bank  A/C No.</label>
                            <input type="number" name="account_name" placeholder="Enter Your Account Number"
                            value="<?php echo $account_name; ?>" >
                        </div>
                        <div class="input-field">
                            <label>IFSC Code</label>
                            <input type="number" name="ifsc_code" placeholder="Enter IFSC Code"
                            value="<?php echo $ifsc_code; ?>" >
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit" type="submit" name="submit">
                            <span class="btnText" type="">UPDATE</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script>
         const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


nextBtn.addEventListener("click", ()=> {
            form.classList.add('secActive');
        
    })

backBtn.addEventListener("click", () => form.classList.remove('secActive'));

function text(x){
        if(x==0){
            document.getElementById("my_code").style.display="flex";
            document.getElementById("my_code1").style.display="none";
        }
        else{ //1
            document.getElementById("my_code").style.display="none";
            document.getElementById("my_code1").style.display="flex";
        }
        return;
    }

    </script>

</body>
</html>
<?php


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


$query="UPDATE players_section set id='$id',Image='$filename', Name='$fname', 
Contact='$mobile', Identity='$document', DOB='$Dob', Joining='$Syear', 
Blood='$blood',Age='$age',Sports_type='$category', Email='$email', 
Gender='$gender', Pyr_Code='$pyr_code', Team='$team_name', 
Address='$address', Nationality='$nationality', State='$state', 
District='$district', Block_number='$Bnumber', Bank_Name='$bank_name', 
Account_Name='$account_name', Ifsc_Code='$ifsc_code' WHERE id =$id";

$iquery=mysqli_query($conn, $query);
if (move_uploaded_file($tempname, $folder)) {
    ?>
    <script>
        location.replace("../management/player_section.php");
    </script>
    <?php
} else {
    ?>
    <script>
        location.replace("../management/player_section.php");
    </script>
    <?php
}
}

error_reporting(0);

$msg = "";


?>