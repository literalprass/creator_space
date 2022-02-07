<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/nav.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('css/content.css'); ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
	<title>
		<?= $title; ?>
	</title>
</head>
<body>

<?= $this->include('layout/nav'); ?>

<?= $this->renderSection('main'); ?>

</body>
</html>