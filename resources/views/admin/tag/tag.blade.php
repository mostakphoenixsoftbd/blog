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
	<h3 class="box-title">Blog Tag insert form</h3>
	</div>
	@include('includes.messages')
	<!-- /.box-header -->
	<!-- form start -->
	<form method="post" role="form" action="{{route('tag.store')}}">
		{{ csrf_field() }}
	<div class="box-body">

	<div class="col-lg-offset-3 col-lg-6">
	<div class="form-group">
	<label for="name">Tag Title</label>
	<input type="text" name="name" class="form-control" placeholder="Enter tag title here...">
	</div>

	<div class="form-group">
	<label for="slug">Tag Slug</label>
	<input type="text" name="slug" class="form-control" placeholder="Enter slug here...">
	</div>	

<div class="form-group">
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{route('tag.index')}}" class="btn btn-warning">Back</a>
</div>
	</div>




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