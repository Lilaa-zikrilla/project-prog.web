@extends('admin.admin_master')
@section('admin')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Book</h4>
                  <p class="card-description">
                    Form untuk menambahkan data buku
                  </p>
                  <form class="forms-sample" action="{{route('book.query')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputTitle">Title</label>
                      <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAuthor">Author</label>
                      <input type="text" class="form-control" name="author" required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{route('book.view')}}" class="btn btn-light">Cancel</a>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
	<!-- js add -->
    <script src="{{asset('assets/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendors/select2/select2.min.js')}}"></script>

    <script src="{{asset('backend/js/file-upload.js')}}"></script>
    <script src="{{asset('backend/js/typeahead.js')}}"></script>
    <script src="{{asset('backend/js/select2.js')}}"></script>