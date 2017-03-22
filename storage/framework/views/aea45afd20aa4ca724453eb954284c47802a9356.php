	<?php echo $__env->make('partials.css-links', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/profile.css')); ?>">
	<style type="text/css">
		body {
			background-image: url('<?php echo e(asset('images/header-bg.jpg')); ?>');
		}
	</style>


<?php $__env->startSection('content'); ?>

	<nav>
		<div class="container">
			<img src="<?php echo e(URL::asset('images/iPOST Logo.png')); ?>" style="height:50px;">
			<a href="/"><button class="btn btn-danger">Log out</button></a>
		</div>
	</nav>

	<div class="container">

	<?php $__currentLoopData = $blogger; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


		<?php echo $__env->make('partials.modal-new-blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<aside>
			<img src="<?php echo e(URL::asset('images/profile.png')); ?>" id="pic">
			<div id="blogger-info">
				<h1> <?php echo e($user->name); ?> </h1>
				<h3> <?php echo e($user->username); ?> </h3>
			</div>

			<div>
				<button class="btn btn-primary" data-toggle="modal" data-target="#newBlogModal">Create a new blog</button>
			</div>

		</aside>

		<section id="blogs">
			<p> <?php echo e($user->blogs); ?>

			</p>
		</section>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	
<?php $__env->stopSection(); ?>

	<?php echo $__env->make('partials.js-links', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>