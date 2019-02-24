<!DOCTYPE html>
<html lang="en">
<!-- <?php $__env->startSection('head-content'); ?>
<?php echo $__env->yieldSection(); ?> -->

<head>

<?php echo $__env->make('user/layouts/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</head>


<body>

  <!-- Navigation -->
 
<?php echo $__env->make('user/layouts/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  </header>

  <!-- Main Content -->
<?php $__env->startSection('main-content'); ?>

<?php echo $__env->yieldSection(); ?>

  <!-- Footer -->
 
<?php echo $__env->make('user/layouts/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



</body>

</html>
