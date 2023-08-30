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
    <title>Registration form</title>
</head>
<body>
    <p class="h1 mt-4" style="text-align:center;">PxMonk</p>
    <div class="container p-3">
        <form action="output.php" method="post">
            <div class="row mt-3">
                <p class="h1">Register yourself</p>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="phone">First name :</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="enter your first name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone">Middle name :</label>
                        <input type="text" class="form-control" id="mname" name="mname" placeholder="enter your middle name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone">Last name :</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="enter your last name" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender">Gender :</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="male" name="gender" value="Male" required>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="female" name="gender" value="Female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input " id="other" name="gender" value="Other">
                            <label class="form-check-label" for="other">Other</label>
                        </div>  
                    </div>
                    <div class="mb-3">
                        <label for="address">Address:</label>
                        <textarea class="form-control" rows="6" id="address" name="address" placeholder="enter your address here" required></textarea>
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="phone">Mobile :</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="phone number" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="course">Choose your course:</label>
                        <select class="form-control" name="course" id="course" required>
                          <option value="" selected disabled>Courses</option>
                          <option value="B.tech">B.tech</option>
                          <option value="BBA">BBA</option>
                          <option value="BCA">BCA</option>
                          <option value="BA LLB">BA LLB</option>
                          <option value="BSC">BSC</option>
                          <option value="B.pharma">B.pharma</option>
                          <option value="B.sc Nursing">B.sc Nursing</option>
                          <option value="M.tech">M.tech</option>
                          <option value="MBA">MBA</option>
                          <option value="MCA">MCA</option>
                          <option value="Graduated">Graduated</option>
                          <option value="Job">Job</option>
                        </select>
                      </div>
                    <div class="mb-3">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass">Password :</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="enter password" required>
                    </div>
                    <div class="mb-3">
                        <label for="rpass">Re-type password :</label>
                        <input type="password" class="form-control" id="rpass" name="rpass" placeholder="enter password again" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mb-3">Register</button>
                    <p class="terms">by clicking on register, you have to agree with our <a href="#">Terms and conditions</a>.</p>
                </div>
            </div>
        </form>
    </div>
</body>
</html>