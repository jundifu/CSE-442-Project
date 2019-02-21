<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>	
	<body>
		<div class="poll">
			<div class="poll question">
				Here is a polling question
			</div>
			<form action="vote.php" method="post">
				<div class="poll-options">
					<div class="poll-option">
						<input type="radio" name="choice" value="1" id="c1">
						<label for="c1" Choice 1></label>
					</div>
					<div class="poll-option">
						<input type="radio" name="choice" value="2" id="c2">
						<label for="c2" Choice 2></label>
					</div>
					<div class="poll-option">
						<input type="radio" name="choice" value="3" id="c2">
						<label for="c3" Choice 3></label>
					</div>
				</div>

				<input type="submit" name="submit" value="Submit answer">
				<input type="hidden" name="poll" value="1">
			</form>
		</div>
	</body>
</html>