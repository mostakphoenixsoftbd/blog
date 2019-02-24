	

	<?php $__env->startSection('main-content'); ?>
	<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	<h1>
	Text Editors
	<small>Advanced form element</small>
	</h1>
	<ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li><a href="#">Forms</a></li>
	<li class="active">Editors</li>
	</ol>
	</section>

	<!-- Main content -->
	<section class="content">
	<div class="row">
	<div class="col-md-12">
	<!-- /.box -->
	<div class="box box-primary">
	<div class="box-header with-border">
	<h3 class="box-title">tag Edit form</h3>
	</div>
<?php echo $__env->make('includes.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- /.box-header -->
	<!-- form start -->
<form method="post" role="form" action="<?php echo e(route('tag.update', $tag->id)); ?>">
	<?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PATCH')); ?>

	<div class="box-body">

	<div class="col-lg-6">
	<div class="form-group">
	<label for="title">tag Name</label>
	<input type="text" name="name" value="<?php echo e($tag->name); ?>" class="form-control" placeholder="Enter tag title here...">
	</div>

	<div class="form-group">
	<label for="slug">tag Slug</label>
	<input type="text" name="slug" value="<?php echo e($tag->slug); ?>" class="form-control" placeholder="Enter tag slug here...">
	</div>	

	</div>

<div class="col-lg-6">
	
</div>


	</div>
	<!-- /.box-body -->
	<div class="box-footer">
	<button type="submit" class="btn btn-primary">Submit</button>
	<a href="<?php echo e(route('tag.index')); ?>" class="btn btn-warning">Back</a>
	</div>
	</form>
	</div>



	</div>
	<!-- /.col-->
	</div>
	<!-- ./row -->
	</section>
	<!-- /.content -->
	</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>