	@extends('admin.layouts.app')

	@section('headSection')

	<!-- Select2 -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
	@endsection

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
	<h3 class="box-title">Blog Post edit form</h3>
	</div>
@include('includes.messages')
	<!-- /.box-header -->
	<!-- form start -->
<form method="post" role="form" action="{{route('post.update', $post->id)}}">
	{{ csrf_field() }}
    {{ method_field('PATCH')}}
	<div class="box-body">

	<div class="col-lg-6">
	<div class="form-group">
	<label for="title">Title</label>
	<input type="text" name="title" value="{{$post->title}}" class="form-control" placeholder="Enter post title here...">
	</div>

	<div class="form-group">
	<label for="subtitle">Sub Title</label>
	<input type="text" name="subtitle" value="{{$post->subtitle}}" class="form-control" placeholder="Enter post title here...">
	</div>

	<div class="form-group">
	<label for="slug">Post Slug</label>
	<input type="text" name="slug" value="{{$post->slug}}" class="form-control" placeholder="Enter post title here...">
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
	<input type="checkbox" name="status" >
</label></div>
</div>
</div>
<br>
<br>

 <div class="form-group" style="margin-top: 18px;">
   <label>Select Tags</label>
   <select class="form-control select2" multiple="multiple" data-placeholder="Select a Tag"
           style="width: 100%;" name="tags[]">

 @foreach($tags as $tag)     
     <option value="{{$tag->id}}">{{$tag->name}}</option>
	@endforeach	
   </select>
 </div>

  <div class="form-group" style="margin-top: 18px;">
   <label>Select Category</label>
   <select class="form-control select2" multiple="multiple" data-placeholder="Select a Category"
           style="width: 100%;"name="categories[]">
      @foreach($categories as $category)     
     <option value="{{$category->id}}">{{$category->name}}</option>
	@endforeach	
   </select>
 </div>

</div>


	</div>
	<!-- /.box-body -->

	<div class="form-group">
	<textarea 
	style="height: 350px; border: 1px solid #dddddd; line-height: 18px;
	font-size: 14px;" name="body" class="form-control" id="editor1">{!!$post->body!!}</textarea>
</div>
	<div class="box-footer">
	<button type="submit" class="btn btn-primary">Submit</button>
	<a href="{{route('post.index')}}" class="btn btn-warning">Back</a>
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

	@section('footerSection')

	<!-- Select2 -->
  <script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
 	
<script>
  $(document).ready(function(){ 
  //Initialize Select2 Elements  
    $(".select2").select2();
    });
  </script>
	@endsection
