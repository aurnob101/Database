<?php

    $con=mysqli_connect("localhost", "root", "", "cusas") or die("connection fail");


    if (mysqli_connect_error())
    {
        echo "Cannot Connect";
    }
    // else
    // {
    //     echo"Connected";
    // }
   
     
?>  