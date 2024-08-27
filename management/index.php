<?php
include '../connect.php';
$query="select * from players_section";
$result=mysqli_query($conn, $query);

?>
<html>
    <head>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
                        <li><a href="player_section.php">
                            <i class="fas fa-chart-bar"></i>
                            <span class="nav-items">Players Section</span>
                        </a></li>
                        <li><a href="player_schedule.php">
                            <i class="fab fa-dochub"></i>
                            <span class="nav-items">Player Schedule</span>
                        </a></li>
                        <li><a href="stats.php">
                            <i class="fab fa-dochub"></i>
                            <span class="nav-items">Stats</span>
                        </a></li>
                    </ul>
                </div>
            </nav>
            <section class="main">
                <div class="main-top">
                    <a href="../registration/registration.php" class="regis"> Registration</a>
                    <img src="../img/admin-bg.png">
                    <p style="color: white;position: relative; right: -70px;
                    top: -12px;">Admin</p>
                </div>
                <div class="main-body">
                    <div class="top-head">
                       <p style="font-size: 25px; top: 10px;position: relative; color: rgb(97, 96, 96);">
                        ATTENDENCE</p>
                       <div class="home">
                        <i class="fab fa-dochub"></i>
                            <span class="nav-items">Home > Attendence</span>
                       </div>
                    </div>
                 </div>
                  
                 <div class="main-table">
                    <div class="heading">
                        Players Attendence
                    </div>
                   
                <div class="table">
                    <table>
                        <tr>
                        <th>DATE</th>
                        <th>PYR ID</th>
                        <th>NAME</th>
                        <th>SPORTS TYPE</th>
                    </tr>
                    <tr>
                       
                       <?php
                                       while($row=mysqli_fetch_assoc($result)){
                                           ?>
   
                            <td class="main_img"><?php echo $row['DOB']; ?></td>
                            <td class="main_img"><?php echo 'WY0',$row['ID']; ?></td>
                                        <?php   
                                        $id=$row['ID'];
                                        ?>
                            <td class="main_img imp"><?php echo '<a href="report.php?updateid='.$id.'">'; echo $row['Name']; echo '</a>'; ?></td>
                            <td class="main_img"><?php echo $row['Sports_type']; ?></td>
                                       </tr>   
   
   
                                           <?php
                                       }
                                   
                                   ?> 
                                   
                    </table>
                </div>
                <div class="foot">
                    <p>Showing entries</p>
                    <div class="foot-right">
                        <p style="border: 1px solid grey; border-right: 0px;">Previous</p>
                        <p style="background-color: rgb(194, 50, 50);color: white;">1</p>
                        <p style="border: 1px solid grey; border-left: 0px;">Next</p>
                    </div>
                </div>
            </div>
           
            </section> 
        </div>
</html>