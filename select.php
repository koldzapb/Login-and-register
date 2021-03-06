 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>List of all Users</title>


    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a>
    </li>
      <li><a href="select.php">List all users</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
<h2 class="text-center">List of all Users</h2>
<?php
session_start();

require 'db.php';

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = $pdo->query($sql);
if ($result->rowCount() > 0) {
    while ($row = $result->fetch()) {

        ?>



  <div class="container">
      <div class= "col-md-6 col-md-offset-3">
          <div class="starter-template ">
    <ul class="list-group">
  <li class="list-group-item ">Username: <?php echo $row['username']; ?>
  <span class="pull-right">Email: <?php echo $row['email']; ?></span>
</li>
</ul>

</div>

    </div></div>



  </div><!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>

<?php

    }

}

?>