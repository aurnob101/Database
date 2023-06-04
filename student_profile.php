<<<<<<< HEAD
<?php


session_start();

$email=$_SESSION['email'] ;
$password=$_SESSION['password'] ;
$role=$_SESSION['role'] ;


//echo $email;

include_once 'connection.php'; 
$sql = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password' AND `role`='$role'";

$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$user_id=$row['user_id'];
$sql_query_sd="select * from student where student_id='$user_id'";
$result_sd=mysqli_query($con,$sql_query_sd);
$row_sd=mysqli_fetch_assoc($result_sd);
$semester=$row_sd['semester'];
$session=$row_sd['session'];




// handle form submission
if (isset($_POST['submit'])) {
    // get form data
    $course_code = $_POST['course_code'];
    $session_id = $_POST['session_id'];
    

    // insert attendance into the database
    $sql = "INSERT INTO attendance (course_id, session_id) VALUES ('$course_code', '$session_id')";
    if (mysqli_query($con, $sql)) {
        echo "You are present in this session.";
     } // else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($con);
    // }
}


?>



 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
    
      
        <img src="Userimages/<?php echo $row['image'];?>" alt="profile image" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="student_profile.php"><span><?php echo $row['user_name']; ?> </span></a></h1>
      <h6 class="text-center"><a href=""><?php echo $row['email']; ?></a></h6>
      <div class="d-grid gap-2">
       <a href ="logout.php"> <button class="btn btn-primary" type="button"> Log Out </button></a>
    
      </div>
      

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#test-hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Profile</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Attendance</span></a></li>
           <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Percentage</span></a></li>
          <!-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> -->
          
          
          </div>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= test-hero Section ======= -->
  <section id="test-hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="test-hero-container" data-aos="fade-in">
      <h1><?php echo $row['user_name']; ?></h1>
      <p>I'm a <span class="typed" data-typed-items="Student of Chittagong University "></span></p>
    </div>
  </section><!-- End test-hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Profile</h2>
          
        </div>
        

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="Userimages/<?php echo $row['image']; ?>" class="img-fluid" alt="user image">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Student</h3>
            <p class="fst-italic">
              
            </p>
            <div class="row">
              <div class="col-lg-6">
                
                <ul>
                    
                  <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span><?php echo $row['user_name'] ; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>User ID:</strong> <span><?php echo $row['user_id'] ; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $row['email'] ; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Password:</strong> <span><?php echo $row['password'] ; ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Department:</strong> <span><?php echo $row['department'] ;?></span></li>
                 
                   <li><i class="bi bi-chevron-right"></i> <strong>Student ID</strong> <span><?php echo $row['st_id'] ;?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Semester:</strong> <span><?php echo $row['semester'] ;?></span></li>
                  
                   <li><i class="bi bi-chevron-right"></i> <strong>Semester:</strong> <span><?php echo $row_sd['session'] ;?></span></li> 
                </ul>
              </div>
              <a href="edit_student_profile.php"> <button type="submit" name="submit2" class="btn btn-primary">Edit Profile</button></a>
            </div>
           
          </div>
          
        </div>

      </div>
      
    </section><!-- End About Section -->

   
        <section id="resume" class="resume section-bg">
          <div class="container">
    
            <div class="section-title">
        
              <h2>Give Attendance</h2>
              <?php include_once 'give_attendance_query.php'; ?>

              <div class="container d-flex justify-content-center align-items-center" style="min-height:10vh"  >
                <form action="student_profile.php" method="POST" class="border shadow p-3 rounded" style="width:450px;" > <h4 class="text-center p-3">Session Code </h4>
                     <div class="mb-3">
                        <label for="course_code" class="form-label">Course Code</label>
                        <input type="text" class="form-control" name="course_code" id="course_code">
                    </div>
                    <div class="mb-3">
                        <label for="session_id" class="form-label">Session ID</label>
                        <input type="text" class="form-control" name="session_id" id="session_id">
                    </div> 
                    <div class="mb-3">
                        <label for="code" class="form-label">Code</label>
                        <input type="text" class="form-control" name="code" id="code">
                    </div>


            
                    <button type="submit" name = "submit" class="btn btn-warning">Submit</button>
                </form>
              </div>
            </div>
            </div>
            </section> 
