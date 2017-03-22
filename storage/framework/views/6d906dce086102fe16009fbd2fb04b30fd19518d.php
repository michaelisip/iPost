<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>

	<header>
		<?php $__currentLoopData = $blogger; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<h1><?php echo e($user->name); ?></h1>
	</header>

	<form method="post" action="/post">
		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="blogger_id" value="<?php echo e($user->id); ?>">

		<label>Subject</label>
		<input type="text" name="subject">
		
		<label>Body</label>
		<textarea name="body"></textarea>

		<button>POST</button>
	</form>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html>