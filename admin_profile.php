<<<<<<< HEAD
<?php
session_start();
include "connection.php";
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

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
      
        <img src="UserImages/<?php echo $row['image']; ?>" alt="profile image" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="admin_profile.php"><?php echo $row['user_name']; ?></a></h1>
        <h6 class="text-center"><a href=""> 
       <a href ="logout.php"> <button class="btn btn-primary" type="button"> Log Out </button></a>
    
      </div>
      

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#test-hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Profile</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Create Course</span></a></li>
          <li><a href="#abc" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Pending Course</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Add Course Teacher</span></a></li>
          <li><a href="#student" class="nav-link scrollto"><i class="bx bx-server"></i> <span>View Course</span></a></li>
          <li><a href="#mycourses" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Attendance Percentage</span></a></li>
          
          
          </div>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= test-hero Section ======= -->
  <section id="test-hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="test-hero-container" data-aos="fade-in">
      <h1><span><?php echo $row['user_name']; ?></h1>
      <p>I'm Chairman of <span class="typed" data-typed-items=" CSE Department."></span></p>
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
            <img src="Userimages/<?php echo $row['image']; ?>" class="img-fluid" alt="profile image">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Chairman</h3>
            <p class="fst-italic">
              
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                 
                  <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span><?php echo $row['user_name'] ; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>User ID:</strong> <span><?php echo $row['user_id'] ; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $row['email'] ; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Password:</strong> <span><?php echo  $row['password']; ?></span></li> 
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Department:</strong> <span><?php echo $row['department'] ;?></span></li>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Session:</strong> <span>2019-2020</span></li> -->
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>ID:</strong> <span> <?php echo $row['id'] ;?></span></li> -->
                  <li><i class="bi bi-chevron-right"></i> <strong>University:</strong> <span><?php echo $row['university'] ;?></span></li>
                </ul>
              </div>
              <a href="edit_admin_profile.php"> <button type="submit" name="submit2" class="btn btn-primary">Edit Profile</button></a>
            </div>
           
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  
    
<!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
  <section id="resume" class="resume section-bg">
      <div class="container">

         <div class="section-title">
          <h2>Create Course</h2>
           

          <?php include_once 'create_course_query.php'; ?>

          <!-- create course form -->
          <div class="container d-flex justify-content-center align-items-center" style="min-height:10vh"  >
            <form action="" method="POST" class="border shadow p-3 rounded" style="width:450px;" > <h4 class="text-center p-3">CREATE COURSE</h1>
                <div class="mb-3">
                    <label for="course_title" class="form-label">Course Title</label>
                    <input type="text" class="form-control" name="course_title" id="course_title">
                </div>
                <div class="mb-3">
                    <label for="course_code" class="form-label">Course Code</label>
                    <input type="text" name="course_code" class="form-control" id="course_title">
                </div>
                
                <div class="mb-3">
                    <label for="semester" class="form-label">Semester</label>
                    <select name="semester" class="form-select mb-3" aria-label="Default select example">
                      
            <option selected value="1"  id="teacher">1st Semester</option>
            <option value="2"  id="2">2nd Semester</option>
            <option value="3" id="3">3rd Semester</option>
            <option value="4" id="4">4th Semester</option>
            <option value="5" id="5">5th Semester</option>
            <option value="6" id="6">6th Semester</option>
            <option value="7" id="7">7th Semester</option>
            <option value="8" id="8">8th Semester</option>
          </select>

                </div>

                <div class="mb-3">
                    <label for="session" class="form-label">Session</label>
                    <input type="text" name="session" class="form-control" id="session">
                </div>

                <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" name="start_date" class="form-control" id="start_date">
                </div>
                
                <div class="mb-3">
                     <label for="credit" class="form-label">Course Credit</label>
                     <input type="text" class="form-control" name="credit" id="credit">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Create </button>
               
            </form>
        </div>
    </div>
 </section>


 <section id="abc" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Pending Course Teacher</h2>
          </div>


               <a href="dist/pending_course_teacher.php"> <button type="submit" name="submit2" class="btn btn-primary">View Pending Course Teacher</button></a>

            
</div>
</div>
 </section>

 <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Add Course Teacher</h2>
          
          <?php include_once 'add_course_teacher.php'; ?>

          <div class="container d-flex justify-content-center align-items-center" style="min-height:10vh"  >
            <form action="" method="POST" class="border shadow p-3 rounded" style="width:450px;" > <h4 class="text-center p-3">ADD COURSE TEACHER</h4>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="mb-3">
                    <label for="teacher_id" class="form-label">Teacher ID</label>
                    <input type="text" name="teacher_id" class="form-control" id="teacher_id">
                </div>

                <div class="mb-3">
                    <label for="course_code" class="form-label">Course Code</label>
                    <input type="text" name="course_code" class="form-control" id="course_code">
                </div>
                
      <div class="mb-3">
          <label for="semester" class="form-label">Semester</label>
          <select name="semester" class="form-select mb-3" aria-label="Default select example" id="semester">
            
               <option selected value="1"  id="teacher">1st Semester</option>
               <option value="2"  id="2">2nd Semester</option>
              <option value="3" id="3">3rd Semester</option>
              <option value="4" id="4">4th Semester</option>
              <option value="5" id="5">5th Semester</option>
              <option value="6" id="6">6th Semester</option>
               <option value="7" id="7">7th Semester</option>
               <option value="8" id="8">8th Semester</option>
            </select>
                <div class="mb-3">
                    <label for="session" class="form-label">Session</label>
                    <input type="tex" name="session" class="form-control" id="session">
                </div>
                <button type="submit" name="submit2" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>

   
</section>



 <section id="student" class="portfolio section-bg">
 <div class="container">
    <div class="section-title">
        <h2>View Course</h2>
        

        

        <a href="view_all_courses.php"> <button type="submit" name="submit2" class="btn btn-primary">View Courses</button></a>

        
        </div>
    </div>
</section>

       

    <!-- ======= Services Section ======= -->
    <section id="mycourses" class="services">
      <div class="container">

        <div class="section-title">
            <h2>Student Total Percentage</h2>
            <form method="get" action="check.php">
              
                <div class="mb-3">
                    <label for="semester" class="form-label">Semester</label>
                    <select name="semester" class="form-select mb-3"  id="semester">
                        <option selected value="1"  id="teacher">1st Semester</option>
                        <option value="2"  id="2">2nd Semester</option>
                        <option value="3" id="3">3rd Semester</option>
                        <option value="4" id="4">4th Semester</option>
                        <option value="5" id="5">5th Semester</option>
                        <option value="6" id="6">6th Semester</option>
                        <option value="7" id="7">7th Semester</option>
                        <option value="8" id="8">8th Semester</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="session" class="form-label">Session</label>
                    <input type="text" name="session" class="form-control" id="session">
                </div>
                <button type="submit" name="submit2" class="btn btn-primary">Search</button>
            </form>
        </div>

    </div>
</section>



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



=======
<?php
session_start();
include "connection.php";
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

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
      
        <img src="UserImages/<?php echo $row['image']; ?>" alt="profile image" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="admin_profile.php"><?php echo $row['user_name']; ?></a></h1>
        <h6 class="text-center"><a href=""> 
       <a href ="logout.php"> <button class="btn btn-primary" type="button"> Log Out </button></a>
    
      </div>
      

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#test-hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Profile</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Create Course</span></a></li>
          <li><a href="#abc" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Pending Course</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Add Course Teacher</span></a></li>
          <li><a href="#student" class="nav-link scrollto"><i class="bx bx-server"></i> <span>View Course</span></a></li>
          <li><a href="#mycourses" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Attendance Percentage</span></a></li>
          
          
          </div>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= test-hero Section ======= -->
  <section id="test-hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="test-hero-container" data-aos="fade-in">
      <h1><span><?php echo $row['user_name']; ?></h1>
      <p>I'm Chairman of <span class="typed" data-typed-items=" CSE Department."></span></p>
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
            <img src="Userimages/<?php echo $row['image']; ?>" class="img-fluid" alt="profile image">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Chairman</h3>
            <p class="fst-italic">
              
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                 
                  <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span><?php echo $row['user_name'] ; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>User ID:</strong> <span><?php echo $row['user_id'] ; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $row['email'] ; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Password:</strong> <span><?php echo  $row['password']; ?></span></li> 
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Department:</strong> <span><?php echo $row['department'] ;?></span></li>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Session:</strong> <span>2019-2020</span></li> -->
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>ID:</strong> <span> <?php echo $row['id'] ;?></span></li> -->
                  <li><i class="bi bi-chevron-right"></i> <strong>University:</strong> <span><?php echo $row['university'] ;?></span></li>
                </ul>
              </div>
              <a href="edit_admin_profile.php"> <button type="submit" name="submit2" class="btn btn-primary">Edit Profile</button></a>
            </div>
           
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  
    
