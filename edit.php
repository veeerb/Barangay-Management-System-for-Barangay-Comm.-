<?php
$title = 'Edit Records';
require_once 'resources/header1.php'; 
require_once 'db/conn.php';



 $results = $crud->getGenders();
 if(!isset($_GET['id'])){
     //echo error
     include 'includes/errormessage.php';
     header("Location: users.php");
 }else{
     $id = $_GET['id'];
    $resident = $crud->getResidentDetails($id);



?>
 

<h1 class="text-center">Edit Data</h1>
<!-- GET -->
<!-- <f8orm method="get" action="success.php">
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">
    </div></br>

    <div class="form-group">
        <label for="firstname">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">
    </div></br>

    <div class="form-group">
        <label for="middlename">Middle Name</label>
        <input required type="text" class="form-control" id="middlename" name="middlename">
    </div></br>

    <div class="form-group">
        <label for="dob">Date Of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob">
    </div></br>

    <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" id="gender" name="gender">
  
            <option>Male</option>
            <option>Female</option>
       
        </select>       
    </div></br>

    <div class="form-group">
        <label for="email">Email address:</label>
        <input required type="email" class="form-control" id="email" name="email">
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
    </form>  -->

    <!-- POST -->
    <form method="post" action="editpost.php">
    <input type="hidden" name ="id" value="<?php echo $resident['user_id']?>"/>
    
    

    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input required type="text" class="form-control" value="<?php echo $resident['lastname'] ?>" id="lastname" name="lastname"  onkeyup="generate_qrcode(this.value)">
    </div></br>

    <div class="form-group">
        <label for="firstname">First Name</label>
        <input required type="text" class="form-control" value="<?php echo $resident['firstname'] ?>" id="firstname" name="firstname"  onkeyup="generate_qrcode(this.value)">
    </div></br>

    <div class="form-group">
        <label for="middlename">Middle Name</label>
        <input required type="text" class="form-control" value="<?php echo $resident['middlename'] ?>" id="middlename" name="middlename"  onkeyup="generate_qrcode(this.value)">
    </div></br>

    <div class="form-group">
        <label for="dob">Date Of Birth</label>
        <input type="date" class="form-control" value="<?php echo $resident['dateofbirth'] ?>" id="dob" name="dob">
    </div></br>

    <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" value="<?php echo $resident['gender_id'] ?>" id="gender" name="gender">
  
           <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
            <option value = "<?php echo $r['gender_id'] ?>"<?php if($r['gender_id'] == 
            $resident['gender_id']) echo 'selected' ?>>
            <?php echo $r['name']; ?></option>
            <?php } ?>
       
        </select>       
    </div></br>

    <div class="form-group">
        <label for="email">Email address:</label>
        <input required type="email" class="form-control" value="<?php echo $resident['emailaddress'] ?>" id="email" name="email"  onkeyup="generate_qrcode(this.value)">
        <small id="emailHelp" class="form-text text-muted">We'll never share your
                email with anyone else.</small>
    </div></br>

    <div class="form-group">
            <label for="contactno">Contact Number</label>
            <input type="text" class="form-control" value="<?php echo $resident['contactno'] ?>" id="contactno"
            aria-describedby="phonehelp" name="contactno">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your
                number with anyone else.</small>
        </div></br>
        <div class="form-group">
            <label for="emergencyno">Emergency Number</label>
            <input type="text" class="form-control" value="<?php echo $resident['emergencyno'] ?>" id="emergencyno"
            aria-describedby="phonehelp" name="emergencyno">
            <small id="phoneHelp" class="form-text text-muted">Incase of Emergency.</small>
        </div></br>
     
    <button type="submit" name="submit" class="btn btn-primary btn-block">Save</button>
    </form> 
<?php } ?>
    <br>
    <br>
    <br>
    <br>
    <br>
<?php require_once 'resources/footer1.php'; ?>

