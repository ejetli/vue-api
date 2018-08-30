<?php $__env->startSection('tilte', '| Edit Cmodules'); ?>

<?php $__env->startSection('content'); ?>

		<div class="row">
		 <div class="col-md-8">
			<?php echo Form::model($cmodule, ['route' => ['cmodules.update', $cmodule->id], 'method' => 'PUT']); ?>

		
			<?php echo e(Form::label('name', 'Name:')); ?>

			<?php echo e(Form::text('name',null, ["class" => 'form-control input-lg'])); ?>

			
			<?php echo e(Form::label('about', 'About:', ['class' => 'form-spacing-top'])); ?>

			<?php echo e(Form::textarea('about', null, ["class" => 'form-control'])); ?>


			<?php echo e(Form::label('status', 'Status:', ['class' => 'form-spacing-top'])); ?>

			<?php echo e(Form::text('status',null, ["class" => 'form-control'])); ?>

			
			<?php echo e(Form::label('order', 'Order:', ['class' => 'form-spacing-top'])); ?>

			<?php echo e(Form::text('order',null, ["class" => 'form-control'])); ?>		
			
			<?php echo e(Form::label('course_id', 'Course_id:', ['class' => 'form-spacing-top'])); ?>

			<?php echo e(Form::text('course_id',null, ["class" => 'form-control'])); ?>

			

			<br>
	
			<div class="row">
					<div class="col-md-6">
						
						<a href="<?php echo e(route('cmodules.show', $cmodule->id)); ?>" class="btn btn btn-danger btn-block">Cancel</a>
					</div> 
					<div class="col-md-6">
						<input type="submit" class="btn btn-success btn-block" value="Save Changes">
						
					</div> 
				</div>				
		</div>
		

		<div class="col-md-4">
			<div class="well">
				<div class="dl-horizontal">
					<dt>Created At:</dt>
					<dd><?php echo e(date('M j, Y h:ia',strtotime($cmodule->created_at))); ?></dd>
				</div>
				<br>
				<div class="dl-horizontal">
					<dt>Updated At:</dt>
					<dd><?php echo e(date('M j, Y h:ia', strtotime($cmodule->updated_at))); ?></dd>
				</div>
				<hr>
			</div>
		</div>
		<?php echo Form::close(); ?>

	</div>
		<br>
		<a class="btn btn-sm btn-success" href="<?php echo e(route('cmodules.index')); ?>">Back Cmodules</a>
	</div>
		


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>