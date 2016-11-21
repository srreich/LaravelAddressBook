<?php $__env->startSection('header'); ?>
	<title>Address Book</title>
	<script>
		// Runs when user selects a value from the dropdown menu.
		// Causes the "show" method to run in ContactsController
		function run_filter()
		{
			var url = "contacts/" + document.getElementById("filter_dropdown").value;
			window.location.replace(url);
		}
	</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	
	<?php if(isset($contactList) ): ?>
		<select onchange="run_filter()" id="filter_dropdown">
			<option>Select contact to filter for</option>
			<?php $__currentLoopData = $contactList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<option value="<?php echo e($contact->id); ?>">
					(ID: <?php echo e($contact->id); ?>) <?php echo e($contact->name); ?>

				</option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</select>
	<?php endif; ?>

	<?php if( isset($contactList) or isset($contact) ): ?>
		<table class="table table-striped">
			<thead>
				<tr>
				
					<th>ID</th>
					<th>Name</th>
					<th>Cell Phone</th>
					<th>Address</th>
					<th>Email Address</th>
					<th>Notes</th>
					<th></th>
				</tr>
			</thead>
			<tbody class="table-bordered table-condensed">

			
			<?php if( isset($contactList) ): ?>
				<?php $__currentLoopData = $contactList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td><?php echo e($contact->id); ?></td>
						<td><?php echo e(isset($contact->name) ? $contact->name : ''); ?></td>
						<td><?php echo e(isset($contact->phone) ? $contact->phone : ''); ?></td>
						<td><?php echo e(isset($contact->address) ? $contact->address : ''); ?></td>
						<td><?php echo e(isset($contact->email) ? $contact->email : ''); ?></td>
						<td><?php echo e(isset($contact->notes) ? $contact->notes : ''); ?></td>
						<td>
							<a href="edit/<?php echo e($contact->id); ?>">
								<button type="button" class="btn">Edit/Delete</button>
							</a>
						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			
			<?php elseif( isset($contact) ): ?>
				<tr>
					<td><?php echo e($contact->id); ?></td>
					<td><?php echo e(isset($contact->name) ? $contact->name : ''); ?></td>
					<td><?php echo e(isset($contact->phone) ? $contact->phone : ''); ?></td>
					<td><?php echo e(isset($contact->address) ? $contact->address : ''); ?></td>
					<td><?php echo e(isset($contact->email) ? $contact->email : ''); ?></td>
					<td><?php echo e(isset($contact->notes) ? $contact->notes : ''); ?></td>
					<td>
						<a href="edit/<?php echo e($contact->id); ?>">
							<button type="button" class="btn">Edit/Delete</button>
						</a>
					</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	<?php else: ?>
		<div>
			No contacts exist. Add a new contact by clicking on "Add new contact" above.
		</div>
	<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('contact.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>