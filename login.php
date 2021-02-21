<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atieh - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Login</div>
                <div class="error" align="center">
                    <?php
                    if ($_SESSION["error"] == "404") {
                        echo "<h4 class='text-danger'><b>User not found !</b></h4>";
                    }
                    elseif ($_SESSION["error"] == "500") {
                        echo "<h4 class='text-danger'><b>Fill them all !</b></h4>";
                    }
                    ?>
                </div>
                <div class="panel-body">
					<form role="form" action="user/login.php" method="post">
                        <fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Code" name="code" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="radio-inline">
								<label>
                                    <input type="radio" name="person" <?php if (isset($gender) && $gender=="student") echo "checked";?> value="student">Student
                                </label>
                                <br>
                                <label>
                                    <input type="radio" name="person" <?php if (isset($gender) && $gender=="teacher") echo "checked";?> value="teacher">Teacher
                                </label>
							</div>
                            <hr>
							<button name="submit" class="btn btn-primary">Login</button>
                        </fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
