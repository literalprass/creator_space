<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/form.css'); ?>">
	<title>Add</title>
</head>

<body>

	<div id="overlay">
		<form autocomplete="off" action="<?= base_url('gallery/save'); ?>" method="POST" enctype="multipart/form-data">
			<h1>Post something</h1>

			<label for="title">Title : </label>
			<input type="text" name="title" id="title" placeholder="Add title">
			<small class="error"></small>
			<br>
			<label for="type">Type : </label>
			<input type="text" id="type" name="type" placeholder="Type (Optional)">

			<label for="category">Category : </label>
			<input type="text" id="category" name="category" placeholder="Category (Art/Gfx/Vector . . etc.)">
			<small class="error"></small>
			<br>
			<label for="creator">Creator : </label>
			<input type="text" id="creator" name="creator" placeholder="The creator">
			<small class="error"></small>
			<br>
			<label for="description">Desc : </label>
			<textarea rows="3" id="description" name="description" placeholder="Add a details about your post" rows="6"></textarea>
			<small class="error"></small>
			<br>
			<label for="image">Image : </label>
			<input type="file" name="image" id="image">
			<!-- <small class="error"></small>
			<br> -->
	
			<div class="center">
				<!-- <input type="reset" value="Reset">  -->
				<input type="submit" name="submit" value="Post" onclick="return validateForm();">
				<p id="success"></p>
			</div>

		</form>

	</div>



	<script type="text/javascript" src="<?= base_url('js/script.js'); ?>"></script>
</body>

</html>