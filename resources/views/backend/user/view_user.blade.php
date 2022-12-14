@extends('admin.admin_master')
@section('admin')

		<div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Users Data</h4>
                  <a href="{{route('user.add')}}" style="float:right" class="btn btn-primary btn-sm">Add User</a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Group</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($allDataUser as $key => $user)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$user->usertype}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>
                          <a href="{{route('user.update', $user->id)}}" class="btn btn-primary btn-sm">Update</a>
                          <a href="{{route('user.delete', $user->id)}}" class="btn btn-primary btn-sm" id="delete">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
	<!-- js  view -->
    <script src="{{asset('backend/js/pages/data-table.js')}}"></script>
    <script src="{{asset('backend/js/pages/data-table2.js')}}"></script>