<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="registration.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>--> 
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="regis_info.php" method="post" enctype="multipart/form-data">
            <div class="form">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="name" placeholder="Enter your name" >
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="date" placeholder="Enter birth date" >
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" >
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobile" placeholder="Enter mobile number" >
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender">
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>PYR Code</label>
                            <input type="text" name="code" placeholder="Enter Player Code" >
                        </div>
                        <div class="input-field">
                            <label>Blood</label>
                            <input type="text" name="blood" placeholder="Enter Blood Group" >
                        </div>
                        <div class="input-field">
                            <label>Age</label>
                            <input type="text" name="Age" placeholder="Enter Age" >
                        </div>
                        <div class="input-field">
                            <label>Image</label>
                            <input type="File" name="uploadfile" style="border:none;">
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
                            <select name="Team_name">
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
                            <select name="Category">
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
                            <input type="date" name="start_year" placeholder="Enter Starting Year" >
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
                            <input type="text" name="address" placeholder="Permanent or Temporary" >
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" name="nationality" placeholder="Enter nationality" >
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" name="state" placeholder="Enter your state" >
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <input type="text" name="district" placeholder="Enter your district" >
                        </div>

                        <div class="input-field">
                            <label>Block Number</label>
                            <input type="number" name="block_number" placeholder="Enter block number" >
                        </div>

                        <div class="input-field">
                            <label>Identity Document</label>
                            <select name="doc">
                                <option disabled selected>Select Document</option>
                                <option>Aadhar Card</option>
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
                            <input type="text" name="bank_name" placeholder="Enter Bank name" >
                        </div>

                        <div class="input-field">
                            <label>Bank  A/C No.</label>
                            <input type="number" name="account_name" placeholder="Enter Your Account Number" >
                        </div>
                        <div class="input-field">
                            <label>IFSC Code</label>
                            <input type="number" name="ifsc_code" placeholder="Enter IFSC Code" >
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit" type="submit" name="submit">
                            <span class="btnText" type="">Submit</span>
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
