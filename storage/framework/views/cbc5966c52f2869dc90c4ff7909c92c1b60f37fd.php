<!DOCTYPE html>
<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
	 rel="stylesheet"></link>
	<?php echo $__env->yieldContent('header'); ?>
</head>
<body>
	<div class="container">
		<a href="/">
			<button type="button" class="btn btn-primary">
				View all contacts
			</button>
		</a>
		<a href="create">
			<button type="button" class="btn btn-primary">
				Add new contact
			</button>
		</a>
		<?php echo $__env->yieldContent('content'); ?>
	</div>
</body>
</html>