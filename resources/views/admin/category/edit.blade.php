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
	<h3 class="box-title">Category Edit form</h3>
	</div>
@include('includes.messages')
	<!-- /.box-header -->
	<!-- form start -->
<form method="post" role="form" action="{{route('category.update', $category->id)}}">
	{{ csrf_field() }}
    {{ method_field('PATCH')}}
	<div class="box-body">

	<div class="col-lg-6">
	<div class="form-group">
	<label for="title">Category Name</label>
	<input type="text" name="name" value="{{$category->name}}" class="form-control" placeholder="Enter category title here...">
	</div>

	<div class="form-group">
	<label for="slug">Category Slug</label>
	<input type="text" name="slug" value="{{$category->slug}}" class="form-control" placeholder="Enter category slug here...">
	</div>	

	</div>

<div class="col-lg-6">
	
</div>


	</div>
	<!-- /.box-body -->
	<div class="box-footer">
	<button type="submit" class="btn btn-primary">Submit</button>
	<a href="{{route('category.index')}}" class="btn btn-warning">Back</a>
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