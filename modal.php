<?php
$title = 'Dashboard';
require_once 'resources/header1.php'; 
require_once 'db/conn.php';



$results = $crud->getResidents();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<table class="table">
                <thead>
                  <th>No.</th>
                  <th>Lastname</th>
                  <th>Firstname</th>
                  <th>Middlename</th>
                  <th>Date Of Birth</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Emergency No.</th>
                  <th>Gender</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  
                  <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                    <td><?php echo $r['user_id'] ?></td>
                    <td><?php echo $r['lastname'] ?></td>
                    <td><?php echo $r['firstname'] ?></td>
                    <td><?php echo $r['middlename'] ?></td>
                    <td><?php echo $r['dateofbirth'] ?></td>
                    <td><?php echo $r['emailaddress'] ?></td>
                    <td><?php echo $r['contactno'] ?></td>
                    <td><?php echo $r['emergencyno'] ?></td>
                    <td><?php echo $r['name'] ?></td>
                    <td>
                    <a href="view.php?id=<?php echo $r['gender_id']?>" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">View</a>
                   
                   
                    </td>
                  </tr>
                  <?php }?>

               
                </tbody>
              </table>
   <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="success.php">
  


  <div class="form-group">
      <label for="lastname">Last Name</label>
      <input required type="text" class="form-control" id="lastname" name="lastname"  onkeyup="generate_qrcode(this.value)">
  </div></br>

  <div class="form-group">
      <label for="firstname">First Name</label>
      <input required type="text" class="form-control" id="firstname" name="firstname"  onkeyup="generate_qrcode(this.value)">
  </div></br>

  <div class="form-group">
      <label for="middlename">Middle Name</label>
      <input required type="text" class="form-control" id="middlename" name="middlename"  onkeyup="generate_qrcode(this.value)">
  </div></br>

  <div class="form-group">
      <label for="dob">Date Of Birth</label>
      <input type="date" class="form-control" id="dob" name="dob">
  </div></br>

  <div class="form-group">
      <label for="gender">Gender</label>
      <select class="form-control" id="gender" name="gender">

         <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
          <option value = "<?php echo $r['gender_id'] ?>"><?php echo $r['name']; ?></option>
          <?php } ?>
     
      </select>       
  </div></br>

  <div class="form-group">
      <label for="email">Email address:</label>
      <input required type="email" class="form-control" id="email" name="email"  onkeyup="generate_qrcode(this.value)">
      <small id="emailHelp" class="form-text text-muted">We'll never share your
              email with anyone else.</small>
  </div></br>

  <div class="form-group">
          <label for="contactno">Contact Number</label>
          <input type="text" class="form-control" id="contactno"
          aria-describedby="phonehelp" name="contactno">
          <small id="phoneHelp" class="form-text text-muted">We'll never share your
              number with anyone else.</small>
      </div></br>
      <div class="form-group">
          <label for="emergencyno">Emergency Number</label>
          <input type="text" class="form-control" id="emergencyno"
          aria-describedby="phonehelp" name="emergencyno">
          <small id="phoneHelp" class="form-text text-muted">Incase of Emergency.</small>
      </div></br>
   
  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
  </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>