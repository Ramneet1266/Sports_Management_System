<?php
include ('connect.php');

if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($conn, $_POST['textname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
}

$check_email= "SELECT email from sports_ms where email='$email'";
    $query=(mysqli_query($conn, $check_email));

    $email_count=mysqli_num_rows($query);

     if($email_count > 0){
        ?>
         <script>
            alert("Email already exists");
            location.replace("index.php");
            </script>
             <?php
     }
     else{
        $query_insert = "INSERT into login (Name, Email)
        values ('$name', '$email')";

        $query_run= mysqli_query($conn, $query_insert);

        if($query_run){
            ?>
            <script>
               alert("Inserted Successfully");
               location.main("index.php");
          
            </script>
            <?php
           }
        else{
            ?>
            <script>
                alert("NOT inserted");
                location.replace("index.php");
                </script>
                <?php
        }
        }
     
?>