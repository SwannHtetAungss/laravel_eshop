@extends('layouts.backendtemplate')
@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Item List</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline-block">DataTables Example</h6>
        <a href="{{route('item.create')}}" class="btn btn-outline-info float-right">New</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Actions</th>
              </tr>
            </tfoot>
            <tbody>
              @php 
                $i=1;
              @endphp
              @foreach($items as $item)
              <tr>
                <td>{{$i++}}</td>
                <td>
                  <div>
                      <img src="{{asset("storage/$item->photo")}}" alt="Photo" class="w-25 img-fluid d-inline">
                      <h5 class="text-dark mb-0 font-16 font-weight-medium d-inline-block">
                        {{$item->codeno}}
                      </h5> <br>
                      <span class="d-inline-block text-truncate" style="max-width: 300px;">
                        {{$item->description}}
                      </span>
                  </div>
                </td>
                <td>{{$item->brand->name}}</td>
                <td>
                  @if($item->discount)
                    {{$item->discount}} MMK <br>
                    <strike>{{$item->price}} MMK</strike>
                  @else
                    {{$item->price}} MMK
                  @endif
                </td>
                <td>
                  <a href="{{route('item.edit',$item->id)}}" class="btn btn-warning btn-sm">Edit</a>
                  <a href="#" data-id="{{route('item.destroy',$item->id)}}" class="btn btn-danger btn-sm deletebtn">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->

  <div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" action="" id="deleteModalForm">
          @csrf
          @method('DELETE')
          <div class="modal-header">
            <h4 class="modal-title">Are you sure to delete?</h4>
          </div>
          <div class="modal-footer">
            <input type="submit" name="btnsubmit" class="btn btn-danger" value="Delete">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.deletebtn').click(function(){
        var id = $(this).data('id');
        // console.log(id);
        $('#deleteModalForm').attr('action',id);
        $('#deleteModal').modal('show');
      })
    })
  </script>
@endsection