<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once 'connection.php';
    $code=$_POST["code"];
    $student_id=$_SESSION["user_id"];
    $course_code=$_POST["course_code"];
    $session_id = $_POST['session_id'];
    // Query the session table with the entered code to get the session details
    $sql_query = "SELECT * FROM `sessions` WHERE `code`='$code'";
    $result=mysqli_query($con,$sql_query);
    
    if(mysqli_num_rows($result) == 1) {
        $session=mysqli_fetch_assoc($result);
        
        // Update a row in the attendance table
       
        $date = date('Y-m-d H:i:s');
        $sql_query2 = "UPDATE `attendance` SET `status` = 'P' WHERE `attendance`.`student_id` = '$student_id' AND
         `attendance`.`course_code` = '$course_code' AND `attendance`.`session_id` = '$session_id'";
        $result=mysqli_query($con,$sql_query2);
        
        if($result) {
            echo "Attendance recorded successfully.";
        } else {
            echo "Error recording attendance.";
        }
    } else {
        echo "Invalid code or course code.";
    }
}
?>