<!-- 
            <div class="section-title">
                <h2>Percentage</h2>
            </div>

            <section id="skills" class="skills section-bg">
              <div class="container">
         
               

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">CSE-411 <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSE-414 <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSE-415 <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">CSE-431 <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSE-471 <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSE-450 <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section> -->
    <!-- End Skills Section -->


    <!-- ======= Portfolio Section ======= -->
    
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">
        
      <div class="section-title">
                <h2>Percentage</h2>
            </div>

            <section id="skills" class="skills section-bg">
              <div class="container">
         
               

        <div class="row skills-content">

        <?php
        $user_id=$row['user_id'];
        $sql_query_sd="select * from student where student_id='$user_id'";
        $result_sd=mysqli_query($con,$sql_query_sd);
        $row_sd=mysqli_fetch_assoc($result_sd);
        $semester=$row_sd['semester'];
        $session=$row_sd['session'];

        $sql_query_cc="select * from course where semester='$semester' AND session='$session'";
        $result_cc=mysqli_query($con,$sql_query_cc);
        while($row_cc=mysqli_fetch_assoc($result_cc)){
          $course_code=$row_cc['course_code'];
          $sql_query3 = "SELECT * FROM `sessions` WHERE course_code='$course_code' AND session='$session'";
          $result3=mysqli_query($con,$sql_query3);
          $total_class=mysqli_num_rows($result3);
          $sql_query4 = "SELECT * FROM `attendance` WHERE student_id='$user_id' AND course_code='$course_code' AND status='P'";
          $result4=mysqli_query($con,$sql_query4);
          $individual_attendance=mysqli_num_rows($result4);
          if($total_class!=0 && $individual_attendance!=0){
            $individual_percentage=($individual_attendance/$total_class)*100;
          }
          else {
            $individual_percentage=0;
          }
         echo' <div class="col-lg-6" data-aos="fade-up">

          <div class="progress">
            <span class="skill">';
            echo $course_code;
            echo' <i class="val">';
            echo number_format($individual_percentage, 2);
            echo '%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="';
              echo $individual_percentage;
              echo'" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

         

        </div>';
        }
        
        ?>

         

        </div>

      </div>
    </section>
<!-- 
       <div class="section-title">
          <h2>Course</h2>
          <p>My Course</p>
          <?php include_once 'std_view_course_query.php'; ?>
          
          
        </div>
    </selection> -->
      

   

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>arrr.cusas.com</span></strong>
      </div>
      <div class="credits">
        
        Designed by <a href="https://The Great Jobra Lab/">The Great Jobra Lab</a>
      </div>
    </div>
  </footer> -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

=======
<?php


session_start();

$email=$_SESSION['email'] ;
$password=$_SESSION['password'] ;
$role=$_SESSION['role'] ;


//echo $email;

include_once 'connection.php'; 
$sql = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password' AND `role`='$role'";

$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$user_id=$row['user_id'];
$sql_query_sd="select * from student where student_id='$user_id'";
$result_sd=mysqli_query($con,$sql_query_sd);
$row_sd=mysqli_fetch_assoc($result_sd);
$semester=$row_sd['semester'];
$session=$row_sd['session'];




// handle form submission
if (isset($_POST['submit'])) {
    // get form data
    $course_code = $_POST['course_code'];
    $session_id = $_POST['session_id'];
    

    // insert attendance into the database
    $sql = "INSERT INTO attendance (course_id, session_id) VALUES ('$course_code', '$session_id')";
    if (mysqli_query($con, $sql)) {
        echo "You are present in this session.";
     } // else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($con);
    // }
}