<!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
  <section id="resume" class="resume section-bg">
      <div class="container">

         <div class="section-title">
          <h2>Create Course</h2>
           

          <?php include_once 'create_course_query.php'; ?>

          <!-- create course form -->
          <div class="container d-flex justify-content-center align-items-center" style="min-height:10vh"  >
            <form action="" method="POST" class="border shadow p-3 rounded" style="width:450px;" > <h4 class="text-center p-3">CREATE COURSE</h1>
                <div class="mb-3">
                    <label for="course_title" class="form-label">Course Title</label>
                    <input type="text" class="form-control" name="course_title" id="course_title">
                </div>
                <div class="mb-3">
                    <label for="course_code" class="form-label">Course Code</label>
                    <input type="text" name="course_code" class="form-control" id="course_title">
                </div>
                
                <div class="mb-3">
                    <label for="semester" class="form-label">Semester</label>
                    <select name="semester" class="form-select mb-3" aria-label="Default select example">
                      
            <option selected value="1"  id="teacher">1st Semester</option>
            <option value="2"  id="2">2nd Semester</option>
            <option value="3" id="3">3rd Semester</option>
            <option value="4" id="4">4th Semester</option>
            <option value="5" id="5">5th Semester</option>
            <option value="6" id="6">6th Semester</option>
            <option value="7" id="7">7th Semester</option>
            <option value="8" id="8">8th Semester</option>
          </select>

                </div>

                <div class="mb-3">
                    <label for="session" class="form-label">Session</label>
                    <input type="text" name="session" class="form-control" id="session">
                </div>

                <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" name="start_date" class="form-control" id="start_date">
                </div>
                
                <div class="mb-3">
                     <label for="credit" class="form-label">Course Credit</label>
                     <input type="text" class="form-control" name="credit" id="credit">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Create </button>
               
            </form>
        </div>
    </div>
 </section>


 <section id="abc" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Pending Course Teacher</h2>
          </div>


               <a href="dist/pending_course_teacher.php"> <button type="submit" name="submit2" class="btn btn-primary">View Pending Course Teacher</button></a>

            
</div>
</div>
 </section>

 <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Add Course Teacher</h2>
          
          <?php include_once 'add_course_teacher.php'; ?>

          <div class="container d-flex justify-content-center align-items-center" style="min-height:10vh"  >
            <form action="" method="POST" class="border shadow p-3 rounded" style="width:450px;" > <h4 class="text-center p-3">ADD COURSE TEACHER</h4>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="mb-3">
                    <label for="teacher_id" class="form-label">Teacher ID</label>
                    <input type="text" name="teacher_id" class="form-control" id="teacher_id">
                </div>

                <div class="mb-3">
                    <label for="course_code" class="form-label">Course Code</label>
                    <input type="text" name="course_code" class="form-control" id="course_code">
                </div>
                
      <div class="mb-3">
          <label for="semester" class="form-label">Semester</label>
          <select name="semester" class="form-select mb-3" aria-label="Default select example" id="semester">
            
               <option selected value="1"  id="teacher">1st Semester</option>
               <option value="2"  id="2">2nd Semester</option>
              <option value="3" id="3">3rd Semester</option>
              <option value="4" id="4">4th Semester</option>
              <option value="5" id="5">5th Semester</option>
              <option value="6" id="6">6th Semester</option>
               <option value="7" id="7">7th Semester</option>
               <option value="8" id="8">8th Semester</option>
            </select>
                <div class="mb-3">
                    <label for="session" class="form-label">Session</label>
                    <input type="tex" name="session" class="form-control" id="session">
                </div>
                <button type="submit" name="submit2" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>

   
</section>



 <section id="student" class="portfolio section-bg">
 <div class="container">
    <div class="section-title">
        <h2>View Course</h2>
        

        

        <a href="view_all_courses.php"> <button type="submit" name="submit2" class="btn btn-primary">View Courses</button></a>

        
        </div>
    </div>
</section>

       

    <!-- ======= Services Section ======= -->
    <section id="mycourses" class="services">
      <div class="container">

        <div class="section-title">
            <h2>Student Total Percentage</h2>
            <form method="get" action="check.php">
              
                <div class="mb-3">
                    <label for="semester" class="form-label">Semester</label>
                    <select name="semester" class="form-select mb-3"  id="semester">
                        <option selected value="1"  id="teacher">1st Semester</option>
                        <option value="2"  id="2">2nd Semester</option>
                        <option value="3" id="3">3rd Semester</option>
                        <option value="4" id="4">4th Semester</option>
                        <option value="5" id="5">5th Semester</option>
                        <option value="6" id="6">6th Semester</option>
                        <option value="7" id="7">7th Semester</option>
                        <option value="8" id="8">8th Semester</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="session" class="form-label">Session</label>
                    <input type="text" name="session" class="form-control" id="session">
                </div>
                <button type="submit" name="submit2" class="btn btn-primary">Search</button>
            </form>
        </div>

    </div>
</section>



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



>>>>>>> a0dff8a6904b5433bbd40bf12bc1f45fa464a6d8
