@extends('admin_dashboard')
@section('admin_content')


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">User Sl</th>
      <th scope="col">First Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($all_user as $v_user)
    <tr>
      <th scope="row">{{$loop->index +1}}</th>
      <td>{{$v_user->name}}</td>
      <td>{{$v_user->phone}}</td>
      <td>{{$v_user->email}}</td>
      <td>
        <a class="text-warning h5" href="{{url('admin/user/user-single/'.$v_user->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;
        <a class="text-danger h5" href="{{url('admin/user/delete/'.$v_user->id)}}"><i class="far fa-trash-alt"></i></a>&nbsp;&nbsp;
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection
