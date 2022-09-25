<?php
session_start();
require "dbconnect.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  Bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>form</title>
</head>
<body> <?php include "navbar.php";  ?>
    <div class="container">
        <?php include "message.php"; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add User
                            <button href="#" class="btn btn-danger float-end">Back</button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        
                            if(isset($_GET['user'])) {
                                $user_name =  mysqli_real_escape_string($conn,$_GET['user']) ;
                                $query = "SELECT * FROM user_info WHERE user_name='$user_name'";
                                $query_run = mysqli_query($conn,$query);
                                $user_record = mysqli_fetch_array($query_run);
                                ?>

                                <form action="sign_up.php" method="POST">
                                        <input type="hidden" name='user_name' value=<?= $user_name ?>>

                                    <div class="mb-3">
                                        <label>User Name</label>
                                        <input type="text" value=<?= $user_record['user_name']; ?> name="UserName" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" value=<?= $user_record['email']; ?> name="email" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="password" value=<?= $user_record['password']; ?> name="password" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class=" btn btn-primary" name="edit_user">Edit</button>
                                    </div>
                                </form>

                                <?php
                                
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
