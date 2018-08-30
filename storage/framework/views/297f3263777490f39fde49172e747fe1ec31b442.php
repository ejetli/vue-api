<?php $__env->startSection('title', '| Tag'); ?>

<?php $__env->startSection('content'); ?>
	<div id="app">
		<h3> Course Tags</h3>
		<tags-component></tags-component>

	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>