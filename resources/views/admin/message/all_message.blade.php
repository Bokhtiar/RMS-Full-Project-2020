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
                  <th>Message</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                  @foreach($all_message as $v_message)
                    <tr>
                      <td>{{$loop->index +1}}</td>
                      <td>{{$v_message->name}}</td>
                      <td>{{$v_message->email}} </td>
                      <td>{{$v_message->message}} </td>
                      <td>
                        <a class="text-danger h5" href="{{url('admin/delete-message/'.$v_message->id)}}"><i class="far fa-trash-alt"></i></a>
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
