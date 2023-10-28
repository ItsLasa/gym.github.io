<?php require_once('config/connection.php')?>;

<?php


//insert data mysql

if(isset($_POST['submit'])){

    //person details
    $fname =$_POST['firstname'];
    $lname =$_POST['lastname'];
    $dob =$_POST['dob'];
    $gender =$_POST['gender'];

    //contact-details
    $email =$_POST['email'];
    $telno=$_POST['telno'];

    //branch details
    $branch_name=$_POST['branch'];
  
    
    $query = "INSERT INTO data(fname,lname,telno,email) VALUES ('$fname','$lname','telno','$email')";
    
    $result=mysqli_query($connection,$query);
    
    if($result){
        echo "1 Result Added";
    }
    else{
        echo "Query Failed";
    }
    
    }










?>