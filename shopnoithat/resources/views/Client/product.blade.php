@extends('..\layouts.app1')
@section('content')
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="ghe_sofa-tab" data-toggle="tab" href="#ghe_sofa" role="tab" aria-controls="ghe_sofa" aria-selected="true">Ghế SOFA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Banan-tab" data-toggle="tab" href="#Banan" role="tab" aria-controls="Banan" aria-selected="false">Bàn ăn</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="giuong_ngu-tab" data-toggle="tab" href="#giuong_ngu" role="tab" aria-controls="giuong_ngu" aria-selected="false">Giường</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="ghe_thu_gian-tab" data-toggle="tab" href="#ghe_thu_gian" role="tab" aria-controls="ghe_thu_gian" aria-selected="false">Ghế thư giãn</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="trangtri-tab" data-toggle="tab" href="#trangtri" role="tab" aria-controls="trangtri" aria-selected="false">Đồ trang trí</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  
  <div class="tab-pane fade active" id="ghe_sofa" role="tabpanel" aria-labelledby="ghe_sofa-tab">
  <div class="row">
                   @foreach($pros1 as $product)
                        <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="{{asset('uploads')}}/{{$product->id}}.jpg" alt="" style="height:100px">
                            </div>
                          <h2><a href="{{asset('client/detail')}}/{{$product->id}}">{{$product->name}}</a></h2>
                            <div class="product-carousel-price">
                                <ins>{{number_format($product->price)}}đ</ins> <del>{{number_format($product->old_price)}}đ</del>
                            </div>  
                            
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="client/detail/{{$product->id}}">Add to cart</a>
                            </div>                       
                        </div>
                    </div>
                      @endforeach
    </div>
    </div>

  <div class="tab-pane fade" id="Banan" role="tabpanel" aria-labelledby="Banan-tab">
    <div class="row">
                    @foreach($pros2 as $product)
                        <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="{{asset('uploads')}}/{{$product->id}}.jpg" alt="" style="height:100px">
                            </div>
                        <h2><a href="{{asset('client/detail')}}/{{$product->id}}">{{$product->name}}</a></h2>
                            <div class="product-carousel-price">
                                <ins>{{number_format($product->price)}}đ</ins> <del>{{number_format($product->old_price)}}đ</del>
                            </div>  
                            
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="client/detail/{{$product->id}}">Add to cart</a>
                            </div>                       
                        </div>
                    </div>
                      @endforeach
</div>
  </div>
  <div class="tab-pane fade" id="giuong_ngu" role="tabpanel" aria-labelledby="giuong_ngu-tab">
      <div class="row">
        @foreach($pros3 as $product)
                        <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="{{asset('uploads')}}/{{$product->id}}.jpg" alt="" style="height:100px">
                            </div>
                        <h2><a href="{{asset('client/detail')}}/{{$product->id}}">{{$product->name}}</a></h2>
                            <div class="product-carousel-price">
                                <ins>{{number_format($product->price)}}đ</ins> <del>{{number_format($product->old_price)}}đ</del>
                            </div>  
                            
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="client/detail/{{$product->id}}">Add to cart</a>
                            </div>                       
                        </div>
                    </div>
                      @endforeach
</div>
  </div>
  <div class="tab-pane fade" id="ghe_thu_gian" role="tabpanel" aria-labelledby="ghe_thu_gian-tab">
      <div class="row">
        @foreach($pros4 as $product)
                        <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="{{asset('uploads')}}/{{$product->id}}.jpg" alt="" style="height:100px">
                            </div>
                        <h2><a href="{{asset('client/detail')}}/{{$product->id}}">{{$product->name}}</a></h2>
                            <div class="product-carousel-price">
                                <ins>{{number_format($product->price)}}đ</ins> <del>{{number_format($product->old_price)}}đ</del>
                            </div>  
                            
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="client/detail/{{$product->id}}">Add to cart</a>
                            </div>                       
                        </div>
                    </div>
                      @endforeach
</div>
  </div>
  <div class="tab-pane fade" id="trangtri" role="tabpanel" aria-labelledby="trangtri-tab">
      <div class="row">
        @foreach($pros4 as $product)
                        <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="{{asset('uploads')}}/{{$product->id}}.jpg" alt="" style="height:100px">
                            </div>
                       <h2><a href="{{asset('client/detail')}}/{{$product->id}}">{{$product->name}}</a></h2>
                            <div class="product-carousel-price">
                                <ins>{{number_format($product->price)}}đ</ins> <del>{{number_format($product->old_price)}}đ</del>
                            </div>  
                            
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="client/detail/{{$product->id}}">Add to cart</a>
                            </div>                       
                        </div>
                    </div>
                      @endforeach
</div>
  </div>
</div>
        
        </div>
    </div>
@endsection
