<?php
session_start();

include_once 'connection.php';



$user_id = $_SESSION['user_id'];  


$sql = "SELECT * FROM user WHERE user_id = $user_id";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $user_name = $row["user_name"];
    $email = $row["email"];
    $password = $row["password"];
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $new_user_name = $_POST["user_name"];
    $new_email = $_POST["email"];
    $new_password = $_POST["password"];

    $sql = "UPDATE user SET user_name='$new_user_name', email='$new_email', password='$new_password' WHERE user_id=$user_id";
	$_SESSION['user_name']=$new_user_name;
	$_SESSION['email']=$new_email;
	$_SESSION['password']=$new_password;


    if ($con->query($sql) === TRUE) {
      
        header("Location: student_profile.php");
        exit();
    } else {
        echo "Error updating record: " . $con->error;
    }
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<style>
		label {
			display: block;
			margin-bottom: 10px;
		}

		input[type="text"], input[type="email"], input[type="password"] {
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 3px;
			width: 100%;
			max-width: 400px;
			box-sizing: border-box;
			margin-bottom: 20px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>Edit Profile</h1>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="user_name">Name:</label>
		<input type="text" id="user_name" name="user_name" value="<?php echo $user_name; ?>">

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value="<?php echo $email; ?>">

		<label for="password">Password:</label>
		<input type="text" id="password" name="password" value="<?php echo $password; ?>">

		<input type="submit" value="Save Changes">
	</form>
</body>
</html>
