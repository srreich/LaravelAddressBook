<?php echo e(csrf_field()); ?>

<div>
	<label for="name">Name:
		<input type="text" name="name" id="name">
	</label>
</div>
<div>
	<label for="phone">Phone: 
		<input type="tel" name="phone" id="phone">
	</label>
</div>
<div>
	<label for="email">Email: 
		<input type="email" name="email" id="email">
	</label>
</div>
<div>
	<label for="address">Address: 
		<input type="text" name="address" id="address">
	</label>
</div>
<div>
	<label for="notes">Notes:
		<textarea name="notes" class="form-control" id="notes"></textarea>
	</label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
