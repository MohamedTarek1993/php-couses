<?php 


include('db.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];


    // if($connection){
    //      echo 'connected';
    // }
    // else{
    //     die('connection failed');
    // }

    $query = "INSERT INTO users(username , password) VALUES('$username' , '$password')";
    $result = mysqli_query($connection , $query);
    if(!$result){
        die('query failed' . mysqli_error($connection));
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login Form</title>
</head>

<body>

    <section class="form_sec my-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8">
                    <form action="login-create.php" method="post">
                        <div class="form-group row mt-3">
                            <label for="inputUser" class="col-form-label">UserName</label>
                            <input type="text" class="form-control" id="inputUser" name="username"
                                placeholder="UserName">
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputPass" class="col-form-label">Password</label>
                            <input type="password" class="form-control" id="inputPass" name="password"
                                placeholder="password">
                        </div>

                        <div class="form-group row mt-3">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-secondary" href="login-read.php"> Go To Users</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>





    <script type="text/javascript" src=https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js></script>
</body>

</html>