
<?php
$con=mysqli_connect("localhost", "root", "", "cusas") or die("connection fail");
$st_id=$_GET['st_id'];
$course_code=$_GET['course_code'];

$sql_query="SELECT * FROM `attendance` WHERE student_id='$st_id' AND course_code='$course_code'";
    $result = mysqli_query($con, $sql_query);
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Personal Attendance</title>
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
				<th>Session ID</th>
				<th>Time</th>
				<th>Status</th>
				
		</thead>
		<tbody>
			<?php 
			while($row=mysqli_fetch_assoc($result)){

				$session_id=$row['session_id'];
				$time=$row['time'];
				$status=$row['status'];

				echo'<tr>
				<td>
				';echo $session_id;
				echo '</td>
				<td>';
				echo $time;
				echo'</td>
				<td>';echo $status;
				echo'</td>
               
			</tr>';
			}
			

			?>
		
		</tbody>
	</table>
</body>
</html>
