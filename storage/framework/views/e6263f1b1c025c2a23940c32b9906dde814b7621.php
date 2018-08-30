<?php $__env->startSection('title', '| Ceate New Post'); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Cmodules</h1>
			<hr>
			<form name="ceate" action="/cmodules"  method="post">
                <?php echo e(csrf_field()); ?>

				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" name="name" required id="name" class="form-control" placeholder="Name">
				</div>

				<div class="form-group">
					<label for="about">About:</label>
					<textarea type="text" name="about" row="5" required id="about" class="form-control" placeholder="About"></textarea>
				</div>


				<div class="form-group">
					<label for="status">Status:</label>
					<input type="text" name="status" required id="status" class="form-control" placeholder="Status">
				</div>

				<div class="form-group">
					<label for="order">Orders:</label>
					<input type="text" name="order" required id="order" class="form-control" placeholder="Orders">
				</div>

				<div class="form-group">
					<label for="course_id">Course_id:</label>
					<input type="text" name="course_id" required id="course_id" class="form-control" placeholder="Course_id">
				</div>

				<input class="btn btn-success btn-lg btn-block" type="submit" value="Create cmodules">
			</form>
		</div>
	</div>
	
		<br>
		<a class="btn btn-sm btn-success" href="<?php echo e(route('cmodules.index')); ?>">Back Cmodules</a>
		
	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>