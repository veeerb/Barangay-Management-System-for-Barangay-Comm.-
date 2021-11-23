<?php 
require_once 'db/conn.php';

if(!$_GET['id']){
    include 'includes/errormessage.php';
    header("Location: users.php");
}else{
    //get id values
    $id = $_GET['id'];

    //call deletion
    $result = $crud->deleteResident($id);

    //redirect to list
    if($result){
        header("Location: users.php");
    }
    else{
        include 'includes/errormessage.php';
    }
}

?>