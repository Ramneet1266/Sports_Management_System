<?php
include 'connect.php';

if(isset($_POST['submit'])){

    $user_id=$_POST['user_id'];
    $password=$_POST['password'];

    $query="select * from password where User_ID='$user_id' ";
    $result=mysqli_query($conn, $query);
    $row=mysqli_num_rows($result);

    if($row > 0){
        $email_pass= mysqli_fetch_assoc($result);
        $db_pass= $email_pass['Password'];
        //$pass_decode=password_verify($password, $db_pass);
    
        if( $db_pass){
            ?>
            <script>
            location.replace("management/index.php");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Incorrect Password");
                location.replace("login.php");
            </script>
            <?php
        }
        
    }
}
?>