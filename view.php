<?php
$title = 'View Record';
require_once 'resources/header1.php'; 
require_once 'db/conn.php';


//get user id
if(!isset($_GET['id']))
{
    echo "<h1 class='text-danger'>Something Wrong!</h1>";
   
}else{
    $id = $_GET['id'];
    $result = $crud->getResidentDetails($id);

?>
<div class="card" style="width: 30rem;">

  <div class="card-body">
    <h5 class="card-title">User's Info</h5>
    <p class="card-text">
    Full Name: <?php echo $result ['lastname'].' '.$result['firstname'].' '.$result['middlename']; ?>
    </p>
    <p class="card-text">
    Date of Birth: <?php echo $result['dateofbirth']; ?>
    </p>
    <p class="card-text">
    Email Address: <?php echo $result['emailaddress']; ?>
    </p>
    <p class="card-text">
    Contact number: <?php echo $result['contactno']; ?>
    </p>
    <p class="card-text">
    Emergency number: <?php echo $result['emergencyno']; ?>
    </p>

  </div>
  
</div>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a href="users.php" class="btn btn-success">Back</a>
    <a href="edit.php?id=<?php echo $result['user_id']?>" class="btn btn-primary">Edit</a>
    <a onclick ="return confirm('Want to delete this data?');" href="delete.php?id=<?php echo $result['user_id']?>" class="btn btn-danger">Delete</a>
                   
<?php }?>
<br>
    <br>
    <br>
    <br>
    <br>
<?php require_once 'resources/footer1.php'; ?>
