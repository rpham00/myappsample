<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<style type="text/css">
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>
		Task for the Day
	</h1>
	<ul>
		<li>
			<strong>Name: </strong> <?= $task['title']; ?>
		</li>

		<li>
			<strong>Due Date: </strong> <?= $task['due']; ?>
		</li>

		<li>
			<strong>Responsible: </strong> <?= $task['assigned_to']; ?>
		</li>

		<li>
			<strong>Status: </strong> 
			<?php
				if($task['completed']){
					echo '&#10003';
				} else {
					echo '&#10060';
				}


			?>
		</li>



	</ul>

</body>
</html>