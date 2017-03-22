<!DOCTYPE html>
<html>
<head>
	<title> iPost! | World's Best Blogging Site </title>

	<?php echo $__env->make('layouts.css-links', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</head>
<body>

	<?php echo $__env->yieldContent('content'); ?>

	<?php echo $__env->yieldContent('footer'); ?>

	<?php echo $__env->make('layouts.js-links', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>