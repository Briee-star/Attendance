   
   <?php
        $title ='Edit Record';

        require_once 'includes/header.php'; 
        require_once 'db/conn.php';

        $result = $crud->getSpecialties();

        if(!isset($_GET['id']))
        {
            //echo 'error';
            include 'includes/errormessage.php';
            header("Location: viewrecords.php");
        }
        else{
            $id = $_GET['id'];
            $attendee = $crud->getAttendeeDetails($id);     
    ?>

 <h1 class="text-center">Edit Record</h1>

<form method="post" action="editpost.php">
          <input type="hidden" name='id' value="<?php echo $attendee['attendee_id'] ?>" />  
  <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname">
        <br>
  </div>
  <div class="form-group">
        <label for="las
        name">Last Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname">
        <br>
  </div>
  <div class="form-group">
        <label for="dob">Date Of Birth</label>
        <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob">
        <br>
  </div>
  <div class="form-group">
    <label for="specialty">Area of Expertise</label>
    <select class="form-control" id="specialty" name="specialty">
        <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) {?>
            <option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected' ?>>
              <?php echo $r['name']; ?>
            </option>
          <?php }?>
    </select>
    <br>
  </div>
  <form>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control" value="<?php echo $attendee['emailaddress'] ?>" id="email" name="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <br>
  </div>
  <div class="form-group">
    <label for="phone">Contact Number</label>
    <input type="text" class="form-control" value="<?php echo $attendee['contactnumber'] ?>" id="phone" name="phone" aria-describedby="phoneHelp">
    <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
    <br>
  </div>
 
  <button type="submit" name="submit" class="btn btn-success w-100 btn-block">Save Changes</button>
</form>

    <?php } ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <?php require_once 'includes/footer.php'; ?>
    