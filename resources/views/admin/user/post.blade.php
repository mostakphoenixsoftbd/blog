	@extends('admin.layouts.app')

	@section('main-content')
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
	<!-- /.box-header -->
	<!-- form start -->
	<form method="post" role="form" action="#">
	<div class="box-body">

	<div class="col-lg-6">
	<div class="form-group">
	<label for="exampleInputEmail1">Title</label>
	<input type="text" name="title" class="form-control" placeholder="Enter post title here...">
	</div>

	<div class="form-group">
	<label for="exampleInputEmail1">Sub Title</label>
	<input type="text" name="subtitle" class="form-control" placeholder="Enter post title here...">
	</div>

	<div class="form-group">
	<label for="exampleInputEmail1">Post Slug</label>
	<input type="text" name="slug" class="form-control" placeholder="Enter post title here...">
	</div>	

	</div>

<div class="col-lg-6">
	
<div class="form-group">
<label for="exampleInputFile">File input</label>
<input type="file" name="image" class="form-control" id="exampleInputFile">
</div>
<br>
<br>
<div class="form-group">
<div class="checkbox form-control">
	<div class="box-footer">
	<label>
	<input type="checkbox" name="status"> publish
	</label></div>
	</div>
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
	@endsection