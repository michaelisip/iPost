	<?php echo $__env->make('partials.css-links', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/home.css')); ?>">
	<style type="text/css">
		.header-img {
			background-image: url("<?php echo e(URL::asset('/images/header-bg.jpg')); ?>");
		}

		.sect-img {
			background-image: url("<?php echo e(URL::asset('/images/bg.jpg')); ?>");
	}
</style>
<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('partials.modal-sign-up', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('partials.modal-sign-in', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div>
		<div class="visit">
			<a href="/blogs">View blogs as guess <span class="glyphicon glyphicon-forward" aria-hidden="true"></span></a>
		</div>
		<section class="header-text">
			<h1> Welcome to iPOST! </h1>
			<p>Express your yourself around the World <br>
			Create your account then share your thoughts and opinions.
			</p>
			<button class="sign-up button" data-toggle="modal" data-target="#signUpModal"> Sign Up </button>
			<button class="button" data-toggle="modal" data-target="#signInModal"> Sign In </button>
		</section>
		<div class="header-img"></div>
	</div>

	<div>
		<section class="dev">
			<img src="<?php echo e(URL::asset('/images/mj.jpg')); ?>" alt="..." class="img-rounded">
			<div class="dev-info">
				<h2>Michael John Isip</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</section>
		<div class="sect-img"></div>
	</div>
	<div class="contact">
		<h1> Contact me </h1>
		<div class="contact-links">
			<a href="#"><img src="<?php echo e(URL::asset('/images/fb.png')); ?>"></a>
			<a href="#"><img src="<?php echo e(URL::asset('/images/google.png')); ?>"></a>
			<a href="#"><img src="<?php echo e(URL::asset('/images/twitter.png')); ?>"></a>
			<a href="#"><img src="<?php echo e(URL::asset('/images/instagram.png')); ?>"></a>
		</div>
	</div>
	<div>
		<div class="info container">
			<img src="<?php echo e(URL::asset('images/iPOST Logo.png')); ?>">
			<p> Have you ever felt that urge to let your anger out? Express your feelings without someone knowing about it? The times where the stress is too much for you. Guess what. iPOST! is your friend! With iPOST! you can express your thoughts and privacy you ever dreamt of. Blog all you want, then read your previous blogs and even delete them. Developed by Michael John Isip, it serves as the finals project in Web Application II.
			</p>
		</div>
	</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
	<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

	<?php echo $__env->make('partials.js-links', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>