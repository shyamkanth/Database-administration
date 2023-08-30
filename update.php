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
    <title>Update information</title>
</head>
<body>
    <p class="h1 mt-4" style="text-align:center;">PXMONK</p>
    <div class="container p-3">
        <form action="" method="post">
            <div class="row mt-3">


            <?php
                include 'connection.php';
                $ids = $_GET['id'];
                $showquery = "select * from user where id={$ids}";
                $showdata= mysqli_query($con,$showquery);
                $arrdata = mysqli_fetch_array($showdata);
                
                if(isset($_POST['submit']))
                {
                    $idupdate = $_GET['id'];
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
                    if($check){?>
                        <script>alert("Password does not match. Retype the password");</script><?php
                    }else{

                        $query = " update user set id=$ids, first_name='$fname', middle_name='$mname', last_name='$lname', gender='$gender', phone='$phone', address='$address', course='$course', email='$email',password='$pass' where id=$idupdate ";

                        $res = mysqli_query($con,$query);

                    if($res){?>
                        <script>
                        alert("Data updated successfully.");
                        window.location= "display.php";
                        </script><?php
                    }else{?>
                        <script>alert("Data not updated.");</script><?php
                    }
                    }

                }
            ?>
                <p class="h1">Update info</p>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="phone">First name :</label>
                        <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $arrdata['first_name']; ?>" placeholder="enter your updated first name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone">Middle name :</label>
                        <input type="text" class="form-control" id="mname" name="mname" value="<?php echo $arrdata['middle_name']; ?>" placeholder="enter your updated middle name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone">Last name :</label>
                        <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $arrdata['last_name']; ?>" placeholder="enter your updated last name" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender">Gender :</label>
                        <div class="form-check">
                    <input type="radio" class="form-check-input" id="male" name="gender" value="Male" <?php if($arrdata['gender'] == 'Male'){ echo 'checked'; } ?> required>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="female" name="gender" value="Female" <?php if($arrdata['gender'] == 'Female'){ echo 'checked'; } ?>>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input " id="other" name="gender" value="Other" <?php if($arrdata['gender'] == 'Other'){ echo 'checked'; } ?>>
                            <label class="form-check-label" for="other">Other</label>
                        </div>  
                    </div>
                    <div class="mb-3">
                        <label for="address">Address:</label>
                        <textarea class="form-control" rows="6" id="address" name="address" placeholder="enter your updated address here" required><?php echo $arrdata['address']; ?></textarea>
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="phone">Mobile :</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $arrdata['phone']; ?>" placeholder="updated phone number" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="course">Choose your course:</label>
                        <select class="form-control" name="course" id="course" value="" required>
                        <option value="" selected disabled>Courses</option>
                          <option value="B.tech" <?php if($arrdata['course'] == 'B.tech'){ echo 'selected'; } ?>>B.tech</option>
                          <option value="BBA" <?php if($arrdata['course'] == 'BBA'){ echo 'selected'; } ?>>BBA</option>
                          <option value="BCA" <?php if($arrdata['course'] == 'BCA'){ echo 'selected'; } ?>>BCA</option>
                          <option value="BA LLB" <?php if($arrdata['course'] == 'BA LLB'){ echo 'selected'; } ?>>BA LLB</option>
                          <option value="BSC" <?php if($arrdata['course'] == 'BSC'){ echo 'selected'; } ?>>BSC</option>
                          <option value="B.pharma" <?php if($arrdata['course'] == 'B.pharma'){ echo 'selected'; } ?>>B.pharma</option>
                          <option value="B.sc Nursing" <?php if($arrdata['course'] == 'B.sc Nursing'){ echo 'selected'; } ?>>B.sc Nursing</option>
                          <option value="M.tech" <?php if($arrdata['course'] == 'M.tech'){ echo 'selected'; } ?>>M.tech</option>
                          <option value="MBA" <?php if($arrdata['course'] == 'MBA'){ echo 'selected'; } ?>>MBA</option>
                          <option value="MCA" <?php if($arrdata['course'] == 'MCA'){ echo 'selected'; } ?>>MCA</option>
                          <option value="Graduated" <?php if($arrdata['course'] == 'Graduated'){ echo 'selected'; } ?>>Graduated</option>
                          <option value="Job" <?php if($arrdata['course'] == 'Job'){ echo 'selected'; } ?>>Job</option>
                        </select>
                      </div>
                    <div class="mb-3">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $arrdata['email']; ?>" placeholder="enter your updated email" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass">Password :</label>
                        <input type="password" class="form-control" id="pass" name="pass" value="<?php echo $arrdata['password']; ?>" placeholder="enter updated password" required>
                    </div>
                    <div class="mb-3">
                        <label for="rpass">Re-type password :</label>
                        <input type="text" class="form-control" id="rpass" name="rpass" value="<?php echo $arrdata['password']; ?>" placeholder="enter updated password again" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mb-3">Update information</button>
                    <p class="terms">by clicking on Update info, you have to agree with our <a href="#">Terms and conditions</a>.</p>
                </div>
            </div>
        </form>
    </div>
</body>
</html>