	

<?php $__env->startSection('headSection'); ?>
<link rel="stylesheet" href="<?php echo e(asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">

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
	      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Blogs</h3>
          <a class="col-lg-offset-5 btn btn-success" href="<?php echo e(route('post.create')); ?>">Add New</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl. No</th>
                  <th>Title</th>
                  <th>Subtitle</th>
                  <th>Slug</th>
                  <th>Body</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

             <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                <tr>
                  <td><?php echo e($loop->index+1); ?></td>
                  <td><?php echo e($post->title); ?></td>
                  <td><?php echo e($post->subtitle); ?></td>
                  <td><?php echo e($post->slug); ?></td>
                  <td><?php echo $post->body; ?></td>
 <td><a href="<?php echo e(route('post.edit', $post->id)); ?>"><i class="fa fa-fw fa-edit"></i></a></td>

 <td>
  <form id="delete-form-<?php echo e($post->id); ?>" method="post" action="<?php echo e(route('post.destroy', $post->id)); ?>" style="display: none;">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('DELETE')); ?>

  </form>
  <a href="" onclick="
  if(confirm('Are you sure, you want to delete this post?'))
  {
    event.preventDefault();document.getElementById('delete-form-<?php echo e($post->id); ?>').submit();
  }
  else
  {
    event.preventDefault();}"><i class="fa fa-fw fa-trash"></i></a>
</td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Sl. No</th>
                  <th>Title</th>
                  <th>Subtitle</th>
                  <th>Slug</th>
                  <th>Body</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
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
<!-- DataTables -->
<script src="<?php echo e(asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>

<script type="text/javascript">
  
$(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })


</script>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>