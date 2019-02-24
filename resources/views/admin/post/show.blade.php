	@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

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
	      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Blogs</h3>
          <a class="col-lg-offset-5 btn btn-success" href="{{route('post.create')}}">Add New</a>

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

             @foreach($posts as $post)     
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->subtitle}}</td>
                  <td>{{$post->slug}}</td>
                  <td>{!! $post->body !!}</td>
 <td><a href="{{route('post.edit', $post->id)}}"><i class="fa fa-fw fa-edit"></i></a></td>

 <td>
  <form id="delete-form-{{$post->id}}" method="post" action="{{route('post.destroy', $post->id)}}" style="display: none;">
    {{ csrf_field() }}
    {{ method_field('DELETE')}}
  </form>
  <a href="" onclick="
  if(confirm('Are you sure, you want to delete this post?'))
  {
    event.preventDefault();document.getElementById('delete-form-{{$post->id}}').submit();
  }
  else
  {
    event.preventDefault();}"><i class="fa fa-fw fa-trash"></i></a>
</td>
                </tr>
                @endforeach
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
	@endsection

	@section('footerSection')
<!-- DataTables -->
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

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

  @endsection