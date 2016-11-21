<?php $__env->startSection('header'); ?>
	<title>Edit/Delete Contact</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<h1>Edit/Delete Contact</h1>
	<p>Enter a value in the fields you want to change.</p>
	<p>Leave any fields you want unchanged blank.</p>
	<p>Press submit to confirm the changes you want.</p>
	<p>Press delete to delete the entry altogether.</p>
	<form method="post" action="/alter/<?php echo e($contact->id); ?>">
		<div class="form-group">
			
			<?php echo $__env->make('contact.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<button type="submit" formaction="/delete/<?php echo e($contact->id); ?>" class="btn btn-primary">
				Delete
			</button>
		</div>
	</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('contact.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>