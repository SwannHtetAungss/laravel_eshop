@extends('layouts.frontendtemplate')
@section('title', 'Cart Page')
@section('content')
  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="bread-inner">
            <ul class="bread-list">
              <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
              <li class="active"><a href="blog-single.html">Cart</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumbs -->
      
  <!-- Shopping Cart -->
  <div class="shopping-cart section shoppingcart_div">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Shopping Summery -->
          <table class="table shopping-summery">
            <thead>
              <tr class="main-hading">
                <th>PRODUCT</th>
                <th>NAME</th>
                <th class="text-center">UNIT PRICE</th>
                <th class="text-center">QUANTITY</th>
                <th class="text-center">TOTAL</th> 
                <th class="text-center"><i class="ti-trash remove-icon"></i></th>
              </tr>
            </thead>
            <tbody id="shoppingcart_table">

            </tbody>
          </table>
          <!--/ End Shopping Summery -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <!-- Total Amount -->
          <div class="total-amount">
            <div class="row">
              <div class="col-lg-8 col-md-5 col-12">
                <div class="left">
                  <div class="coupon">
                    <form action="#" target="_blank">
                      <input name="Coupon" placeholder="Enter Your Coupon">
                      <button class="btn">Apply</button>
                    </form>
                  </div>
                  <div class="checkbox">
                    <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-7 col-12">
                <div class="right">
                  <ul>
                    <li>Cart Subtotal<span id="cart_total"> </span></li>
                    {{-- <li>Shipping<span>Free</span></li>
                    <li>You Save<span>$20.00</span></li>
                    <li class="last">You Pay<span>$310.00</span></li> --}}
                  </ul>
                  <div class="button5">
                    <a href="#" class="btn checkout" data-total="">Checkout</a>
                    <a href="{{route('frontend.home')}}" class="btn">Continue shopping</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/ End Total Amount -->
        </div>
      </div>
    </div>
  </div>
  <!--/ End Shopping Cart -->

  <!-- No Shopping Cart Div -->
  <div class="row mt-5 noneshoppingcart_div text-center">
    
    <div class="col-12">
      <h5 class="text-center"> There are no items in this cart </h5>
    </div>

    <div class="col-12 mt-5 ">
      <a href="{{route('frontend.home')}}" class="btn btn-warning px-3 text-white" > 
        <i class="icofont-shopping-cart"></i>
        Continue Shopping 
      </a>
    </div>

  </div>
  <!-- End of No shopping cart div -->

@endsection