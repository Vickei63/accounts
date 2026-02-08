

<?php
    
    //SIGNUP
        //1. INSERT DATA
        //2. ENTER THE DATABASE(QUERID)
        //3. DATA SHOULD NOT BE INSERTED 2 TIMES
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include "connect.php";

        

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
            <input type="text" placeholder="Enter your Username" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Password:</label>
            <input type="text" placeholder="Enter your Password" class="form-control">
        </div>

            <button class="btn btn-primary mt-5 w-100">Sign Up</button>
        </form>

    </div>
    
</body>
</html>