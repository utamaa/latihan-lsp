<?php
    require "dbconnect.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>index</title>
</head>
<body>
    <?php require "navbar.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Tabel Barang
                            <a href="form.php" class="btn btn-danger float-end">Tambah Barang</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>user_name</td>
                                    <td>email</td>
                                    <td>password</td>
                                    <td>action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $user_records = mysqli_query($conn,"SELECT * FROM user_info");
                                    define('user_name','user_name');
                                    while($row = mysqli_fetch_assoc($user_records)) {
                                        echo 
                                        "<tr>
                                            <td>{$row['user_name']}</td>
                                            <td>{$row['email']}</td>
                                            <td>{$row['password']}</td>
                                            <td>
                                                <a href='edit_user.php?user={$row[user_name]}' class='btn btn-success'>Edit</a>
                                                <a href='' class='btn btn-danger'>Delete</a>
                                            </td>
                                        </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>