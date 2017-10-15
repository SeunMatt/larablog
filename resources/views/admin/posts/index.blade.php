@extends("layouts.admin")
@section("page:styles")
 <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection  
@section("content")
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Posts
        <small>All Posts</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Posts</li>
      </ol>
      <br>
      @include("partials.admin_alerts")
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      		<div class="col-sm-12">
            <a href="{{route('admin.posts.add')}}" class="btn btn-success btn-lg">Create New Post</a>
            <br><br>
      			 <!-- /.content-wrapper -->
				<div class="box">
		            <div class="box-header">
		              <h3 class="box-title">Manage Posts</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">

                 <form id="delForm" method="POST" action="{{route('admin.posts.delete')}}">
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="" />
                 </form>

		              <table id="posts-table" class="table table-bordered table-striped">
		                <thead>
		                <tr>
		                  <th>Title</th>
		                  <th>Post</th>
                      <th>Author</th>
		                  <th>Created_at</th>
		                  <th>Published</th>
		                  <th></th>
                      <th></th>
		                </tr>
		                </thead>
		                <tbody>
		                @foreach($posts as $post)
		                <tr>
		                  <td>{{$post->title}}</td>
		                  <td>{{$post->post}}</td>
                      <td>{{$post->author}}</td>
                      <td>{{$post->created_at}}</td>
		                  <td>@if($post->published) TRUE @else FALSE @endif</td>
		                  <td><a href="{{route('admin.posts.edit', ['id' => $post->id])}}" class="btn btn-xs btn-info">EDIT</a></td>
		                  <td><a href="#" data-id="{{$post->id}}" class="btn btn-xs btn-danger del">DEL</a></td>
		                </tr>
		                @endforeach
		                </tbody>
		              </table>
		            </div>
		            <!-- /.box-body -->
		        </div>
          		<!-- /.box -->
      		</div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@section("page:scripts")
<!-- DataTables -->
<script src="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#posts-table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });


    $(document).on("click", "#posts-table td .del", function(event) {
        event.preventDefault();
        swal({
            title: "Are you sure?",
            text: "This action is not reversible!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              $("input[name='id']").val( $(this).attr("data-id"));
              document.getElementById("delForm").submit();  
              swal("Post is being Deleted...", {
                icon: "success", 
              });
            } else {
              swal("Delete Operation Cancelled!"); 
            }
          });
        
    });
  });
</script>
@endsection