   
   <?php
        $title ='Index';

        require_once 'includes/header.php'; 
        require_once 'db/conn.php';

        $result = $crud->getSpecialties();
       
    ?>
    <!--
        -First Name
        -Last Name
        -Date of Birth (Use DatePicker)
        -Specialty (Database Admin, Software Developer, Web Administrator, Other)
        -Email Address
        -Contact Number
    -->

 <h1 class="text-center">Registration For IT Conference</h1>

<form method="post" action="success.php">
  <div class="form-group">
        <label for="firstname">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">
        <br>
  </div>
  <div class="form-group">
        <label for="lastname">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">
        <br>
  </div>
  <div class="form-group">
        <label for="dob">Date Of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob">
        <br>
  </div>
  <div class="form-group">
    <label for="specialty">Area of Expertise</label>
    <select class="form-control" id="specialty" name="specialty">
        <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) {?>
            <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option>
          <?php }?>
    </select>
    <br>
  </div>
  <form>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <br>
  </div>
  <div class="form-group">
    <label for="phone">Contact Number</label>
    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
    <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
    <br>
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary w-100 btn-block">Submit</button>
</form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php require_once 'includes/footer.php'; ?>
    