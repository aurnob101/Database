<!DOCTYPE html>
<html>
<head>
	<title>Table Example</title>
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
			margin: 20px auto;
			padding: 10px 20px;
			background-color: #4CAF50;
			color: white;
			text-align: center;
			cursor: pointer;
		}
		
		.table-wrapper {
			position: relative;
			padding-bottom: 50px; 
			overflow: auto;
		}
		
		.table-wrapper .view-button {
			position: absolute;
			bottom: 0;
			left: 50%;
			transform: translateX(-50%);
		}
	</style>
</head>
<body>
	<div class="table-wrapper">
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

include_once 'connection.php';
$session=$_GET['session'];
$semester=$_GET['semester'];





$sql_query = "select * from course where session='$session' AND semester='$semester' ";
$result = mysqli_query($con, $sql_query);
while($row=mysqli_fetch_assoc($result)){

    if($row){
        $course_title=$row['course_title'];
        $course_code=$row['course_code'];
		$session=$row['session'];
		$semester=$row['semester'];
		
        $sql_query2 = "select teacher_id from takes where course_code ='$course_code'";
    $result2 = mysqli_query($con, $sql_query2);
    $row2=mysqli_fetch_assoc($result2);
	
    if($row2){
        $teacher_id=$row2['teacher_id'];
	}
    
    
    $sql_query3 = "select user_name from user where user_id='$teacher_id'";
    $result3 = mysqli_query($con, $sql_query3);
    $row3=mysqli_fetch_assoc($result3);
    if($row3){
        $t_name=$row3['user_name'];
	}

}


echo '<tr>
<td>';
echo $session;
echo '</td>
<td>';
echo $semester;
echo '</td>
<td>';
echo $t_name;
echo '</td>
<td>';
echo $course_code;
echo '</td>
<td>';
echo $course_title;
echo '</td>
</tr>';
}


?>



			</tbody>
		</table>
		<a href="attendance.php?semester=<?php echo $semester?>&session=<?php echo $session?>" class="view-button">Total Percentage</a>
	</div>
</body>
</html>
