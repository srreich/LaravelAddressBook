<?php $__env->startSection('content'); ?>
<form method="post" action="/edit/<?php echo e($contact->id); ?>">
	<div class="form-group">
		<?php echo $__env->make('contact.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div>
			<button type="submit" formaction="/delete/<?php echo e($contact->id); ?>" class="btn">Delete</button>
		</div>
	</div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>