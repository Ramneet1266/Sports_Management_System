<?php
include '../connect.php';
$id=$_GET['updateid'];
$query="SELECT * from salary_slips where id='$id'";
$result=mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($result);
$name=$row['Names'];
$salary_month_value=$row['Salary_month'];
$pyr_code=$row['Pyr_code'];
$bank_name=$row['Bank_name'];
$bank_acc=$row['bank_account'];
$ifsc_code=$row['Ifsc_code'];
$gender=$row['Gender'];
$earnings=$row['Earnings'];
$deductions=$row['Deductions'];
$net_salary=$row['Net_salary'];
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
                                    value="<?php echo $pyr_code; ?>">
                                </div>
                                
                            </div>
                            <div class="name" style="position: relative; left:350px;bottom: 50px;" >Bank Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="bank_name" 
                                    style="width: 150px; position: relative; left:350px;bottom: 50px;"
                                    value="<?php echo $bank_name; ?>">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-row"style="margin-bottom: 0px;">
                            <div class="name">Player Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="name"
                                    style="width: 150px;" value="<?php echo $name; ?>">
                                </div>
                            </div>
                            <div class="name" style="position: relative; left:350px;bottom: 50px;">Bank Account</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="bank_acc"
                                    style="width: 150px; position: relative; left:350px;bottom: 50px;"
                                    value="<?php echo $bank_acc; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 0px;">
                            <div class="name">Gender</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="gender"style="width: 150px;"
                                    value="<?php echo $gender; ?>">
                                </div>
                            </div>
                            <div class="name" style="position: relative; left:350px;bottom: 50px;">IFSC Code</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="ifsc_code"
                                    style="width: 150px; position: relative; left:350px;bottom: 50px;"
                                    value="<?php echo $ifsc_code; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 0px;">
                            <div class="name">Salary Month</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="salary_month"style="width: 150px;
                                    "value="<?php echo $salary_month_value; ?>">
                                </div>
                            </div>
                            <div class="name" style="position: relative; left:350px;bottom: 50px;">Earnings</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="earning"
                                    style="width: 150px; position: relative; left:350px;bottom: 50px;"
                                    value="<?php echo $earnings; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 0px;">
                            <div class="name">Deduction</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="deduction"style="width: 150px;"
                                    value="<?php echo $deductions; ?>">
                                </div>
                            </div>
                            <div class="name" style="position: relative; left:350px;bottom: 50px;">Net Earnings</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="net_earning"
                                    style="width: 150px; position: relative; left:350px;bottom: 50px;"
                                    value="<?php echo $net_salary; ?>">
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
    echo "hello";
$pyr_code =mysqli_real_escape_string($conn, $_POST['pyr_code']);
$name=mysqli_real_escape_string($conn, $_POST['name']);
$gender=mysqli_real_escape_string($conn, $_POST['gender']);
$bank_name=mysqli_real_escape_string($conn, $_POST['bank_name']);
$bank_acc=mysqli_real_escape_string($conn, $_POST['bank_acc']);
$ifsc_code=mysqli_real_escape_string($conn, $_POST['ifsc_code']);
$salary_month_value=mysqli_real_escape_string($conn, $_POST['salary_month']);
$earnings=mysqli_real_escape_string($conn, $_POST['earning']);
$deductions=mysqli_real_escape_string($conn, $_POST['deduction']);
$net_salary=mysqli_real_escape_string($conn, $_POST['net_earning']);

$query="UPDATE salary_slips set id='$id', Pyr_code='$pyr_code', Names='$name',  
 Bank_name='$bank_name', bank_account='$bank_acc', Ifsc_code='$ifsc_code' Gender='$gender',
Salary_month='$salary_month_value', Earnings='$earnings', Deductions='$deductions', 
Net_salary='$net_salary'  WHERE id =$id";

$iquery=mysqli_query($conn, $query);
if($iquery){
    ?>
    <script>
        location.replace("../management/salary_slips.php");
    </script>
    <?php
}
}
else{
    echo "not";
}

?>
