<<<<<<< HEAD
<?php
session_start();
$login = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connection.php'; 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['user'];

    //-------------user logging in-------
    $sql = "SELECT * FROM user WHERE email = ? AND password = ? AND role=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $email, $password,$role);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row=mysqli_fetch_assoc($result);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $login = 1;
            $_SESSION['email'] = $email;
            $_SESSION['password'] =$password;
            $_SESSION['role'] = $role;
            $_SESSION['user_id'] = $row['user_id'];

            if( $role=='student'){
                header("location: student_profile.php");
            }
            
            if( $role=='teacher'){
                header("location: teacher_profile.php");
            }
            
            if( $role=='admin'){
                header("location: admin_profile.php");
            }
           

        }
         else {
            $showError = "Invalid Email , Password or User Type";
            
        }
    }
}
?>



<!-- old part is here --> 
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="css/meanmenu.min.css">
	<link rel="stylesheet" type="text/css" href="./css/inner-page-style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
        

  

<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh"  >
    <form method="POST" class="border shadow p-3 rounded" style="width:450px;" > 
    <h1 class="text-center p-3">LOGIN</h1>
    
    <?php
    if($showError){
        echo '
        <div class="alert alert-danger" role="alert">
        '. $showError.'</div>';
        }
    
 ?>.
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Your Email" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
        </div>

        <div class="mb-0">
            <label  class="form-label">Select User Type : </label>
           
        </div>

        <select name="user" class="form-select mb-3" aria-label="Default select example">
            <option selected value="teacher"  id="teacher">Teacher</option>
            <option value="admin"  id="admin">Admin</option>
            <option value="student" id="student">Student</option>
          </select>
        
































































                    <p>Forgot Password? <a href="email_sender/forgot_password.php">Click Here!</a></p>
        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
</div>

    <script type="text/javascript" src="./js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	 <script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
	<script type="text/javascript" src="js/jquery.meanmenu.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>



</body>
=======
<?php
session_start();
$login = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connection.php'; 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['user'];

    //-------------user logging in-------
    $sql = "SELECT * FROM user WHERE email = ? AND password = ? AND role=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $email, $password,$role);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row=mysqli_fetch_assoc($result);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $login = 1;
            $_SESSION['email'] = $email;
            $_SESSION['password'] =$password;
            $_SESSION['role'] = $role;
            $_SESSION['user_id'] = $row['user_id'];

            if( $role=='student'){
                header("location: student_profile.php");
            }
            
            if( $role=='teacher'){
                header("location: teacher_profile.php");
            }
            
            if( $role=='admin'){
                header("location: admin_profile.php");
            }
           

        }
         else {
            $showError = "Invalid Email , Password or User Type";
            
        }
    }
}
?>



<!-- old part is here --> 
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="css/meanmenu.min.css">
	<link rel="stylesheet" type="text/css" href="./css/inner-page-style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
        

  

<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh"  >
    <form method="POST" class="border shadow p-3 rounded" style="width:450px;" > 
    <h1 class="text-center p-3">LOGIN</h1>
    
    <?php
    if($showError){
        echo '
        <div class="alert alert-danger" role="alert">
        '. $showError.'</div>';
        }
    
 ?>.
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Your Email" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
        </div>

        <div class="mb-0">
            <label  class="form-label">Select User Type : </label>
           
        </div>

        <select name="user" class="form-select mb-3" aria-label="Default select example">
            <option selected value="teacher"  id="teacher">Teacher</option>
            <option value="admin"  id="admin">Admin</option>
            <option value="student" id="student">Student</option>
          </select>
        
































































                    <p>Forgot Password? <a href="email_sender/forgot_password.php">Click Here!</a></p>
        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
</div>

    <script type="text/javascript" src="./js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	 <script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
	<script type="text/javascript" src="js/jquery.meanmenu.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>



</body>
>>>>>>> a0dff8a6904b5433bbd40bf12bc1f45fa464a6d8
</html>