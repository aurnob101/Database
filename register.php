<?php
session_start();
include("connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $department = trim($_POST['department']);
    // $id = trim($_POST['id']);
    $university = trim($_POST['university']);
    $role = trim($_POST['role']);
    $image = $_FILES['image']['name'];
    $image_path = "UserImages/$image";
    $semester = trim($_POST['semester']);
    $hall_name= trim($_POST['hall_name']);
    $session= trim($_POST['session']);
    $title= trim($_POST['title']);
    $st_id=trim($_POST['st_id']);
    
    // if(empty($username) || empty($email) || empty($password)) {
    //     echo "Please fill out all the required fields.";
    //     exit;
    //  }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

     if(!in_array($role, ["teacher", "student" ,"admin"])) {
         echo "Invalid user type selected.";
         exit;
    }

    
    $check_query = "SELECT * FROM user WHERE email = '$email'";
    $check_result = mysqli_query($con, $check_query);

    // if(mysqli_num_rows($check_result) > 0) {
    //     echo "User with this email already exists.";
    //     exit;
    // }

    
    $insert_query = "INSERT INTO user (user_name, email, password, image, role, department, university, semester, st_id) 
                     VALUES ('$username', '$email', '$password', '$image', '$role', '$department' , ' $university', '$semester', '$st_id')";
    $insert_result = mysqli_query($con, $insert_query);
    $insert_query2 = "select * from user where email='$email' ";
    $insert_result2 = mysqli_query($con, $insert_query2);
    $row2=mysqli_fetch_assoc($insert_result2);
    $user_id=$row2['user_id'];

    if($role=='student'){
        $insert_query3 = "INSERT INTO `student` (`student_id`, `department`, `semester`, `session`, `hall_name`)
         VALUES ('$user_id', '$department', '$semester', '$session', '$hall_name')";
        $insert_result3 = mysqli_query($con, $insert_query3);
    }
    if($role=='teacher'){
        $insert_query4 = "INSERT INTO `teacher` (`teacher_id`, `department`, `title`) VALUES ('$user_id', '$department', '$title')";
        $insert_result4 = mysqli_query($con, $insert_query4);
       

    }

    if($insert_result) {
        
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
        echo "User created successfully.";
        header("location: login.php");
    }
    else {
        echo "Failed to create user.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
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
    <form action="" method="post" enctype="multipart/form-data" class="border shadow p-3 rounded" style="width:450px;" > <h1 class="text-center p-3">SIGN UP</h1>
        <div class="mb-3">
            <label for="username" class="form-label">Name</label>
            <input type="text" class="form-control" name="username" placeholder="Your Name" id="username">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Your Email" id="email">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
        </div>
        <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <input type="text" name="department" class="form-control" placeholder="Your Department" id="department">

        </div>
        
        <div class="mb-3">
            <label for="session" class="form-label">Session</label></label>
            <input type="text" name="session" class="form-control" placeholder="Your Session" id="session">
        </div> 

        
        <div class="mb-3">
                    <label for="semester" class="form-label">Semester</label>
                    <select name="semester" class="form-select mb-3" aria-label="Default select example">
                      
            <option selected value="1"  id="1">1st Semester</option>
            <option value="2"  id="2">2nd Semester</option>
            <option value="3" id="3">3rd Semester</option>
            <option value="4" id="4">4th Semester</option>
            <option value="5" id="5">5th Semester</option>
            <option value="6" id="6">6th Semester</option>
            <option value="7" id="7">7th Semester</option>
            <option value="8" id="8">8th Semester</option>
          </select>

          <div class="mb-3">
            <label for="st_id" class="form-label">Student ID</label>
            <input type="text" name="st_id" class="form-control" placeholder="Your ID" id="st_id">
        </div>
        
         <div class="mb-3">
            <label for="hall_name" class="form-label">Hall Name</label>
            <input type="text" name="hall_name" class="form-control" placeholder="Your Hall Name" id="hall_name">
        </div>

         <div class="mb-0">
            <label  class="form-label"> Select User Type : </label>
           
        </div>

        <select name="role" class="form-select mb-3" aria-label="Default select example">
            <option selected value="teacher">Teacher</option>
        
             <option  value="student">Student</option>

             <option  value="admin">Admin</option>
        
          </select>
          <div class="mb-3">
            <label for="title" class="form-label">Teacher Title</label>
            <input type="text" name="title" class="form-control" placeholder="Designation" id="title">
        </div>
        <div class="mb-3">
            <label for="university" class="form-label">University</label>
            <input type="text" name="university" class="form-control" placeholder="Your University" id="university">
        </div>

           <div class="mb-0">
             <label  class="form-label"> Upload Your Image: </label>
     

         
         <input type="file" name="image">

        
            
            
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

</html>
