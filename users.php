<?php
$title = 'Users';
require_once 'resources/header1.php'; 
require_once 'db/conn.php';

 //get all residents
 $results = $crud->getResidents();
?>

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
                    <a href="view.php?id=<?php echo $r['user_id']?>" class="btn btn-success">View</a>
                    <a href="edit.php?id=<?php echo $r['user_id']?>" class="btn btn-primary">Edit</a>
                    <a onclick ="return confirm('Want to delete this data?');" href="delete.php?id=<?php echo $r['user_id']?>" class="btn btn-danger">Delete</a>
                   
                   
                    </td>
                  </tr>
                  <?php }?>

               
                </tbody>
              </table>
              <br>
    <br>
    <br>
    <br>
    <br>

<?php require_once 'resources/footer1.php'; ?>
