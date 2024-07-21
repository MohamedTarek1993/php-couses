<?php 

include('db.php');
    $query = "SELECT * FROM users ";
    $result = mysqli_query($connection , $query);
    if(!$result){
        die('query failed' . mysqli_error($connection));
    }

    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Know Users</title>
</head>

<body>

    <section class="form_sec my-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <table class="table table-striped table-hover table-bordered table-responsive mt-5">
                    <thead>

                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <?php 
            while($row = mysqli_fetch_assoc($result)):
                ?>

                    <tbody>
                        <tr>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['password'] ?></td>
                            <td> <a class="btn btn-success" href="login-update.php?id=<?= $row['id'];?>"> <i
                                        class="bi bi-pencil-fill"></i> </a>
                                <button type="button" name="delete" id="delete" class="btn btn-danger"> <i class="bi bi-trash"></i> </button>
                            </td>
                        </tr>
                    </tbody>

                    <?php
            endwhile ;
            mysqli_close($connection); // Close the database connection
            ?>
                </table>

            </div>
        </div>
    </section>





    <script type="text/javascript" src=https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js></script>
</body>

</html>