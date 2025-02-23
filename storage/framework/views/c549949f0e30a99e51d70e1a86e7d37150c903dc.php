<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make("home.partials.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
</head>
<body>
    <?php echo $__env->make("home.partials.preloader", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make("home.partials.header", ['navdata' => $navdata], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>     
    
	<?php echo $__env->make("home.partials.food", ['fooddata' => $fooddata, 'foodBg' => 'assets/images/food-bg.png'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 




    
    <?php echo $__env->make("home.partials.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make("home.partials.script", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</body>
</html>
<?php /**PATH /home/vagrant/code/hotel/resources/views/home/index.blade.php ENDPATH**/ ?>