@extends('admin.admin_master')
@section('admin')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update User</h4>
                  <p class="card-description">
                    Form untuk memperbarui data user
                  </p>
                  <form class="forms-sample" action="{{route('user.updating', $updateData->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Group</label>
                        <select class="form-control" name="selectGroup" required>
                            <option>- Select Group -</option>
                            <option value="Admin" {{($updateData->usertype=="Admin" ? "selected" : "")}}>Admin</option>
                            <option value="User" {{($updateData->usertype=="User" ? "selected" : "")}}>User</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Username" value="{{$updateData->name}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Email" value="{{$updateData->email}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="New Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{route('user.view')}}" class="btn btn-light">Cancel</a>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
    <!-- js update -->
    <script src="{{asset('assets/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendors/select2/select2.min.js')}}"></script>

    <script src="{{asset('backend/js/file-upload.js')}}"></script>
    <script src="{{asset('backend/js/typeahead.js')}}"></script>
    <script src="{{asset('backend/js/select2.js')}}"></script>