<?php 
$course_code=$_GET['course_code'];
$t_name=$_GET['t_name'];
$con=mysqli_connect("localhost", "root", "", "cusas") or die("connection fail");
   
  

    $sql_query = " select * from course where course_code='$course_code'";
    $result=mysqli_query($con,$sql_query);
    $row=mysqli_fetch_assoc($result);
    $course_title=$row["course_title"];
        $course_code=$row["course_code"];
        $semester=$row["semester"];
        $start_date=$row["start_date"];
        $credit=$row["credit"]; 
        $session=$row["session"];
        $teacher_id=$row["teacher_id"];

        $sql_query2 = "SELECT * FROM `student` WHERE semester='$semester' AND session='$session'";
       
        $result2=mysqli_query($con,$sql_query2);

        $sql_query3 = "SELECT * FROM `sessions` WHERE teacher_id='$teacher_id' AND course_code='$course_code' AND session='$session'";
        $result3=mysqli_query($con,$sql_query3);
        $total_class=mysqli_num_rows($result3);
        
        

?>





<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>View Details</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- <h1>
  Providers
</h1> -->
<div class="course-details">
  <h1>Course Title:<?php echo $course_title;?></h1>
  <h2 style="margin-top: 2px" align="center">Course Code:<?php echo $course_code;?></h2>
  
 
  <table class="course-details-table">
    <tr>
      <td>Teacher Name:</td>
      <td><?php echo $t_name;?></td>
    </tr>
    <tr>
      <td>Teacher ID:</td>
      <td><?php echo $teacher_id;?></td>
    </tr>
    <tr>
      <td>Semester:</td>
      <td><?php echo $semester;?></td>
    </tr>
    <tr>
      <td>Session:</td>
      <td><?php echo $session;?></td>
    </tr>
    <!-- <tr>
      <td>Duration:</td>
      <td>50</td>
    </tr> -->
    <tr>
      <td>Start Date:</td>
      <td><?php echo $start_date;?></td>
    </tr>

    <tr>
      <td>Credit:</td>
      <td><?php echo $credit;?></td>
    </tr>
    <tr>
      <td>Total Class:</td>
      <td><?php echo $total_class;?></td>
    </tr>
  
    </table>
    

<main>
  <table>
    <thead>

      <tr>
       
         <th>Student ID</th>
         
        <th>
          Student Name
        </th>
        <th>Percentage</th>
        <th>View Attendance</th>
      </tr>
    </thead>

    <!-- <tfoot>
      <tr>
        <th colspan='3'>
          Year: 2014
        </th>
      </tr>
    </tfoot> -->

   

   <?php 
   while($row2=mysqli_fetch_assoc($result2)){
    $st_id=$row2['student_id'];
    $sql_query3 = "SELECT * FROM `user` WHERE user_id='$st_id'";
       
    $result3=mysqli_query($con,$sql_query3);
    $row3=mysqli_fetch_assoc($result3);
    $st_name=$row3['user_name'];

    $sql_query4 = "SELECT * FROM `attendance` WHERE student_id='$st_id' AND course_code='$course_code' AND status='present'";
        $result4=mysqli_query($con,$sql_query4);
        $individual_attendance=mysqli_num_rows($result4);
        if($total_class!=0 && $individual_attendance!=0){
          $individual_percentage=($individual_attendance/$total_class)*100;
        }
        else {
          $individual_percentage=0;
        }
        

   echo" <tr>
    <td data-title='Provider Name'>";
    echo $st_id;
   echo" </td>
    <td data-title='E-mail'>";
    echo $st_name;
   echo " </td>";
   echo "
   <td>";
   echo number_format($individual_percentage, 2);
   echo "%</td>
   ";
   echo" <td class='select'>
      <a class='button' href='#'>
        View Attendance
      </a>
    </td>
  </tr>";
   }

   ?>
     
      
    </tbody>
  </table>
  <div class='detail'>
    <div class='detail-container'>
    <main>
  <table>
    <thead>
      <tr>
       
        
        <th>Session ID</th>
        <th> Start Date</th>
        <th>Status</th>
      </tr>
    </thead>
  </table>
      
       <!-- <dl>
        <dt>
          Provider Name
        </dt>
        <dd>
          John Doe
        </dd>
        <dt>
          Student Name
        </dt>
        <dd>
          email@example.com
        </dd>
        <dt>
          City
        </dt>
        <dd>
          Detroit
        </dd>
        <dt>
          Phone-Number
        </dt>
        <dd>
          555-555-5555
        </dd>
        <dt>
          Last Update
        </dt>
        <dd>
          Jun 20 2014
        </dd>
        <dt>
          Notes
        </dt>
        <dd>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
        </dd>

      </dl>  -->
    </div>
    <div class='detail-nav'>
      <button class='close'>
        Close
      </button>
    </div>
  </div>
</main>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
