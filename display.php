<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All listing</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="" type="text/css">
</head>
<body>
    <div class="container">
        <p class="h1 mt-3 mb-3" style="font-family:'Times New Roman', Times, serif;
    font-size: 30px;text-align:center;">PxMonk All Entries</p>
        <table class="table table-dark table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Middle name</th>
                    <th>Last name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th COLSPAN=2>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    include 'connection.php';
                    $selectquery = "select * from user";
                    $query = mysqli_query($con,$selectquery);
                    $nums = mysqli_num_rows($query);
                    while($res = mysqli_fetch_array($query)){
                        ?>

                        <tr>
                            <td><?php echo $res['id']; ?></td>
                            <td><?php echo $res['first_name']; ?></td>
                            <td><?php echo $res['middle_name']; ?></td>
                            <td><?php echo $res['last_name']; ?></td>
                            <td><?php echo $res['gender']; ?></td>
                            <td><?php echo $res['course']; ?></td>
                            <td><?php echo $res['address']; ?></td>
                            <td><?php echo $res['phone']; ?></td>
                            <td><?php echo $res['email']; ?></td>
                            <td><?php echo $res['password']; ?></td>
                            <td><a href="update.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit" style="color:#46bbf1;"></i></a></td>
                            <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" style="color:red;"></i></a></td>
                        </tr>
                        <?php
                    }
                ?>

                
            </tbody>
        </table>
            <a href="form.php"><button type="button" class="btn btn-outline-primary" style="font-weight:bold;">Start new registration</button></a>
    </div>

</body>
</html>