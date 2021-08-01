@extends('layouts.backendtemplate')
@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Item Edit Form</h1>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline-block">Form Example</h6>

        <a href="{{route('item.index')}}" class="btn btn-outline-info float-right">Back</a>
      </div>
      <div class="card-body">
        <form method="post" action="{{route('item.update',$item->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row mb-3">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" id="inputName" value="{{$item->name}}">
              @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputCodeno" class="col-sm-2 col-form-label">Code no.</label>
            <div class="col-sm-10">
              <input type="text" name="codeno" class="form-control" id="inputCodeno" value="{{$item->codeno}}">
              @if ($errors->has('codeno'))
                <span class="text-danger">{{ $errors->first('codeno') }}</span>
              @endif
            </div>
          </div>

          <div class="row mb-3">
              <label for="inputPrice" class="col-sm-2 col-form-label"> Price </label>
              <div class="col-sm-10">
                  <nav>
                    <div class="nav nav-tabs" id="nav-tab">
                      <a class="nav-item nav-link active" data-toggle="tab" href="#nav-price" role="tab">Unit Price</a>
                      <a class="nav-item nav-link" data-toggle="tab" href="#nav-discount" role="tab">Discount</a>
              
                    </div>
                  </nav>

                  <div class="tab-content mt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-price" role="tabpanel">
                        <input type="number" class="form-control" id="inputPrice" name="price" value="{{$item->price}}">
                        @if ($errors->has('price'))
                          <span class="text-danger">{{ $errors->first('price') }}</span>
                        @endif
                    </div>
                    <div class="tab-pane fade" id="nav-discount" role="tabpanel">
                        <input type="text" class="form-control" id="inputDiscount" name="discount" value="{{$item->discount}}">
                    </div>
                    
                  </div>
              </div>
          </div>

          <div class="row mb-3">
            <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
              <input type="text" name="description" class="form-control" id="inputDescription" value="{{$item->description}}">
              @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
              @endif
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputBrand" class="col-sm-2 col-form-label">Brand</label>
            <div class="col-sm-10">
              <select name="brand" class="form-control" id="inputBrand">
                <option>--Choose one Brand--</option>
                  @foreach($brands as $brand)
                    <option value="{{$brand->id}}" @if($brand->id==$item->brand_id) {{'selected'}} @endif>{{$brand->name}}</option>
                  @endforeach
              </select>
              @if($errors->has('brand'))
                <span class="text-danger">{{ $errors->first('brand') }}</span>
              @endif
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputSubcategory" class="col-sm-2 col-form-label">Subcategory</label>
            <div class="col-sm-10">
              <select name="subcategory" class="form-control" id="inputSubcategory">
                <option>--Choose one Subcategory--</option>
                  @foreach($subcategories as $subcategory)
                    <option value="{{$subcategory->id}}" @if($subcategory->id==$item->subcategory_id) {{'selected'}} @endif>{{$subcategory->name}}</option>
                  @endforeach
              </select>
              @if($errors->has('subcategory'))
                <span class="text-danger">{{ $errors->first('subcategory') }}</span>
              @endif
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
            <div class="col-sm-10">
              <input type="file" name="photo" class="form-control-file" id="inputPhoto">
              @if ($errors->has('photo'))
                <span class="text-danger">{{ $errors->first('photo') }}</span>
              @endif
              <img src="{{asset("storage/$item->photo")}}" alt="photo" class="w-25">
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
@endsection