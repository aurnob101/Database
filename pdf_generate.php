<?php 

require (__DIR__ . '/dompdf/vendor/autoload.php');
use Dompdf\Dompdf;
use Dompdf\Options;

$options=new Options;
$options->setChroot(__DIR__);

$dompdf= new Dompdf($options);

$dompdf->setPaper("legal","landscape");


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


        $sql_query4 = "SELECT session_id, teacher_id, course_code, semester, session, DATE_FORMAT(date, '%d-%m-%Y') AS date 
        FROM sessions WHERE teacher_id='$teacher_id' AND course_code='$course_code' AND session='$session'";
        $result4 = mysqli_query($con, $sql_query4);
        $total_class = mysqli_num_rows($result4);
        
        
        



        $html_file = '
        <!DOCTYPE html>
        <html>
        <head>
         <title>Attendance Sheet</title>
         <style>
            body {
                position: relative;
            }

            .head {
                // margin-top: 3rem;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                // border: 1px solid red;
                height: 15rem;
            }

            .head div {
                margin-bottom: 0.5rem;
                display: flex;
                justify-content: center;
                // border: 1px solid blue;
            }

            .head div span {
                display: block;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid black;
                padding: 5px;
                text-align: center;
            }

            th {
                height: 10rem;
            }

            .th {
                height: 1rem;
                padding: 0;
                position: relative;
            }   

            .th span:last-child {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, 300%),  rotate(270deg);
                white-space: nowrap;
                // height: 1erm;
                padding: 0;
            }

            .th span:first-child {
                position: absolute;
                left: -3%;
                bottom: -970%;
                width: 100%;
                height: 1.5rem;
                border: 1px solid black;
            }

            .th2, .th3 {
                max-width: fit-content;
            }

            .logo {
                position: absolute;
                top: 0rem;
                left: 3rem;
                width: 8rem; /* Adjust the width as per your logo size */
                height: auto; /* Maintain aspect ratio */
            }

         </style>
        </head>
        <body>
        <img src="images/cu_logo4.JPG" class="logo" alt="cu logo" >
        <div class="head">
            <div><span style="text-align: center;"><strong>University of Chittagong</strong></span></div>
            <div><span style="text-align: center;">Department of Computer Science and Engineering</span></div>
            <div><span style="text-align: center;">Semester: {{sem}}</span></div>
            <div><span style="text-align: center;">Session: {{session}}</span></div>
            <div><span style="text-align: center;">Course Code: {{cc}}</span></div>
            <div><span style="text-align: center;">Course Teacher: {{ct}}</span></div>
        </div>';
        
        $html_file= str_replace("{{ct}}",$t_name,$html_file);
        $html_file= str_replace("{{cc}}",$course_code,$html_file);
        $html_file= str_replace("{{sem}}",$semester,$html_file);
        $html_file= str_replace("{{session}}",$session,$html_file);
        
        $html_file.='<table>
        <tr>
        <th">Roll No</th>
        <th">Name</th>';
        
        $i = 1;
        while($row4 = mysqli_fetch_assoc($result4)) {
            $date = $row4['date'];
            $html_file .= '<th class="th"><span>' . $i . '</span><span>' . $date . '</span></th>';
            $i = $i + 1;
        }
        
        $html_file .= '<th class="th2">Total Present</th><>
        <th class="th3">Total Percentage</th>
        </tr>';

        $sql_query2 = "SELECT * FROM `student` WHERE semester='$semester' AND session='$session'";
        $result2=mysqli_query($con,$sql_query2);
        
        while($row2 = mysqli_fetch_assoc($result2)) {
            $st_id = $row2['student_id'];
            $sql_query3 = "SELECT * FROM `user` WHERE user_id='$st_id'";
            $result3 = mysqli_query($con, $sql_query3);
            $row3 = mysqli_fetch_assoc($result3);
            $st_name = $row3['user_name'];
            $html_file .= '
            <tr>
            <td>' . $st_id . '</td>
            <td>' . $st_name . '</td>';
        
            $sql_query5 = "SELECT * FROM `sessions` WHERE teacher_id='$teacher_id' AND course_code='$course_code' AND session='$session'";
            $result5 = mysqli_query($con, $sql_query5);
            $total_present = 0;
        
            while($row5 = mysqli_fetch_assoc($result5)) {
                $session_id = $row5['session_id'];
        
                $st_id = $row2['student_id'];
                $sql_query6 = "SELECT * FROM `attendance` WHERE student_id='$st_id' AND course_code='$course_code' AND session_id='$session_id'";
                $result6 = mysqli_query($con, $sql_query6);
                $row6 = mysqli_fetch_assoc($result6);
        
                if($row6 != NULL) {
                    $att = $row6['status'];
                    if ($att == 'P') {
                        $total_present++;
                    }
                } else {
                    $att = '-';
                }
        
                $html_file .= '<td>' . $att . '</td>';
            }
        if(mysqli_num_rows($result5)!=0)
            {
                $total_percentage = ($total_present / mysqli_num_rows($result5)) * 100;
            }
            else $total_percentage=0;
            $total_percentage = number_format($total_percentage, 2); 
            $html_file .= '
            <td>' . $total_present . '</td>
            <td>' . $total_percentage . '%</td>';
            
            $html_file .= '</tr>';
        }
        
        $html_file .= '</table></body></html>';
        
      

    $dompdf->loadHtml($html_file);
$dompdf->render();
$dompdf->stream("attendance.pdf",["Attachment" =>0]); 



?>
