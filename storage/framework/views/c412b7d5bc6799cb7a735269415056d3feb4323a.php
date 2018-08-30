<?php $__env->startSection('title', '| view cmodules'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-8">
			<h1><?php echo e($cmodule->name); ?></h1>
			<p class="lead"><?php echo e($cmodule->about); ?> </p>
			<p class="lead"><?php echo e($cmodule->status); ?></p>
			<p class="lead"><?php echo e($cmodule->order); ?> </p>
			<p class="lead"><?php echo e($cmodule->course_id); ?> </p>		
			<br><br><br>
			<a class="btn btn-sm btn-success" href="<?php echo e(route('cmodules.index')); ?>">Back Cmodules</a>
		</div>

		<div class="col-md-4">
			<div class="well">
				<div class="dl-horizontal">
					<dt>Created At:</dt>
					<dd><?php echo e(date('M j, Y h:ia',strtotime($cmodule->created_at))); ?></dd>
				</div>
				<div class="dl-horizontal">
					<dt>Updated At:</dt>
					<dd><?php echo e(date('M j, Y h:ia', strtotime($cmodule->updated_at))); ?></dd>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						
						<a href="<?php echo e(route('cmodules.edit', $cmodule->id)); ?>" class="btn btn-sm btn-primary btn-block">Edit</a>
					</div> 
					<div class="col-sm-6">

						<?php echo Form::open(['route' => ['cmodules.destroy', $cmodule->id], 'method' => 'DELETE']); ?>


						
						<input type="submit" class="btn btn-sm btn-success btn-danger btn-block" value="Delete">

						<?php echo Form::close(); ?>

					</div> 
					</div>	
				</div>
			</div>
		</div>
	</div>
	


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>