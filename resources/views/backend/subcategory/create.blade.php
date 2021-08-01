@extends('layouts.backendtemplate')
@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Subcategory Create Form</h1>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline-block">Form Example</h6>

        <a href="{{route('subcategory.index')}}" class="btn btn-outline-info float-right">Back</a>
      </div>
      <div class="card-body">
        <form method="post" action="{{route('subcategory.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="row mb-3">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" id="inputName">
              @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
              <select name="category" class="form-control" id="inputCategory">
                  <option>--Choose one Category--</option>
                  @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
              </select> 
              @if($errors->has('category'))
                <span class="text-danger">{{ $errors->first('category') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection