<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link rel="stylesheet" href="../registration/registration.css">
     
     <!----===== Iconscout CSS ===== -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
 
</head>

<body>
<div class="container">
        <header>Registration</header>

        <form action="matches_info.php" method="post" >
            <div class="form">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Teams</label>
                            <input type="text" name="teams" placeholder="Enter Team Names" >
                        </div>

                        <div class="input-field">
                            <label>Venue</label>
                            <input type="text" name="venue" placeholder="Enter Venue" >
                        </div>

                        <div class="input-field">
                            <label>Match Date</label>
                            <input type="date" name="date" placeholder="Enter Date" >
                        </div>

                        <div class="input-field">
                            <label>Win/Loss</label>
                            <input type="text" name="exist" placeholder="Win/Loss" >
                        </div>

                  
                </div> 

                <button class="nextBtn" type="submit">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
            </div>
</body>
</html>