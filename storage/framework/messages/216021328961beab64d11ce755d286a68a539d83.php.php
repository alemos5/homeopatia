<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo e(route('excel.store')); ?>" method="post" enctype="multipart/form-data">
		<?php echo e(csrf_field()); ?>

		<input type="file" name="csv">
		<button type="file">dsada</button>
	</form>
</body>
</html>