<?php $__env->startSection('title', '| All Cmodules'); ?>

<?php $__env->startSection('content'); ?>
	
	<div class="row">
		<div class="col-md-9">
			<h1>All cmodules</h1>
		</div>
		
		<div class="col-md-3">
			<a href="<?php echo e(route('cmodules.create')); ?>" class="btn btn-sm btn-block btn-primary btn-h1-spacing">Create New cmodule</a>
		</div>	

		<div class="col-md-12">
			<hr>
		</div>	

	</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>id</th>
						<th>Name</th>
						<th>About</th>
						<th>Status</th>
						<th>Order</th>
						<th>course_id</th>
						<th>...</th>
					</thead>

					<tbody>
						<?php $__currentLoopData = $cmodule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmodules): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<th><?php echo e($cmodules->id); ?></th>
							<th><?php echo e($cmodules->name); ?></th>
							<th><?php echo e(substr($cmodules->about, 0, 50)); ?><?php echo e(strlen($cmodules->about) > 50 ? "..." : ""); ?></th>
							<th><?php echo e($cmodules->status); ?></th>
							<th><?php echo e($cmodules->order); ?></th>
							<th><?php echo e($cmodules->course_id); ?></th>
							<th>
								<a href="<?php echo e(route('cmodules.show', $cmodules->id)); ?>" class="btn btn-info btn-sm">view</a> <a href="<?php echo e(route('cmodules.edit', $cmodules->id)); ?>" class="btn btn-info btn-sm">Edit</a>
							</th>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
				<div class="text-center">
					<?php echo $cmodule->links();; ?>

				</div>
			</div>
		</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>