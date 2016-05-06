<?php
session_start();
if(isset($_SESSION["last"])) {
	session_destroy();
}
?>
<!doctype html>
<html lang="en">
	<head>
		<title>Simple chatbox</title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
		<!-- Custom -->
		<link href="style.css" rel="stylesheet" />
	</head>
	
	<body>
		<div class="container">
			<div class="wrapper panel panel-default">
				<div class="panel-heading">
					Simple chatbox
					<div class="dropdown">
						<button class="btn btn-xs btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li class="droptitle">Admin:</li>
							<!--<li role="separator" class="divider"></li>-->
							<li><a id="clickClear" href="index.php">Clear chat history</a></li>
						</ul>
					</div>
				</div>
				<div id="msg" class="panel-body">
				</div>
				
				<div class="panel-footer">
					<form id="sendform" method="POST" class="input-group">
						<input id="text" type="text" name="text" autocomplete="off" class="form-control" placeholder="Enter chat message.."/>
						<span class="input-group-btn">
							<input id="send" type="submit" value="Send" class="btn btn-default" />
						</span>
					</form>
				</div>
			</div>
		</div>
		
		<footer class="wrapper">
			<div id="online" class="container">
			</div>
		</footer>

		<script src="chat.js"></script>		
	</body>
</html>

