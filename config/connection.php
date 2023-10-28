<?php


$connection=mysqli_connect('localhost','root','','gym1');


if(mysqli_connect_errno()){

    die('Database Connection Failed' .mysqli_connect_errno());
}
    
    else{
        echo  "Connection Succesful.";
    }


?>