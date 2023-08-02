<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <?php
    include 'form.php';
    ?>
    <title>PHP Registration Form</title>
  </head>
  <body>
    <form method="post">
  <!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> -->
  <div class="container">
        <div class="title">Registration Form</div>
        <div class="sub-container">
          <div class="form">
            <label class="label">First Name :</label>
            <input type="text" class="input" name="fname"  value="<?php echo $fname; ?>"/>
            <span class="error">* <?php echo $error_fname; ?></span>
          </div>

          <div class="form">
            <label class="label">Last Name :</label>
            <input type="text" class="input" name="lname" value="<?php echo $lname; ?>"/>
            <span class="error">* <?php echo $error_lname; ?></span>

          </div>

          <div class="form">
            <label class="label">Email :</label>
            <input type="text" class="input" name="email" value="<?php echo $email; ?>"/>
            <span class="error">* <?php echo $error_email; ?></span>
         
          </div>

          <div class="form">
            <label class="label">Password :</label>
            <input type="password" class="input" name="password" value="<?php echo $password; ?>"/>
            <span class="error">* <?php echo $error_password; ?></span>

          </div>

          <div class="form">
            <label class="label">Confirm Password :</label>
            <input type="password" class="input" name="password" value="<?php echo $password; ?>"/>
            <span class="error">* <?php echo $error_password; ?></span>

          </div>

          <div class="form">
            <label class="label">Phone Number :</label>
            <input type="number" class="input" name="number" value="<?php echo $number; ?>"/>
            <span class="error">* <?php echo $error_number; ?></span>

          </div>
          <input type="submit" name="submit" value="Submit">  
          <!-- <div name="submit" class="btn">Submit</div> -->
          <!-- <input class="btn" type="submit" name="submit" value="Submit"> -->
        </div>
      </div>
    </form>

  
  </body>
</html>
