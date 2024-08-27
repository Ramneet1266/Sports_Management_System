<?php
include '../../connect.php';

$sport =mysqli_real_escape_string($conn, $_POST['sport']);
$league=mysqli_real_escape_string($conn, $_POST['league']);
$date=mysqli_real_escape_string($conn, $_POST['date']);
$team=mysqli_real_escape_string($conn, $_POST['team']);
$status=mysqli_real_escape_string($conn, $_POST['status']);

$query="INSERT into player_schedule ( Status, Sport, Dates, League, Team)
values('$status', '$sport', '$date', '$league','$team')";
$iquery=mysqli_query($conn, $query);
if($iquery){
    ?>
    <script>
        location.replace("../../management/player_schedule.php");
    </script>
    <?php
}

else{
    echo "not";
}

?>