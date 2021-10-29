{{-- <div>
    He who is contented is rich. - Laozi
</div> --}}

<div class="single-product">
    <div class="product-img">
        <a href="{{route('frontend.detail',$item->id)}}">
            <img class="default-img" src="{{asset('storage/'.$item->photo)}}" alt="#">
            <img class="hover-img" src="{{asset('storage/'.$item->photo)}}" alt="#">
        </a>
        <div class="button-head">
            <div class="product-action">
                <a data-toggle="modal" class="modal-view" data-target="#exampleModal{{$item->id}}" title="Quick View"
                    data-id="{{$item->id}}" data-name="{{$item->name}}" data-price="{{$item->price}}"
                    data-discount="{{$item->discount}}" data-description="{{$item->description}}"
                    data-photo="{{$item->photo}}" data-codeno="{{$item->codeno}}">
                    <i class="ti-eye"></i><span>Quick Shop</span></a>
                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>

            </div>
            <div class="product-action-2 addtocard-item">
                <a title="Add to cart" class="addtocartBtn text-decoration-none" data-id="<?=$item->id?>"
                    data-name="<?=$item->name?>" data-price="<?=$item->price?>" data-discount="<?=$item->discount?>"
                    data-photo="<?=$item->photo?>" data-codeno="<?=$item->codeno?>"
                    data-description="<?=$item->description?>">Add
                    to cart</a>
            </div>
        </div>
    </div>
    <div class="product-content">
        <h3><a href="{{route('frontend.detail',$item->id)}}"> {{$item->name}} </a></h3>
        <div class="product-price">
            @if($item->discount)
            <span>{{'$ '. number_format($item->discount)}}</span> &nbsp; &nbsp;
            <span class="old">{{'$ '.number_format($item->price)}}</span>
            @else
            <span>{{'$ '.number_format($item->price)}}</span>
            @endif
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close"
                            aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <!-- Product Slider -->
                            <div class="product-gallery">
                                <div class="quickview-slider-active">
                                    <div class="single-slider">
                                        <img src="#" alt="#" class="img-fluid" style="height: 100%">
                                    </div>
                                    <div class="single-slider">
                                        <img src="#" alt="#" class="img-fluid" style="height: 100%">
                                    </div>
                                    <div class="single-slider">
                                        <img src="#" alt="#" class="img-fluid" style="height: 100%">
                                    </div>
                                    <div class="single-slider">
                                        <img src="#" alt="#" class="img-fluid" style="height: 100%">
                                    </div>
                                </div>
                            </div>
                            <!-- End Product slider -->
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
                                <h3 id="item_price"> </h3>
                                <div class="quickview-peragraph mb-3">
                                    <p id="item_description"> </p>
                                </div>

                                <div class="quantity">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled"
                                                data-type="minus" data-field="quant[1]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="quant[1]" class="input-number input-qty" data-min="1"
                                            data-max="1000" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number" data-type="plus"
                                                data-field="quant[1]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </div>
                                <div class="add-to-cart addtocard-item">
                                    <a class="btn addtocartBtn">Add to cart</a>
                                    <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                    <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                                </div>
                                <div class="default-social">
                                    <h4 class="share-now">Share:</h4>
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
</div>
