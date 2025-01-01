<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration </title>
 <link rel="stylesheet" type="text/css" href="css/logstyle.css"/>

</head>
<body >
    <br>
    <br>
  <div class="header">
    <br>
    <br>
  <h2>  <span style="color:darkgreen"  type="submit" style="left" size="75%"></span></h2>
       
  </div>
         
  <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="header">
        <h2>  <span style="color:darkgreen"  type="submit" style="left" size="75%">Login</span></h2></div>
        <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" >
        </div>
        <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
        </div>
        <div class="input-group">
                <button type="submit" class="btn btn-primary" name="login_user">Login</button>
        </div>
        <p>
                Not yet a member? <a href="regiser.php">Sign up</a>
        </p>
  </form>
</body>
</html>