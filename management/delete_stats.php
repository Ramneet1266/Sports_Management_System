<?php

include ('../connect.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete FROM stats WHERE id=$id";
    $result=mysqli_query($conn, $sql);
    if($result){
        ?>
        <script>
            location.replace("stats.php");
        </script>
        <?php
    }
    else{
        echo "Not";
    }
}

?>