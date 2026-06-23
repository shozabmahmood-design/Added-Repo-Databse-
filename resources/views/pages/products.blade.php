@extends('layout.welcome')
@section('content')
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    	<!-- Inner Page Breadcrumb -->
      <section class="advance_search_menu_sectn bgc-thm2 pt20 pb0 mt70-992">
        <div class="container">
          <div class="row">
            <form action="{{ url('/products/filter') }}" method="POST" style="display:flex ">
              @csrf
              
                  <div class="col col-sm-4 col-lg-2" style="margin: 5px 10px 5px 0">
                    <div class="advance_search_style">
                        <select class="selectpicker show-tick" name="brand">
                            <option selected disabled>Select Makes</option>
                                @foreach ($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->brandName}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
             
              
                    <div class="col col-sm-4 col-lg-2" style="margin: 5px 10px 5px 0">
                        <div class="advance_search_style">
                            <select class="selectpicker show-tick" name="type">
                                <option selected disabled>Select Type</option>
                                @foreach ($types as $type)
                                    <option value="{{$type->id}}">{{$type->vehicleType}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
              
              
                    <div class="col col-sm-4 col-lg-2" style="margin: 5px 10px 5px 0">
                        <div class="advance_search_style">
                            <input type="text" class="text-center" style="background-color: #fff;
                            border: 1px solid #EAEAEA;
                            border-radius: 8px;
                            color: #5F6973; width:130px;" placeholder="Enter Name" name="model">
                        </div>
                    </div>
              
              
                <div class="col col-sm-4 col-lg-2">
                    <div class="advance_search_style" style="margin: 5px 10px 5px 0">
                      <button class="btn search_btn btn-thm" type="submit"><span class="flaticon-magnifiying-glass"></span> Search</button>
                    </div>
                </div>
              
            </form>
          </div>
        </div>
      </section>
    <section class="our-listing pt50 bgc-f9 pb30-991">
      <div class="container">
        @if(session('status'))
          <div class="alert alert-success" id="success-alert" role="alert">
            {{ session('status') }}
          </div>
        @endif
        <div class="row">
            <h3>Results: {{ count($products) }}</h3>
          
          @if (count($products) == 0)
            <h3>No Products Found</h3>
          @endif
          @foreach ($products as $product )
              
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="car-listing">
              <div class="thumb">
                  <img src="{{env('UPLOAD_URL')}}/{{$product->image}}" alt="1.jpg" style="object-fit:cover; height:200px;">
                  <div class="thmb_cntnt2">
                      <ul class="mb0">
                          <li class="list-inline-item"><a class="text-white" href="#"><span
                                      class="flaticon-eye mr3"></span>
                                  {{$product->views}}</a></li>
                          <!--<li class="list-inline-item"><a class="text-white" href="#"><span-->
                          <!--            class="flaticon-play-button mr3"></span> 3</a>-->
                          <!--</li>-->
                      </ul>
                  </div>
                  <!--<div class="thmb_cntnt3">-->
                  <!--    <ul class="mb0">-->
                  <!--        <li class="list-inline-item"><a href="#"><span-->
                  <!--                    class="flaticon-shuffle-arrows"></span></a>-->
                  <!--        </li>-->
                  <!--        <li class="list-inline-item"><a href="#"><span-->
                  <!--                    class="flaticon-heart"></span></a></li>-->
                  <!--    </ul>-->
                  <!--</div>-->
              </div>
              <div class="details">
                  <div class="wrapper">
                      {{-- <h5 class="price">{{$product->price}}</h5>  --}}
                      <h4 class="title"><a href="{{ url('/singlecar/' . $product->id) }}">{{$product->title}}</a>
                      </h4>
                  </div>
                  <div class="listing_footer">
                      <ul class="mb0">

                          <li class="list-inline-item"><a href="#"><span
                                      class="flaticon-gas-station me-2"></span>{{$product->fuel_type}}</a>
                          </li>
                          <li class="list-inline-item"><a href="#"><span
                                      class="flaticon-gear me-2"></span>{{$product->transmission}}</a>
                          </li>
                      </ul>
                  </div>
              </div>
            </div>  
          </div>
          @endforeach
      </div>
      <div class="row">
        <div class="col-lg-12">
            <div class="mbp_pagination mt30" style="li: { list-style: none; }">
                    {{$products->links()}}
            </div>
        </div>
    </div>
    </section>

    <script>
      setTimeout(function() {
        $('#danger-alert').fadeOut('fast');
        $('#success-alert').fadeOut('fast');
      }, 5000);

    </script>
@endsection