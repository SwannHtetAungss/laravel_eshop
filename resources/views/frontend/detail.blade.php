@extends('layouts.frontendtemplate')
@section('title', 'Detail Page')
@section('content')
  <!-- Breadcrumbs -->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="bread-inner">
              <ul class="bread-list">
                <li><a href="{{route('frontend.home')}}">Home<i class="ti-arrow-right"></i></a></li>
                <li class="active"><a href="#" class="disabled">Item Detail</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->
    
    <!-- Product Style -->
    <section class="product-area shop-sidebar shop section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-12">
            <div class="shop-sidebar">
              <!-- Single Widget -->
              <div class="single-widget category">
                <img src="{{asset('storage/'.$item->photo)}}" class="img-fluid">
                {{-- <h3 class="title">Categories</h3>
                <ul class="categor-list">
                  <li><a href="#">T-shirts</a></li>
                  <li><a href="#">jacket</a></li>
                  <li><a href="#">jeans</a></li>
                  <li><a href="#">sweatshirts</a></li>
                  <li><a href="#">trousers</a></li>
                  <li><a href="#">kitwears</a></li>
                  <li><a href="#">accessories</a></li> --}}
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-9 col-md-8 col-12">
            <div class="row">
              <div class="col-12">
                <!-- Shop Top -->
                <div class="shop-top">
                  <div class="shop-shorter">
                    <div class="single-shorter">
                      <h3>{{$item->name}}</h3>
                      <div class="quickview-content">
                          <h2 id="item_name"></h2>
                          <div class="quickview-ratting-review">
                              <div class="quickview-ratting-wrap">
                                  <div class="quickview-ratting">
                                      <i class="yellow fa fa-star"></i>
                                      <i class="yellow fa fa-star"></i>
                                      <i class="yellow fa fa-star"></i>
                                      <i class="yellow fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                  </div>
                                  <a href="#"> (1 customer review)</a>
                              </div>
                              <div class="quickview-stock">
                                  <span><i class="fa fa-check-circle-o"></i> in stock</span>
                              </div>
                          </div>
                          {{-- <h3> {{$item->price}} </h3> --}}
                          <div class="quickview-peragraph mb-3">
                            @if($item->discount)
                              <p> {{$item->discount}} MMK</p>
                              <strike> {{$item->price}} MMK</strike>                     
                            @else
                              <p> {{$item->price}} MMK</p>
                            @endif
                          </div>
                          <div class="quickview-peragraph mb-3">
                              <p> {{$item->description}} </p>
                          </div>

                          <div class="quantity">
                            <!-- Input Order -->
                            <div class="input-group">
                              <div class="button minus">
                                <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                  <i class="ti-minus"></i>
                                </button>
                              </div>
                              <input type="text" name="quant[1]" class="input-number input-qty"  data-min="1" data-max="1000" value="1">
                              <div class="button plus">
                                <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                  <i class="ti-plus"></i>
                                </button>
                              </div>
                            </div>
                            <!--/ End Input Order -->
                          </div>
                          <div class="add-to-cart addtocard-item">
                            <a href="#" class="btn addtocartBtn" data-id="<?=$item->id?>" data-name="<?=$item->name?>" data-price="<?=$item->price?>" data-discount="<?=$item->discount?>" data-photo="<?=$item->photo?>" data-codeno="<?=$item->codeno?>" data-description="<?=$item->description?>" data-multi="multi">Add to cart</a>
                            <a href="#" class="btn min"><i class="ti-heart"></i></a>
                            <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                          </div>
                          <div class="default-social">
                            <h4 class="share-now">Share:</h4>
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                          </div>
                        </div>
                    </div>
                    {{-- <div class="single-shorter">
                      <label>Sort By :</label>
                      <select>
                        <option selected="selected">Name</option>
                        <option>Price</option>
                        <option>Size</option>
                      </select>
                    </div> --}}
                  </div>
                  {{-- <ul class="view-mode">
                    <li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
                    <li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
                  </ul> --}}
                </div>
                <!--/ End Shop Top -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ End Product Style 1  -->
@endsection