@extends('admin.admin_master')
@section('admin')

		<div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Books Data</h4>
                  <a href="{{route('book.add')}}" style="float:right" class="btn btn-primary btn-sm">Add Book</a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Title</th>
                          <th>Author</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($allDataBook as $key => $books)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$books->title}}</td>
                          <td>{{$books->author}}</td>
                          <td>
                          <a href="{{route('book.update', $books->id)}}" class="btn btn-primary btn-sm">Update</a>
                          <a href="{{route('book.delete', $books->id)}}" class="btn btn-primary btn-sm" id="delete">Delete</a>
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