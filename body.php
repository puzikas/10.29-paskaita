<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">
<head>
	<title>PHP Gallery</title>
</head>
<body>
	<div class="container">
		<div class="row title_1">
			<div class="col-12">
				<h1>PHP Gallery</h1>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-12">
				<form action="index.php" method="post" enctype="multipart/form-data">
					<h5>Select image to upload:</h5>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="image">
							<label class="custom-file-label">Choose file</label>
						</div>
						<div class="input-group-append">
							<button class="btn btn-warning" type="submit" value="upload" name="submit">Upload</button>
						</div>
					</div>
					
				</form>
			</div>
		</div>
		<br>
		<?php

		if (isset($alert)) {
			echo "<div class='alert alert-warning' role='alert'>
			$alert
		</div>";
	}

	?>
	<div class="row">
		<div class="col"><h3>All photos:</h3></div>
	</div>
	<div class="row">
		<?php
		foreach ($images as $image) {
			echo "<div class='col-4'>
			<img class='image' src='images/$image'>
		</div>";
	}
	?>
</div>
</body>
</html>