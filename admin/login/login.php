<?php 
include 'sessionLogin.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Anti Hoax Covid 19</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap -->
 	<script type="text/javascript" src="../../asset/js/jquery.js"></script>
 	<script type="text/javascript" src="../../asset/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="../../asset/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
	<!-- Data Tables -->
    <script type="text/javascript" src="../../asset/DataTables/media/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="../../asset/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../../asset/DataTables/media/css/dataTables.bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../asset/DataTables/media/css/dataTables.bootstrap.min.css">
	<script type="text/javascript" src="../../asset/DataTables/media/js/dataTables.bootstrap.min.js"></script>
</head>
<body style="background-image: url('../../asset/img/loginadmin.PNG'); background-size: cover;">
	<div class="col-md-4 col-md-offset-4" style="margin-top: 150px; align-items: center;">
		<div class="panel panel-info" style="box-shadow: 10px 10px 5px rgb(0 0 0 / 0.2)">
			<div class="panel-heading">
	        	<span class="glyphicon glyphicon-user"></span><b> Login Admin</b>
	   		</div>
	    	<div class="panel-body">
				<form action="sessionLogin.php" method="POST" class="formLogReg">
				     <div class="col-md-12">
				        <div class="form-group inputLogReg">
				            <label for="usernameInput">Username</label>
				            <input type="text" class="form-control" id="usernameInput" aria-describedby="usernameInfo" placeholder="Enter username" name="username" required>
				        </div>
				        <div class="form-group inputLogReg">
				            <label for="passwordInput">Password</label>
				            <input type="password" class="form-control" id="passwordInput" placeholder="Password" name="password" required>
				        </div>
				        <div class="form-group inputLogReg">
				            <!-- <a type="submit" class="btn btn-primary form-control" name="login" href="../dataAdmin/indexAdmin.php">Login</a> -->
				            <button type="submit" class="btn btn-info form-control" name="login">Login</button>
			  			</div>
				    </div>
				</form>
	    	</div>
    	</div>
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>