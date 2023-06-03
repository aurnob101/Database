<!DOCTYPE html>
<head>
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

		.view-button {
			display: block;
			margin: 5px auto;
			padding: 5px 10px;
			background-color: #4CAF50;
			color: white;
			text-align: center;
			cursor: pointer;
			border-radius: 5px;
			font-size: 14px;
			transition: all 0.2s ease;
		}

		.view-button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
			<th>Teacher Name</th>
				<th>Course Code</th>
				<th>Course Title</th>
				<th>Semester</th>
				<th>Session</th>
				<th>Attendance</th>
              
			</tr>
		</thead>
		<tbody>
<?php
session_start();
include_once 'connection.php';
$t_id=$_SESSION['user_id'];
$sql_query = "select course_code from takes where teacher_id ='$t_id'";
    $result = mysqli_query($con, $sql_query);
    while($row=mysqli_fetch_assoc($result))
    {
      if($row!=NULL){
        $course_code=$row['course_code'];
      $sql_query2 = "select * from course where course_code='$course_code'";
      $result2 = mysqli_query($con, $sql_query2);
      $row2=mysqli_fetch_assoc($result2);
	  if($row2){
		$session=$row2['session'];
	  $semester=$row2['semester'];
	  }
      if($row2){
        $course_title=$row2['course_title'];
        $sql_query3 = "select user_name from user where user_id='$t_id'";
        $result3 = mysqli_query($con, $sql_query3);
        $row3=mysqli_fetch_assoc($result3);
        if($row3){
          $t_name=$row3['user_name'];
      echo '
			<tr>
			<td> ' ; echo $t_name ;
			echo '</td>
				<td> '; echo $course_code;
				echo '</td>
				<td> ';echo $course_title;
				echo'</td>
				<td>
				';echo $semester;
				echo '</td>
                <td>
				'; echo $session;
				echo '</td>
				<td><a href="print_attendance.php?course_code=';
				echo  $course_code;
			   echo'&t_name=';
				echo  $t_name;
				 echo '"><button class="view-button">View Attendance</button></a></td>
			</tr>
	
	';
}
}

}

}
?>
		
		</tbody>
	</table>
</body>
</html>