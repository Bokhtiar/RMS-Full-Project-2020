@extends('admin_dashboard')
@section('admin_content')



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title font-weight-bold">Seen All Message List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Message Sl</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Notification</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                  @foreach($all_notification as $v_notification)
                    <tr>
                      <td>{{$loop->index +1}}</td>
                      <td>{{$v_notification->name}}</td>
                      <td>{{$v_notification->email}} </td>
                      <td>{{$v_notification->notification}}</td>
                      <td>
                      @if($v_notification->done==0)
                        <a href="{{route('admin.Recipe.recipe-view')}}"><span class="bg-danger">Pending</span></a>
                      @else
                        <a href="{{route('admin.Recipe.recipe-view')}}"><span class="bg-success">Active</span></a>
                      @endif
                      </td>
                      <td>
                        <a class="text-danger h5" href="{{url('admin/delete-notification/'.$v_notification->id)}}"><i class="far fa-trash-alt"></i>d</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>




@endsection
