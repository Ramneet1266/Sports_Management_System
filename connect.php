<?php

$conn=mysqli_connect("localhost", "root",  "", "sports_ms");

if($conn){
   ?>
   <script>
    // location.replace("management/index.php");
   </script>
   <?php
}
else{
    echo "not";
}

?>