<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Course Details</title>
    <style>
      .course-details {
        background-color: #f2f2f2;
        border: 1px solid #ddd;
        padding: 20px;
        margin-bottom: 20px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
      
      .course-details h1 {
        margin-top: 0;
        font-size: 2em;
        font-weight: bold;
        
      }
      
      .course-details ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        
      }
      
      .course-details li {
        margin-bottom: 6px;
        font-size: 16px;
        font-weight: bold;
        
      }
      
      .course-details li strong {
        display: inline-block;
        width: 120px;
        
      }
      
      .course-details li:first-child {
        margin-top: 10px;
        
      }

      .course-details-table td {
        font-weight: 700;
        /* border: 1px solid red; */
      }

      .course-details-table td:first-child {
        text-align: right;
        font-weight: 700;
      }
      .course-details-table td:last-child {
        text-align: left;
        padding-left: 1rem;
      }
    </style>
  </head>
  <body>
    <div class="course-details">
      <h1>Course Title: Database Systems</h1>
      <h2 style="margin-top: 2px">Course Code:</h2>
      
     
      <table class="course-details-table">
        <tr>
          <td>Credit:</td>
          <td>3</td>
        </tr>
        <tr>
          <td>Semester:</td>
          <td>4th</td>
        </tr>
        <tr>
          <td>Session:</td>
          <td>2019-2020</td>
        </tr>
        <tr>
          <td>Start Time:</td>
          <td>Credit</td>
        </tr>
        <!-- <tr>
          <td>Duration:</td>
          <td>50</td>
        </tr> -->
        <tr>
          <td>Teacher Name:</td>
          <td>Rudra Pratap Deb Nath</td>
        </tr>
        <tr>
          <td>Teacher ID:</td>
          <td>1122</td>
        </tr>
      </table>
    </div>
  </body>
</html>
