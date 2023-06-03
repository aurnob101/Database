<?php 

$con=mysqli_connect("localhost", "root", "", "cusas") or die("connection fail");
   
  

$session=$_GET['session'];
$semester=$_GET['semester'];

        $sql_query2 = "SELECT * FROM `student` WHERE semester='$semester' AND session='$session'";
       
        $result2=mysqli_query($con,$sql_query2);

        $sql_query3 = "SELECT * FROM `sessions` WHERE  semester='$semester' AND session='$session'";
        $result3=mysqli_query($con,$sql_query3);
        $total_class=mysqli_num_rows($result3);
        
        

?>





<!DOCTYPE html>
<html>
<head>
	<title>Attendance Percentage of All Courses</title>
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
  <div style="margin-top: 1rem; font-size: 1.8rem; font-weight: 400;" align="center">Session:<?php echo $session;?></div>
  <div style="margin-top: 1rem; font-size: 1.5rem; font-weight: 400;" align="center">Semester:<?php echo $semester;?></div>
  
 
  
	<table>
		<thead>
      
			<tr>
				<th>Student ID</th>
				<th>Name</th>
				<th>Parcentage</th>
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

    $sql_query4 = "SELECT a.student_id,a.course_code,a.session_id FROM attendance a, sessions s 
	WHERE a.student_id='$st_id' AND a.session_id=s.session_id AND s.semester='$semester' AND s.session='$session' AND status='P';";
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
		<td>';

		 echo $st_name;
		 echo'</td>
		<td>';
		echo number_format($individual_percentage, 2);
		echo'%</td>
	</tr>';
   }

   ?>
     
      
			
		</tbody>
	</table>
	<!-- <p align="center">Signature:</p>
	<p align="center">Date:</p>

	<button class="print-button" onclick="window.print()">Print</button> -->
</body>
</html>
  