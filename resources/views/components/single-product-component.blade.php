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
        <a data-toggle="modal" class="modal-view" data-target="#exampleModal" title="Quick View" href="#" data-id="{{$item->id}}" data-name="{{$item->name}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}" data-description="{{$item->description}}" data-photo="{{$item->photo}}" data-codeno="{{$item->codeno}}">
          <i class="ti-eye"></i><span>Quick Shop</span></a>
        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
      </div>
      <div class="product-action-2 addtocard-item">
        <a title="Add to cart" class="addtocartBtn text-decoration-none" data-id="<?=$item->id?>" data-name="<?=$item->name?>" data-price="<?=$item->price?>" data-discount="<?=$item->discount?>" data-photo="<?=$item->photo?>" data-codeno="<?=$item->codeno?>" data-description="<?=$item->description?>">Add to cart</a>
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
</div>