<?php

    $conn = new mysqli('localhost','root','','rfy');
    if(!$conn){
        echo('Not Connected');
    }
    
    $empty_email = $empty_password = '';

    if(isset($_POST['submit'])){
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        
        $md5_user_password = md5($user_password);
        
        if(empty($user_email)){
            $empty_email = 'Please fill up this field.';
        }
        
        if(empty($user_password)){
            $empty_password = 'Please fill up this field.';
        }
        
        if(!empty($user_email) && !empty($user_password)){
            $sql = "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$md5_user_password'";
            
            $query = $conn->query($sql);
            
            if($query->num_rows > 0){
                header('location:dashboard.php');
            }else{
                echo'Not found';
            }
        }
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4">
                </div>
                <div class="col-4">
                    <?php
                        if(isset($_GET['usercreated'])){
                            echo 'User Created Successfully';
                        }
                    ?>
                    <form action="login.php" method="POST">
                        <div class="mt-2">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="user_email" value="<?php if(isset($_POST['submit'])){echo $user_email;} ?>">
                            <?php if(isset($_POST['submit'])){
                                echo "<span class='text-danger'>".$empty_email."</span>";}?>
                        </div>
                        <div class="mt-2">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="user_password" value="<?php if(isset($_POST['submit'])){echo $user_password;} ?>">
                            <?php if(isset($_POST['submit'])){
                                echo "<span class='text-danger'>".$empty_password."</span>";}?>
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-success" name="submit">Login</button>
                        </div>
                    </form>
                    <h5>Don't have an account? <a href="registration.php">Register here!</a></h5>
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>
    </body>
</html>