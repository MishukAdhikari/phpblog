<?php
if (isset($_POST['btn'])) {
  require_once '../classes/class.login.php';
  $login = new Login;
  $login->admin_login_check($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-offset-3 col-md-6">
          <div class="well" style="margin-top: 180px;">
          <h4 class="text-center text-success">Please use valid email address and password</h4>
          <hr>
            <form class="form-horizontal" action="" method="post">
              <div class="form-group">
                <label for="email" class="control-label col-md-3">
                  Email Address
                </label>
                <div class="col-md-9">
                  <input type="email" name="email" required class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label for="password" class="control-label col-md-3">
                  Password
                </label>
                <div class="col-md-9">
                  <input type="password" name="password" required class="form-control">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                  <input type="submit" name="btn" class="btn btn-success btn-block" value="Login">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>