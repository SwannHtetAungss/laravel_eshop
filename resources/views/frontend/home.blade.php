@extends('layouts.frontendtemplate')
@section('title', 'Home Page')
@section('content')
    <!-- Slider Area -->
    <section class="hero-slider">
        <!-- Single Slider -->
        <div class="single-slider" style="background-image: url({{ asset('frontend/images/bags.jpg') }})">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-9 offset-lg-3 col-12">
                        <div class="text-inner">
                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <div class="hero-text">
                                        <h1><span>UP TO 50% OFF </span>E - Shopping</h1>
                                        <p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it
                                            pereri <br> odiy maboriosm.</p>
                                        <div class="button">
                                            <a href="#" class="btn">Shop Now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
    </section>
    <!--/ End Slider Area -->

    <!-- Start Small Banner  -->
    <section class="small-banner section">
        <div class="container">
            <div class="row">
                <!-- Single Banner  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="{{ asset('frontend/images/men_collection.jpeg') }}" alt="#">
                        <div class="content">
                            <p>Man's Collectons</p>
                            <h3 class="text-white">Summer travel <br> collection</h3>
                            <a href="#">Discover Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
                <!-- Single Banner  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="{{ asset('frontend/images/bag_collection.jpeg') }}" alt="#">
                        <div class="content">
                            <p>Bag Collectons</p>
                            <h3 class="text-white">Awesome Bag <br> 2020</h3>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
                <!-- Single Banner  -->
                <div class="col-lg-4 col-12">
                    <div class="single-banner tab-height">
                        <img src="{{ asset('frontend/images/girl_collection.jpg') }}" alt="#">
                        <div class="content">
                            <p>Flash Sale</p>
                            <h3>Mid Season <br> Up to <span>40%</span> Off</h3>
                            <a href="#">Discover Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
            </div>
        </div>
    </section>
    <!-- End Small Banner -->

    <!-- Start Product Area -->
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Item</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($categories as $category)
                                    @php
                                        $categoryName = str_replace(' ', '_', $category->name);
                                    @endphp
                                    <li class="nav-item"><a class="nav-link @if ($i == 1){{ 'active' }} @endif"
                                            data-toggle="tab" href="#{{ $categoryName }}"
                                            role="tab">{{ $category->name }}</a></li>
                                    @php $i++; @endphp
                                @endforeach

                                {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Woman</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Kids</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Essential</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Prices</a></li> --}}
                            </ul>
                            <!--/ End Tab Nav -->
                        </div>
                        <div class="tab-content" id="myTabContent">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($categories as $category)
                                <!-- Start Single Tab -->
                                @php
                                    $categoryName = str_replace(' ', '_', $category->name);
                                @endphp
                                <div class="tab-pane fade @if ($i == 1){{ 'show active' }} @endif" id="{{ $categoryName }}"
                                    role="tabpanel">
                                    <div class="tab-single">
                                        <div class="row">

                                            @foreach ($category->items as $item)
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                                    <x-single-product-component :item="$item">

                                                    </x-single-product-component>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Tab -->
                                @php $i++; @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Area -->

    <!-- Start Midium Banner  -->
    <section class="midium-banner">
        <div class="container">
            <div class="row">
                <!-- Single Banner  -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="{{ asset('frontend/images/men-item.jpg') }}" alt="#">
                        <div class="content">
                            <p>Man's Collectons</p>
                            <h3>Man's items <br>Up to<span> 50%</span></h3>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
                <!-- Single Banner  -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="{{ asset('frontend/images/shoe-women.jpg') }}" alt="#">
                        <div class="content">
                            <p>shoes women</p>
                            <h3>mid season <br> up to <span>70%</span></h3>
                            <a href="#" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
            </div>
        </div>
    </section>
    <!-- End Midium Banner -->

    <!-- Start Most Popular -->
    <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Hot Item</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        <!-- Start Single Product -->

                        @foreach ($allitems as $allitem)
                            <div class="single-product addtocard-item">
                                <div class="product-img">
                                    <a href="{{ route('frontend.detail', $allitem->id) }}">
                                        <img class="default-img" src="{{ asset("storage/$allitem->photo") }}"
                                            alt="550x750">
                                        <img class="hover-img" src="{{ asset("storage/$allitem->photo") }}"
                                            alt="550x750">
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" class="modal-view" data-target="#exampleModal"
                                                title="Quick View" href="#" data-id="{{ $allitem->id }}"
                                                data-name="{{ $allitem->name }}" data-price="{{ $allitem->price }}"
                                                data-discount="{{ $allitem->discount }}"
                                                data-description="{{ $allitem->description }}"
                                                data-photo="{{ $allitem->photo }}"
                                                data-codeno="{{ $allitem->codeno }}">
                                                <i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
                                                    Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to
                                                    Compare</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            {{-- <a title="Add to cart" href="#">Add to cart</a> --}}
                                            <a title="Add to cart" class="addtocartBtn text-decoration-none"
                                                data-id="<?= $allitem->id ?>" data-name="<?= $allitem->name ?>"
                                                data-price="<?= $allitem->price ?>"
                                                data-discount="<?= $allitem->discount ?>"
                                                data-photo="<?= $allitem->photo ?>" data-codeno="<?= $allitem->codeno ?>"
                                                data-description="<?= $allitem->description ?>">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="{{ route('frontend.detail', $allitem->id) }}"> {{ $allitem->name }}
                                        </a>
                                    </h3>
                                    <div class="product-price">
                                        @if ($allitem->discount)
                                            <span class="old">$ {{ $allitem->price }}</span>
                                            <span>$ {{ $allitem->discount }}</span>
                                        @else
                                            <span>$ {{ $allitem->price }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Most Popular Area -->

    <!-- Start Shop Home List  -->
    <section class="shop-home-list section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>Discount Items</h1>
                            </div>
                        </div>
                    </div>

                    <!-- Start Single List  -->
                    @foreach ($discount_items as $discount_item)
                        <div class="single-list addtocard-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="list-image overlay">
                                        <img src="{{ asset("storage/$discount_item->photo") }}" alt="#">
                                        <a title="Add to cart" class="addtocartBtn buy text-decoration-none"
                                            data-id="<?= $discount_item->id ?>" data-name="<?= $discount_item->name ?>"
                                            data-price="<?= $discount_item->price ?>"
                                            data-discount="<?= $discount_item->discount ?>"
                                            data-photo="<?= $discount_item->photo ?>"
                                            data-codeno="<?= $discount_item->codeno ?>"
                                            data-description="<?= $discount_item->description ?>">
                                            <i class="fa fa-shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 no-padding">
                                    <div class="content">
                                        <h4 class="title"><a
                                                href="{{ route('frontend.detail', $discount_item->id) }}">{{ $discount_item->name }}</a>
                                        </h4>
                                        <p class="price with-discount">
                                            @if ($discount_item->discount)
                                                ${{ $discount_item->discount }}
                                            @else
                                                ${{ $discount_item->price }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End Single List  -->

                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>Best Seller</h1>
                            </div>
                        </div>
                    </div>

                    <!-- Start Single List  -->
                    @foreach ($bestsellers as $bestseller)
                        @foreach ($allitems as $allitem)
                            @if ($allitem->id == $bestseller->item_id)
                                <div class="single-list addtocard-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="list-image overlay">
                                                <img src="{{ asset("storage/$allitem->photo") }}" alt="#">
                                                <a title="Add to cart" class="addtocartBtn buy text-decoration-none"
                                                    data-id="<?= $allitem->id ?>" data-name="<?= $allitem->name ?>"
                                                    data-price="<?= $allitem->price ?>"
                                                    data-discount="<?= $allitem->discount ?>"
                                                    data-photo="<?= $allitem->photo ?>"
                                                    data-codeno="<?= $allitem->codeno ?>"
                                                    data-description="<?= $allitem->description ?>">
                                                    <i class="fa fa-shopping-bag"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12 no-padding">
                                            <div class="content">
                                                <h5 class="title"><a
                                                        href="{{ route('frontend.detail', $allitem->id) }}">
                                                        {{ $allitem->name }} </a></h5>
                                                <p class="price with-discount">
                                                    @if ($allitem->discount)
                                                        ${{ $allitem->discount }}
                                                    @else
                                                        ${{ $allitem->price }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                    <!-- End Single List  -->

                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>Latest Items</h1>
                            </div>
                        </div>
                    </div>

                    <!-- Start Single List  -->
                    @foreach ($latest_items as $latest_item)
                        <div class="single-list addtocard-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="list-image overlay">
                                        <img src="{{ asset("storage/$latest_item->photo") }}" alt="#">
                                        <a title="Add to cart" class="addtocartBtn buy text-decoration-none"
                                            data-id="<?= $latest_item->id ?>" data-name="<?= $latest_item->name ?>"
                                            data-price="<?= $latest_item->price ?>"
                                            data-discount="<?= $latest_item->discount ?>"
                                            data-photo="<?= $latest_item->photo ?>"
                                            data-codeno="<?= $latest_item->codeno ?>"
                                            data-description="<?= $latest_item->description ?>">
                                            <i class="fa fa-shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 no-padding">
                                    <div class="content">
                                        <h5 class="title"><a
                                                href="{{ route('frontend.detail', $latest_item->id) }}">
                                                {{ $latest_item->name }} </a></h5>
                                        <p class="price with-discount">
                                            @if ($latest_item->discount)
                                                ${{ $latest_item->discount }}
                                            @else
                                                ${{ $latest_item->price }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single List  -->
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Home List  -->

    <!-- Start Cowndown Area -->
    <section class="cown-down">
        <div class="section-inner ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-12 padding-right">
                        <div class="image">
                            <img src="{{ asset('frontend/images/beautiful-dress.jpg') }}" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 padding-left">
                        <div class="content">
                            <div class="heading-block">
                                <p class="small-title">Deal of day</p>
                                <h3 class="title">Beatutyful dress for women</h3>
                                <p class="text">Suspendisse massa leo, vestibulum cursus nulla sit amet,
                                    frungilla placerat lorem. Cars fermentum, sapien. </p>
                                <h1 class="price">$1200 <s>$1890</s></h1>
                                <div class="coming-time">
                                    <div class="clearfix" data-countdown="2021/02/30"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Cowndown Area -->
@endsection
