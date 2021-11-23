<?php 
require_once 'db/conn.php';
//get values from post operation
if(isset($_POST['submit'])){
    //extract values from the $_POST array
    $id = $_POST['id'];
    $lname = $_POST['lastname'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $emergencyno = $_POST['emergencyno'];
    $gender = $_POST['gender'];

//call crud function
$result = $crud->editResident($id,$lname, $fname, $mname, $dob, $email, $contactno, $emergencyno, $gender);
//redirect 0index.php
if($result){
    header("Location: users.php");
    }
    else{
        include 'includes/errormessage.php';
    }
    }
    else{
        include 'includes/errormessage.php';
    }

?>