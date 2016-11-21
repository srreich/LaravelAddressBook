<?php $__env->startSection('header'); ?>
	<title>Add Contact</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<h1>Add New Contact</h1>
	<form method="post" action="store">
		<div class="form-group">
			
			<?php echo $__env->make('contact.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('contact.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>