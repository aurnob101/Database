<?php
if (isset($_POST['submit2'])) {
    // include database connection code
    include_once 'connection.php';

    // get the form data
    $teacher_id = $_POST["teacher_id"];
    $course_code = $_POST["course_code"];
    $session = $_POST["session"];
    $semester = $_POST["semester"];
    
    $check_query= "SELECT * FROM `course` WHERE `course_code` = '$course_code' AND `session`='$session' AND `semester`='$semester'";
    $result = mysqli_query($con, $check_query);
    

    // update the teacher_id in the course table
    $update_query = "UPDATE `course` SET `teacher_id` = '$teacher_id' 
      WHERE `course`.`course_code` = '$course_code' AND `course`.`session` = '$session'";
                    
    $update_result = mysqli_query($con, $update_query);

    // check if the update was successful
    // if (!$update_result) {
    //     echo "Error updating course teacher: " . mysqli_error($con);
    //     exit;
    // }

    // insert a new record in the takes table
    $insert_query = "INSERT INTO `takes` (`teacher_id`, `course_code`)
                     VALUES ('$teacher_id', '$course_code')";
    $insert_result = mysqli_query($con, $insert_query);

    // check if the insert was successful
     if ($insert_result) {
        echo "Course teacher added successfully.";
     } else {
        echo "Error adding course teacher: " ;
    }
}
?>


