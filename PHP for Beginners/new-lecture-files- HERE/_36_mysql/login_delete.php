<?php include "db.php"; ?> 
<?php include "functions.php"; ?>

<?php
if(isset($_POST['submit'])) {
  deleteRows(); 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <div class="col-sm-6">
        
      <form action="login_delete.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control">
        </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
      </div>

      <div class="form-group">
        <select name="id" id="">

          <?php
            showAllData(); 
  			  ?>
          
        </select>
      </div>

      <input class="btn btn-primary" type="submit" name="submit" value="Submit">

      </form>

    </div>

</div>
</body>
</html>