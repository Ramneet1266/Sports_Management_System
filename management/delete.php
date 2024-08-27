<?php

include ('../connect.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM players_section WHERE id=$id";
    $result=mysqli_query($conn, $sql);
    if($result){
        ?>
        <script>
            location.replace("player_section.php");
        </script>
        <?php
    }
    else{
        echo "Not";
    }
}

?>