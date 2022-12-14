@extends('admin.admin_master')
@section('admin')

		<div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Items Data</h4>
                  <a href="{{route('item.add')}}" style="float:right" class="btn btn-primary btn-sm">Add Item</a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Item</th>
                          <th>Price</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($allDataItem as $key => $items)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$items->item}}</td>
                          <td>{{$items->price}}</td>
                          <td>
                          <a href="{{route('item.update', $items->id)}}" class="btn btn-primary btn-sm">Update</a>
                          <a href="{{route('item.delete', $items->id)}}" class="btn btn-primary btn-sm" id="delete">Delete</a>
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