<?php
include_once 'connection.php';
$sql_query = "select * from course";
$result = mysqli_query($con, $sql_query);
while($row=mysqli_fetch_assoc($result)){
    if($row){
        $course_title=$row['course_title'];
        $course_code=$row['course_code'];
        $sql_query2 = "select teacher_id from takes where course_code ='$course_code'";
    $result2 = mysqli_query($con, $sql_query2);
    $row2=mysqli_fetch_assoc($result2);
    if($row2){
        $teacher_id=$row2['teacher_id'];
    
    
    $sql_query3 = "select user_name from user where user_id='$teacher_id'";
    $result3 = mysqli_query($con, $sql_query3);
    $row3=mysqli_fetch_assoc($result3);
    if($row3){
        $t_name=$row3['user_name'];
    echo '
    
    <style type="text/css">
    
    * {
     margin: 0px;
     padding: 0px;
    }
    
    body {
     font-family: arial;
    }
    
    .main {
     margin: 2%;
    }
    
    .card {
     width: 30%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }
    
    .image img {
      width: 100%;
      border-top-right-radius: 10px;
      border-top-left-radius: 10px;
    }
    
    .title {
     text-align: center;
     padding: 10px;
    }
    
    h1 {
     font-size: 20px;
    }
    
    .des {
      padding: 3px;
      text-align: center;
      padding-top: 10px;
      border-bottom-right-radius: 5px;
      border-bottom-left-radius: 5px;
    }
    
    button {
      margin-top: 60px;
      margin-bottom: 10px;
      background-color: white;
      border: 1px solid black;
      border-radius: 5px;
      padding:10px;
    }
    
    button:hover {
      background-color: black;
      color: white;
      transition: .5s;
      cursor: pointer;
    }
    
    </style>
    
    
    <div class="main">
    
    <div class="card">
    
    <div class="image">
       <img src="images/pic1.png">
    </div>
    <div class="title">
        <h2>';
        echo $course_title;
        echo '</h2>
     <h1>';
     echo $course_code;
     echo '</h1>
    </div>
     
    <div class="des">
     <p>';
     echo $t_name;
     echo '</p>
     <td>
        <a href="dist/index.php">
            <button>View</button>
        </a>
     </td>
    </div>
    
    </div>
    
    </div>
    
    ';
    }
    }

    }
   
}
?>