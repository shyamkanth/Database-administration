<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="form.css" type="text/css">
    <title>Output</title>
</head>
<body>
    
    <div class="container">
    <?php
        include 'connection.php';
        if(isset($_POST['submit']))
        {
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $course = $_POST['course'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $rpass = $_POST['rpass'];

            $check = ($pass != $rpass);
            if($check){
                ?>
                    <script>
                        alert("Password does not match. Retype the password");
                        window.location= "form.php";
                    </script>
                <?php
            }else{
                ?>
                <p class="h1"><?php
                echo "Here is your data.</br>";
                ?>
                </p>
                <?php
                echo "Name : ".$fname." ".$mname." ".$lname."</br>";
                echo "Gender : ".$gender."</br>";
                echo "Course : ".$course."</br>";
                echo "Address : ".$address."</br>";
                echo "Phone : ".$phone."</br>";
                echo "Email : ".$email."</br>";
                echo "Password : ".$pass."</br>";

                $insertquery = "INSERT into user(first_name, middle_name, last_name, gender, phone, address, course, email, password) values('$fname','$mname','$lname','$gender','$phone','$address','$course','$email','$pass')";

            $res = mysqli_query($con,$insertquery);

            if($res){
                ?>
                <p class="h1" style="display:inline-flex;"><?php
                echo "Data inserted successfully.</br>";
                ?>
                </p>
                <?php
            }else{
                echo 'Data not inserted';
            }
            }

        }
    ?>
    <a href="display.php"><button style="display:inline-flex;float: right;color:white;padding-left:55px;padding-right:55px;font-weight:bold;" type="button" class="btn btn-warning mb-3 ">View all listing</button></a>
    </div>
</body>
</html>
