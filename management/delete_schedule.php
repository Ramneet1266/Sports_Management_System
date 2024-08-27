<?php

include ('../connect.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM player_schedule WHERE id=$id";
    $result=mysqli_query($conn, $sql);
    if($result){
        ?>
        <script>
            location.replace("player_schedule.php");
        </script>
        <?php
    }
    else{
        echo "Not";
    }
}

?>