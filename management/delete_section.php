<?php

include ('../connect.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM salary_slips WHERE id=$id";
    $result=mysqli_query($conn, $sql);
    if($result){
        ?>
        <script>
            location.replace("salary_slips.php");
        </script>
        <?php
    }
    else{
        echo "Not";
    }
}

?>