<?php
include('connect.php');

    if(isset($_POST['submit1'])){
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $new_pass = mysqli_real_escape_string($conn, $_POST['password']);
        $new_cpass = mysqli_real_escape_string($conn, $_POST['confirm_password']);

        $pass=password_hash($new_pass, PASSWORD_BCRYPT);
        $cpass=password_hash($new_cpass, PASSWORD_BCRYPT);

        if(!empty($user_id)){

                $check_token="SELECT user_id FROM password WHERE User_ID='$user_id'";
                 $check_token_run=mysqli_query($conn, $check_token);

                 if(mysqli_num_rows($check_token_run)>0){

                    if($new_pass === $new_cpass){
                        $update_pass="UPDATE password set Password='$pass' WHERE User_ID='$user_id'";
                        $update_pass_run=mysqli_query($conn, $update_pass);

                        if($update_pass_run){
                            ?>
                            <script>
                                alert("Password Updated");
                              //   location.replace("main.php");
                            </script>
                            <?php
                        }
                        else{
                            ?>
                            <script>
                                alert("Cannot reset");
                              //   location.replace("main.php");
                            </script>
                            <?php
                        }
                    }
                    else{
                        ?>
                        <script>
                            alert("Password is incorrect");
                           //  location.replace("reset_password.php");
                        </script>
                        <?php
                    }

                 }
                 else{
                    ?>
                    <script>
                        slert("Invalid Token");
                        // location.replace("main.php");
                    </script>
                    <?php
                }

            }
            else{
                ?>
                <script>
                    alert("All filed are mandetory");
                  //   location.replace("main.php");
                </script>
                <?php
            }

        }
        else{
            ?>
            <script>
                alert("No token avaliable");
               //  location.replace("main.php");
            </script>
            <?php
        }

    

?>