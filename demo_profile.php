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




?>
 




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Profile</title>
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
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="UserImages/<?php echo $row['image'];?>" alt="profile image" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="admin_profile.php"><?php echo $row['user_name']?></a></h1>
      <h6 class="text-center"><a href="admin@gmail.com"> <?php echo $row['email']?> </a></h6>
      <div class="d-grid gap-2">
      <a href ="logout.php"><button class="btn btn-primary" type="button">Log Out</button>
    
      </div>
      

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Profile</span></a></li>
          <li><a href="#createcourse" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Create Course</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Add Course Teacher</span></a></li>
          <li><a href="#student" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Add Student</span></a></li>
          <li><a href="#attendance" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Attendance</span></a></li>
          <!-- <li><a href="#deletestudent" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Remove Student</span></a></li>
          <li><a href="#course" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Create Course</span></a></li>
           -->
          
          </div>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>ADMIN</h1> -->
      <p>Hello , I'm Admin of this website<span class="typed" data-typed-items=""></span></p>
    </div>
  </section><!-

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Profile</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="images/admin_pic.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Admin</h3>
            <p class="fst-italic">
              
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
            
                  <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span><?php echo $row['user_name'] ; ?></span></li>
                   <li><i class="bi bi-chevron-right"></i> <strong>User ID:</strong> <span><?php echo $row['user_id'] ; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $row['email'] ; ?></span></li> 
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Password:</strong> <span>123</span></li> -->
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Department:</strong> <span><?php echo $row['department'] ;?></span></li>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Session:</strong> <span>2019-2020</span></li> -->
                  <li><i class="bi bi-chevron-right"></i> <strong>ID:</strong> <span><?php echo $row['id'] ;?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>University:</strong> <span><?php echo $row['university'] ;?></span></li>
                </ul>
              </div>
            </div>
           
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <!-- End Facts Section -->

    <section id="createcourse" class="resume section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Create Course</h2>
          <!-- <p>Create Course</p> -->
          <?php include_once 'create_course_query.php'; ?>

          <!-- create course form -->
          <div class="container d-flex justify-content-center align-items-center" style="min-height:10vh"  >
            <form action="" method="POST" class="border shadow p-3 rounded" style="width:450px;" > <h4 class="text-center p-3">Create Course</h1>
                <div class="mb-3">
                    <label for="course_title" class="form-label">Course Title</label>
                    <input type="text" class="form-control" name="course_title" id="course_title">
                </div>
                <div class="mb-3">
                    <label for="course_code" class="form-label">Course Code</label>
                    <input type="text" name="course_code" class="form-control" id="course_title">
                </div>
                <div class="mb-3">
                    <label for="course_code" class="form-label">Semester</label>
                    <select name="semester" class="form-select mb-3" aria-label="Default select example">
                      
            <option selected value="1"  id="teacher">1st Semester</option>
            <option value="2"  id="admin">2nd Semester</option>
            <option value="3" id="student">3rd Semester</option>
            <option value="4" id="student">4th Semester</option>
            <option value="5" id="student">5th Semester</option>
            <option value="6" id="student">6th Semester</option>
            <option value="7" id="student">7th Semester</option>
            <option value="8" id="student">8th Semester</option>
          </select>

                </div>
                <div class="mb-3">
                    <label for="course_time" class="form-label">Course Time</label>
                    <input type="text" name="course_time" class="form-control" id="course_time">
                </div>
                
                <div class="mb-3">
                    <label for="course_credit" class="form-label">Course Credit</label>
                    <input type="text" class="form-control" name="course_credit" id="course_credit">
                </div>
                <div class="mb-3">
                          <label for="teacher_name" class="form-label">Teacher Name</label>
                          <input type="text" class="form-control" name="teacher_name" id="teacher_name">
                      </div>
  
                      <div class="mb-3">
                        <label for="teacher_id" class="form-label">Teacher ID</label>
                        <input type="text" class="form-control" name="teacher_id" id="teacher_id">
                    </div>
                  
                    <div class="mb-3">
                        <label for="teacher_email" class="form-label">e-mail</label>
                        <input type="email" class="form-control" name="teacher_email" id="teacher_email">
                    </div>
                <button type="submit" class="btn btn-primary">Create Course</button>
            </form>
        </div>
    </div>
 </section>

    <!-- ======= Skills Section ======= -->
   
        
  

    <
    <!-- ======= Resume Section ======= -->
    
<!-- End Resume Section -->
<section id="student">
    <div class="section-title">
        <h2>Add Student</h2>
        <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh"  >
            <form action="" method="POST" class="border shadow p-3 rounded" style="width:450px;" > <h4 class="text-center p-3">ADD STUDENT</h4>
                <div class="mb-3">
                    <label for="student_name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="student_name" id="student_name">
                </div>
                <div class="mb-3">
                    <label for="student_id" class="form-label">ID</label>
                    <input type="text" name="student_id" class="form-control" id="student_id">
                </div>
                <div class="mb-3">
                    <label for="course_time" class="form-label">e-mail</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                
               
                <button type="add" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>

   
</section>


 <section id="attendance">
    <div class="section-title">
        <h2>Attendance</h2>
        <!-- <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh"  >
            <form action="" method="POST" class="border shadow p-3 rounded" style="width:450px;" > <h4 class="text-center p-3">CREATE</h1>
                <div class="mb-3">
                    <label for="teacher_name" class="form-label">Teacher Name</label>
                    <input type="text" class="form-control" name="teacher_name" id="teacher_name">
                </div>

                <div class="mb-3">
                  <label for="teacher_id" class="form-label">Teacher ID</label>
                  <input type="text" class="form-control" name="teacher_id" id="teacher_id">
              </div>
            
              <div class="mb-3">
                  <label for="teacher_email" class="form-label">e-mail</label>
                  <input type="email" class="form-control" name="teacher_email" id="teacher_email">
              </div>
                <button type="remove" class="btn btn-primary">Remove</button>
            </form>
        </div> -->
    </div>

   
</section>

   



   
<!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>arrr.cusas.com</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://The Great Jobra Lab/">Team CUSAS</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

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

</html>