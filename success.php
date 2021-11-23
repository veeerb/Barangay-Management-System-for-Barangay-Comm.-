
<?php
$title = 'Dashboard';
require_once 'resources/header1.php'; 
require_once 'db/conn.php';

if(isset($_POST['submit'])){
//extract values from the $_POST array
$lname = $_POST['lastname'];
$fname = $_POST['firstname'];
$mname = $_POST['middlename'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$contactno = $_POST['contactno'];
$emergencyno = $_POST['emergencyno'];
$gender = $_POST['gender'];

//call function to insert and track if success or not
$isSuccess = $crud->insertResidents($lname, $fname, $mname, $dob, $email, $contactno, $emergencyno, $gender);

if($isSuccess){
  include 'includes/successmessage.php';
}
else{
  
  include 'includes/errormessage.php';
}

}
?>



<!--print out values that were passed to the action page using method="get"-->
<!-- <div class="cards">
<div class="card-header">User's Info</div>
  <div class="card-body">

    <p class="card-text">Name: <?php //echo $_GET['firstname']  .''.' '. $_GET['middlename'] . ' '.'' . $_GET['lastname'];?></p>
    <p class="card-text">Date Of Birth: <?php //echo $_GET['dob'];?></p>
    <p class="card-text">Email Address: <?php //echo $_GET['email'];?></p>
    <p class="card-text">Contact#: <?php //echo $_GET['contactno'];?></p>
    <p class="card-text">Emergency#: <?php //echo $_GET['emergencyno'];?></p>
  </div>
</div> 
</div> -->
<!--print out values that were passed to the action page using method="post"-->
<div class="card" style="width: 30rem;">

  <div class="card-body">
    <h5 class="card-title">User's Info</h5>
  
    <p class="card-text">Name: <?php echo $_POST['firstname']  .''.' '. $_POST['middlename'] . ' '.'' . $_POST['lastname'];?></p>
    <p class="card-text">Date Of Birth: <?php echo $_POST['dob'];?></p>
    <p class="card-text">Email Address: <?php echo $_POST['email'];?></p>
    <p class="card-text">Contact#: <?php echo $_POST['contactno'];?></p>
    <p class="card-text">Emergency#: <?php echo $_POST['emergencyno'];?></p>
  </div>
</div> 
</div>
<br>
    <br>
    <br>
    <br>
    <br>
<?php require_once 'resources/footer1.php'; ?>