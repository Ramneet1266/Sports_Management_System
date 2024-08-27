<?php
include '../connect.php';
$id=$_GET['updateid'];
$query="SELECT * from player_schedule where id='$id'";
$result=mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($result);
$sport=$row['Sport'];
$date=$row['Dates'];
$league=$row['League'];
$team=$row['Team'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../salary_slips/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Salary Slip</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        
                        <div class="form-row" style="margin-bottom: 0px;">
                            <div class="name">Player Code</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="pyr_code" style="width: 150px;"
                                    value="<?php echo $sport; ?>">
                                </div>
                                
                            </div>
                            <div class="name" style="position: relative; left:350px;bottom: 50px;" >Bank Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="bank_name" 
                                    style="width: 150px; position: relative; left:350px;bottom: 50px;"
                                    value="<?php echo $date; ?>">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-row"style="margin-bottom: 0px;">
                            <div class="name">Player Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="name"
                                    style="width: 150px;" value="<?php echo $league; ?>">
                                </div>
                            </div>
                            <div class="name" style="position: relative; left:350px;bottom: 50px;">Bank Account</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="bank_acc"
                                    style="width: 150px; position: relative; left:350px;bottom: 50px;"
                                    value="<?php echo $team; ?>">
                                </div>
                            </div>
                        </div>
                       
                      
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="submit" value="submit">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php


if(isset($_POST['submit'])){
$sport =mysqli_real_escape_string($conn, $_POST['sport']);
$date=mysqli_real_escape_string($conn, $_POST['date']);
$league=mysqli_real_escape_string($conn, $_POST['league']);
$team=mysqli_real_escape_string($conn, $_POST['team']);

$query="UPDATE player_schedule set id='$id',Sport='$sport',  
 Dates='$date', League='$league', Team='$team' WHERE id =$id";

$iquery=mysqli_query($conn, $query);
if($iquery){
    ?>
    <script>
        location.replace("../management/player_schedule.php");
    </script>
    <?php
}
}
else{
    echo "not";
}

?>
