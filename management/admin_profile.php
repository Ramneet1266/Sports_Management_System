
<html>
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="admin_profile.css">
</head>
<body>
    <div class="container">
        <nav>
            <div class="navbar">
                <div class="header">
                   <p style="position: relative;top: 10px; right: 12px;"> SPORTS 7 </p>
                </div>
                <div class="logo">
                    <img src="../img/admin.png">
                    <p style="top: -75px; font-weight: 500; left: 35px; position: relative; color: white;">Admin</p>
                    <p style="bottom: 40px; right: 5px; position: relative; color: white;">Online</p>
                </div>
                <ul>
                    <li class="nav">NAVIGATION</li>
                    <li><a href="#">
                        <i class="fas fa-user"></i>
                        <span class="nav-items">Attendence</span>
                    </a></li>
                    <li><a href="player_section.html">
                        <i class="fas fa-chart-bar"></i>
                        <span class="nav-items">Players Section</span>
                    </a></li>
                    <li><a href="salary_slips.html">
                        <i class="fas fa-tasks"></i>
                        <span class="nav-items">Salary Slips</span>
                    </a></li>
                    <li><a href="player_schedule.html">
                        <i class="fab fa-dochub"></i>
                        <span class="nav-items">Player Schedule</span>
                    </a></li>
                    <li><a href="stats.html">
                        <i class="fab fa-dochub"></i>
                        <span class="nav-items">Stats</span>
                    </a></li>
                </ul>
            </div>
        </nav>
        <section class="main">
            <div class="main-top">
                <a href="../registration/registration.html" class="regis"> Registration</a>
                <img src="../img/admin-bg.png">
                <p style="color: white;position: relative; right: -70px;
                top: -12px;">Admin</p>
            </div>
            <div class="main-body">
                <div class="top-head">
                   <p style="font-size: 25px; top: 10px;position: relative; color: rgb(97, 96, 96);">
                    Profile</p>
                   <div class="home">
                    <i class="fab fa-dochub"></i>
                        <span class="nav-items">Home > Profile</span>
                   </div>
                </div>
             </div>
              
    <main>
        <div class="row">
            <div class="colm-form">
                <div class="form-container">
                    <h1>Edit Profile Details</h1><br>
                    <form action="user_detail.php"  method="post">
                        <h3 style="text-align: left;">Name</h3>
                    <input type="text" name="textname" placeholder="Enter Name">
                    <h3 style="text-align: left; padding-top: 10px;">Email</h3>
                    <input type="Email" placeholder="Email" name="email">
                    <button class="btn-login" name="submit" type="submit">Submit</button>
</form>
                </div>
               
            </div>
        </div>

        
    </main>
    <section class="main1">
        <div class="row1 ">
            <div class="colm-form">
                <div class="form-container">
                    <h1>Edit Password Details</h1><br>
                    <form action="password_info.php"  method="post">
                        <h3 style="text-align: left;">User ID</h3>
                    <input type="text" name="user_id" placeholder="User ID">
                    <h3 style="text-align: left; padding-top: 10px;">Password</h3>
                    <input type="Password" placeholder="Password" name="password" 
                    style="width: 40%; position: relative; right: 153px;">
                    <h3 style="text-align: right; bottom: 75px; position: relative; right: 60px;">
                        Confirm Password</h3>
                    <input type="Password" placeholder="Password" name="confirm_password"
                    style="width: 40%; position: relative; left: 128px; bottom: 75px;">
                    <button class="btn-login" name="submit1" type="submit" style="
                    bottom: 70px; position: relative;">Submit</button>
</form>
                </div>
               
            </div>
        </div>
    </section>
    </section>
</body>
</html>