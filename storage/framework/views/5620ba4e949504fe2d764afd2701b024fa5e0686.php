	<?php echo $__env->make('partials.css-links', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/blogs.css')); ?>">
	<style type="text/css">
		body {
			background-image: url('<?php echo e(asset('images/header-bg.jpg')); ?>');
		}
	</style>

<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('partials.modal-sign-up', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('partials.modal-sign-in', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<nav>
		<div class="container">
			<img src="<?php echo e(URL::asset('images/iPOST Logo.png')); ?>" style="height:50px;">
			<button class="sign-up button" data-toggle="modal" data-target="#signUpModal"> Sign Up </button>
			<button class="button" data-toggle="modal" data-target="#signInModal"> Sign In </button>
		</div>
	</nav>


	<?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="blog">
		<h1> <?php echo e($blog->subject); ?> </h1>
		<hr>
		<p> <?php echo e($blog->body); ?> </p>
		<hr>
		<p> Posted by: <span><?php echo e($blog->blogger->name); ?></span>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php $__env->stopSection(); ?>

	<?php echo $__env->make('partials.js-links', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>