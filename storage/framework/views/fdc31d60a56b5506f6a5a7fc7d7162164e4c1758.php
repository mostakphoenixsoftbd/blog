	

	<?php $__env->startSection('headSection'); ?>

	<!-- Select2 -->
  <link rel="stylesheet" href="<?php echo e(asset('admin/bower_components/select2/dist/css/select2.min.css')); ?>">
	<?php $__env->stopSection(); ?>

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
	<h3 class="box-title">Blog Post insert form</h3>
	</div>
<?php echo $__env->make('includes.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- /.box-header -->
	<!-- form start -->
<form method="post" role="form" action="<?php echo e(route('post.store')); ?>">
		<?php echo e(csrf_field()); ?>

	<div class="box-body">

	<div class="col-lg-6">
	<div class="form-group">
	<label for="title">Title</label>
	<input type="text" name="title" class="form-control" placeholder="Enter post title here...">
	</div>

	<div class="form-group">
	<label for="subtitle">Sub Title</label>
	<input type="text" name="subtitle" class="form-control" placeholder="Enter post title here...">
	</div>

	<div class="form-group">
	<label for="slug">Post Slug</label>
	<input type="text" name="slug" class="form-control" placeholder="Enter post title here...">
	</div>	

	</div>

<div class="col-lg-6">
	
<div class="form-group">
	<div class="pull-right">
<label for="fileinput">File input</label>
<input type="file" name="image" id="image">
</div>
<div class="pull-left">
	<div class="box-footer">
	<label>
	<input type="checkbox" name="status">&nbsp;&nbsp;&nbsp;&nbsp;publish
</label></div>
</div>
</div>
<br>
<br>

 <div class="form-group" style="margin-top: 18px;">
   <label>Select Tags</label>
   <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
           style="width: 100%;">
      <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
     <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
   </select>
 </div>

  <div class="form-group" style="margin-top: 18px;">
   <label>Select Category</label>
   <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
           style="width: 100%;">
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
     <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	

   </select>
 </div>

</div>


	</div>
	<!-- /.box-body -->
	<div class="form-group">
	<textarea 
	style="height: 350px; border: 1px solid #dddddd; line-height: 18px;
	font-size: 14px;" name="body" class="form-control" id="editor1"></textarea>
</div>
	<div class="box-footer">
	<button type="submit" class="btn btn-primary">Submit</button>
	<a href="<?php echo e(route('post.index')); ?>" class="btn btn-warning">Back</a>
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

		<?php $__env->startSection('footerSection'); ?>

	<!-- Select2 -->
  <script src="<?php echo e(asset('admin/bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>
 	
<script>
  $(document).ready(function(){ 
  //Initialize Select2 Elements  
    $(".select2").select2();
    });
  </script>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>