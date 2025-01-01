<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system </title>
  <link rel="stylesheet" type="text/css" href="css/logstyle.css"/>

   
   <br>
</head>
<body>
  <div class="header">
    <br>
    <br>
  <h2>  <span style="color:darkgreen"  type="submit" style="left" size="75%"></span></h2>
       
  </div>
        
  <form method="post" action="regiser.php">
        <?php include('errors.php'); ?>
        
     <div class="header">
    <h2>  <span  style="color:orangered"  type="submit" >Sign up</span></h2>
        </div>
        <div class="input-group">
          <label>Username</label>
          <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
          <label>Email</label>
          <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password_1">
        </div>
        <div class="input-group">
          <label>Confirm password</label>
          <input type="password" name="password_2">
        </div>
        <div class="input-group">
          <button type="submit" class="btn btn-danger"  name="reg_user">Register</button>
        </div>
        <p>
                Already a member? <a href="index1.php?login.php">Sign in</a>
        </p>
  </form>
</body>
</html>
