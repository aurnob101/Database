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
<html>
<head>
	<title>Attendance Per Course</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background-color: #f2f2f2;
		}

		table {
			border-collapse: collapse;
			width: 80%;
			margin: 50px auto;
			background-color: #fff;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
		}

		th, td {
			padding: 10px 15px;
			text-align: center;
			border: 1px solid #ddd;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

		tbody tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		.print-button {
			display: block;
			margin: 20px auto;
			padding: 10px 20px;
			background-color: #4CAF50;
			color: white;
			text-align: center;
			cursor: pointer;
		}

		@media print {
			/* body * {
				visibility: hidden;
			} */
			table, table * {
				visibility: visible;
			}

      table {
        margin: 1rem auto;
        box-shadow: none;
      }
      button {
        visibility: hidden;
      }
		}
    
	</style>
</head>
<body>

<div class="course-details">
  <div style="margin-top: 1rem; font-size: 1.8rem; font-weight: 400;" align="center">Course Title:<?php echo $course_title;?></div>
  <div style="margin-top: 1rem; font-size: 1.5rem; font-weight: 400;" align="center">Course Code:<?php echo $course_code;?></div>
  
 
  <table class="course-details-table">
    <tr>
      <td>Teacher Name</td>
      <td><?php echo $t_name;?></td>
    </tr>
    <tr>
      <td>Teacher ID</td>
      <td><?php echo $teacher_id;?></td>
    </tr>
    <tr>
      <td>Semester</td>
      <td><?php echo $semester;?></td>
    </tr>
    <tr>
      <td>Session</td>
      <td><?php echo $session;?></td>
    </tr>
   
    <tr>
      <td>Start Date</td>
      <td><?php echo $start_date;?></td>
    </tr>

    <tr>
      <td>Credit</td>
      <td><?php echo $credit;?></td>
    </tr>
    <tr>
      <td>Total Class</td>
      <td><?php echo $total_class;?></td>
    </tr>
  
    </table>
    
	<table>
		<thead>
      
			<tr>
				<th>Student ID</th>
				<th>Name</th>
				<th>Total Present</th>
				<th>Percentage</th>
			</tr>
		</thead>
    
		<tbody>
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
		echo '<tr>
		<td> ';
		 echo $st_id;
		 echo '</td>
		<td><a href="individual_attendance.php ?st_id=';
		echo $st_id;
		echo'&course_code=';
				echo  $course_code;
		echo '" style="text-decoration:none">';

		 echo $st_name;
		 echo'</a></td>
		<td>';
		echo $individual_attendance;
		echo'</td>
		<td>';
		echo number_format($individual_percentage, 2);
		echo'%</td>
	</tr>';
   }

   ?>
     
      
			
		</tbody>
	</table>
	<p align="center">Signature:</p>
	<p align="center">Date:</p>
	
	<button class="print-button" onclick="window.print()">Print</button>
	
</body>
</html>
  