?>



 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
    
      
        <img src="Userimages/<?php echo $row['image'];?>" alt="profile image" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="student_profile.php"><span><?php echo $row['user_name']; ?> </span></a></h1>
      <h6 class="text-center"><a href=""><?php echo $row['email']; ?></a></h6>
      <div class="d-grid gap-2">
       <a href ="logout.php"> <button class="btn btn-primary" type="button"> Log Out </button></a>
    
      </div>
      

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#test-hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Profile</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Attendance</span></a></li>
           <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Percentage</span></a></li>
          <!-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> -->
          
          
          </div>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= test-hero Section ======= -->
  <section id="test-hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="test-hero-container" data-aos="fade-in">
      <h1><?php echo $row['user_name']; ?></h1>
      <p>I'm a <span class="typed" data-typed-items="Student of Chittagong University "></span></p>
    </div>
  </section><!-- End test-hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Profile</h2>
          
        </div>
        

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="Userimages/<?php echo $row['image']; ?>" class="img-fluid" alt="user image">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Student</h3>
            <p class="fst-italic">
              
            </p>
            <div class="row">
              <div class="col-lg-6">
                
                <ul>
                    
                  <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span><?php echo $row['user_name'] ; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>User ID:</strong> <span><?php echo $row['user_id'] ; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $row['email'] ; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Password:</strong> <span><?php echo $row['password'] ; ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Department:</strong> <span><?php echo $row['department'] ;?></span></li>
                 
                   <li><i class="bi bi-chevron-right"></i> <strong>Student ID</strong> <span><?php echo $row['st_id'] ;?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Semester:</strong> <span><?php echo $row['semester'] ;?></span></li>
                  
                   <li><i class="bi bi-chevron-right"></i> <strong>Semester:</strong> <span><?php echo $row_sd['session'] ;?></span></li> 
                </ul>
              </div>
              <a href="edit_student_profile.php"> <button type="submit" name="submit2" class="btn btn-primary">Edit Profile</button></a>
            </div>
           
          </div>
          
        </div>

      </div>
      
    </section><!-- End About Section -->

   
        <section id="resume" class="resume section-bg">
          <div class="container">
    
            <div class="section-title">
        
              <h2>Give Attendance</h2>
              <?php include_once 'give_attendance_query.php'; ?>

              <div class="container d-flex justify-content-center align-items-center" style="min-height:10vh"  >
                <form action="student_profile.php" method="POST" class="border shadow p-3 rounded" style="width:450px;" > <h4 class="text-center p-3">Session Code </h4>
                     <div class="mb-3">
                        <label for="course_code" class="form-label">Course Code</label>
                        <input type="text" class="form-control" name="course_code" id="course_code">
                    </div>
                    <div class="mb-3">
                        <label for="session_id" class="form-label">Session ID</label>
                        <input type="text" class="form-control" name="session_id" id="session_id">
                    </div> 
                    <div class="mb-3">
                        <label for="code" class="form-label">Code</label>
                        <input type="text" class="form-control" name="code" id="code">
                    </div>


            
                    <button type="submit" name = "submit" class="btn btn-warning">Submit</button>
                </form>
              </div>
            </div>
            </div>
            </section> 
<!-- 
            <div class="section-title">
                <h2>Percentage</h2>
            </div>

            <section id="skills" class="skills section-bg">
              <div class="container">
         
               

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">CSE-411 <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSE-414 <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSE-415 <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">CSE-431 <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSE-471 <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSE-450 <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section> -->
    <!-- End Skills Section -->


    <!-- ======= Portfolio Section ======= -->
    
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">
        
      <div class="section-title">
                <h2>Percentage</h2>
            </div>

            <section id="skills" class="skills section-bg">
              <div class="container">
         
               

        <div class="row skills-content">

        <?php
        $user_id=$row['user_id'];
        $sql_query_sd="select * from student where student_id='$user_id'";
        $result_sd=mysqli_query($con,$sql_query_sd);
        $row_sd=mysqli_fetch_assoc($result_sd);
        $semester=$row_sd['semester'];
        $session=$row_sd['session'];

        $sql_query_cc="select * from course where semester='$semester' AND session='$session'";
        $result_cc=mysqli_query($con,$sql_query_cc);
        while($row_cc=mysqli_fetch_assoc($result_cc)){
          $course_code=$row_cc['course_code'];
          $sql_query3 = "SELECT * FROM `sessions` WHERE course_code='$course_code' AND session='$session'";
          $result3=mysqli_query($con,$sql_query3);
          $total_class=mysqli_num_rows($result3);
          $sql_query4 = "SELECT * FROM `attendance` WHERE student_id='$user_id' AND course_code='$course_code' AND status='present'";
          $result4=mysqli_query($con,$sql_query4);
          $individual_attendance=mysqli_num_rows($result4);
          if($total_class!=0 && $individual_attendance!=0){
            $individual_percentage=($individual_attendance/$total_class)*100;
          }
          else {
            $individual_percentage=0;
          }
         echo' <div class="col-lg-6" data-aos="fade-up">

          <div class="progress">
            <span class="skill">';
            echo $course_code;
            echo' <i class="val">';
            echo number_format($individual_percentage, 2);
            echo '%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="';
              echo $individual_percentage;
              echo'" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

         

        </div>';
        }
        
        ?>

         

        </div>

      </div>
    </section>
<!-- 
       <div class="section-title">
          <h2>Course</h2>
          <p>My Course</p>
          <?php include_once 'std_view_course_query.php'; ?>
          
          
        </div>
    </selection> -->
      

   

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>arrr.cusas.com</span></strong>
      </div>
      <div class="credits">
        
        Designed by <a href="https://The Great Jobra Lab/">The Great Jobra Lab</a>
      </div>
    </div>
  </footer> -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

>>>>>>> a0dff8a6904b5433bbd40bf12bc1f45fa464a6d8
</html>