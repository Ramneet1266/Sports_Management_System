<?php
include '../connect.php';

$teams =mysqli_real_escape_string($conn, $_POST['teams']);
$venue=mysqli_real_escape_string($conn, $_POST['venue']);
$date=mysqli_real_escape_string($conn, $_POST['date']);
$exist=mysqli_real_escape_string($conn, $_POST['exist']);

$query="INSERT into stats ( Teams, Venue, Match_date, Win_Loss)
values('$teams', '$venue', '$date', '$exist')";
$iquery=mysqli_query($conn, $query);
if($iquery){
    ?>
    <script>
        location.replace("../management/stats.php");
    </script>
    <?php
}

else{
    echo "not";
}

?>