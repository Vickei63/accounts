

<?php

    $success = 0;
    $user = 0;
    
    //SIGNUP
        //1. INSERT DATA
        //2. ENTER THE DATABASE(QUERID)
        //3. DATA SHOULD NOT BE INSERTED 2 TIMES
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include "connect.php";

        $username = $_POST['username'];
        $password = $_POST['password'];


        // $sql = "insert into users (username,password)
        // values('$usern','$passw')";
        // $result = mysqli_query($conn,$sql);

        // if($result){
        //     echo "Data inserted successfully !";
        // }
        // else{
        //     echo "data not inserted";
        // }
        
        $sql = "select * from users where username = '$username'";
        $result = mysqli_query($conn,$sql);

         if($result){
            $num = mysqli_num_rows($result);
            if($num >0){
                //echo "User already exist";
                $user =1;
            }
            else{
                $sql = "insert into `users`(username,password)
                    values('$username','$password')";
               $result = mysqli_query( $conn,$sql);

               if($result){
                    //echo "Signup Successful";
                    $success =1;
                    header("location: home.php");
                }
                else{
                    die(mysqli_error($conn));
                }
            }

            
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Signup</title>
</head>
<body>

    <div class="container mt-5">
        <form action="signup.php" method="post">

        <div class="form-group">
            <label for="">Username:</label>
            <input type="text" name="username"
            placeholder="Enter your Username" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Password:</label>
            <input type="text" name="password"
            placeholder="Enter your Password" class="form-control">
        </div>

            <button class="btn btn-primary mt-5 w-100">Sign Up</button>
        </form>

    </div>
    
</body>
</html>