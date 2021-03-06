<!-- Jiwon Cha (jc4va) -->
<?php include('./php/login.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Matthew Han (mlh6fc) and Jiwon Cha (jc4va)">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ScheduleMe : Log In</title>
	<link rel="stylesheet" href="./css/login.css" />
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Varela+Round" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
</head>

<body>
	<header>
		<div class="logo">
			<h1><a href="index.php"> ScheduleMe </a></h1>
		</div>
	</header>
	<div class="card-container">

		<div class="form-holder">
			<form name="loginform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
				<div class = "idinput">
					<input type="text" id="user_id" name="user_id" placeholder="User ID" value="<?php echo $inputted_username ?>"> 
					<br>
					<div id="user_id_error"><?php echo $user_id_error_msg ?></div>
				</div>
				<div class = "pwinput">
					<input type="password" id="password" name="password" placeholder="Password"> <br>
					<div id="pw_id_error"><?php echo $pw_id_error_msg ?></div>
				</div>
				<div class = "submitbtn">
					<input type="submit" id="submit" name="submit" value="Log In">
					<div id="id_error"><?php echo $id_error_msg ?></div>
				</div>
			</form>
		</div>
	</div>

	<div id="login_error"></div>

	<!-- <script type="text/javascript" src="./js/login.js"></script> -->
</body>
</html>
