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
			
				<th>Session</th>
				<th>Semester</th>
				<th>Teacher Name</th>
				<th>Course Code</th>
				<th>Course Title</th>
				
              
			</tr>
		</thead>
		<tbody>
<?php
session_start();
include_once 'connection.php';

$sql_query2 = "select * from course";
$result2 = mysqli_query($con, $sql_query2);

    while($row2=mysqli_fetch_assoc($result2))
    {
      if($row2){
        $course_code=$row2['course_code'];
		$course_title=$row2['course_title'];
		$session=$row2['session'];
		$semester=$row2['semester'];
		$t_id=$row2['teacher_id']; 
$sql_query = "select user_name from user where user_id ='$t_id'";
    $result = mysqli_query($con, $sql_query);
      $row=mysqli_fetch_assoc($result);
	  $t_name=$row['user_name'];
       
      echo '
			<tr>
			<td> ' ; echo $session ;
			echo '</td>
				<td> '; echo $semester;
				echo '</td>
				<td> ';echo $t_name;
				echo'</td>
				<td>
				';echo $course_code;
				echo '</td>
                <td>
				'; echo $course_title;
				echo '</td>
			</tr>
	
	';
}
}


?>
		
		</tbody>
	</table>
</body>
</html>