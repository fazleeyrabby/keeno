@extends('layouts.FrontendLayout')
@section('title','Keeno-App')
@section('content')
<!-- header -->
<div class="header">
   <div class="container">
      <div class="row">
         <div class="col-md-2">
            <img src="{{ asset('/assets/frontend_asset/images/logo.svg') }}" class="img-responsive" height="" width="100px">
         </div>
         <div class="col-md-4 search">
            <div class="input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text purple"><i class="fa fa-search" aria-hidden="true"></i></span>
               </div>
               <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
            </div>
         </div>
         <div class="col-md-6 menu-bar">
            <ul>
               <li><a href="">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;|</li>
               <li><a href="">About</a>&nbsp;&nbsp;&nbsp;&nbsp;|</li>
               <li><a href="">Shop</a>&nbsp;&nbsp;&nbsp;&nbsp;|</li>
               <li><a href="">Help</a></li>
            </ul>
            <button  type="button" class="btn btn-primary shopping-card"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Your Cart</button>
         </div>
      </div>
      <h2 class="tagline">Tagline describing your e-shop</h2>
      <br>
      <hr class="hr" />
      <!-- Card -->
      <?php 
            $categories = App\Categories::orderBy('id','DESC')->limit(3)->get();
      ?>
      <div class="row">
           @foreach($categories as $categorie)
         <div class="col-md-4">
            <div class="card" >
               <img class="card-img-top" src="{{ $categorie->image_url }}" alt="Card image" style="width:100%" height="100px">
               <div class="card-body">
                  <h4 class="card-title">{{ substr($categorie->name,0,10) }}</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      <div class="row shop-now">
         <button  type="button" class="btn btn-primary center shopping-card shop-now"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Shop Now</button>
      </div>
   </div>
</div>
<!-- content-one -->
<div class="feature-product-title">
   <h3 class="feature-product-title">Feature product</h3>
   <br>
</div>
<!-- slider -->
<!--Carousel -->
<div class="col-md-12" class="carousel">
   <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
      <!--Controls-->
      <div class="controls-top">
         <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
         <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->
      <ol class="carousel-indicators">
         <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
         <li data-target="#multi-item-example" data-slide-to="1"></li>
         <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
         <!--First slide-->
         <?php 
            $products = App\Products::join('categories', 'products.category_id', '=', 'categories.id')->take(2)->get();
         ?>
         <div class="carousel-item active">
            <div class="row">
                @foreach($products as $product)
               <div class="col-md-6">
                  <div class="card mb-2">
                     <img height="250px" class="card-img-top" src="{{ $product->images_url }}"
                        alt="Card image cap">
                     <div class="card-body" align="center">
                        <h4 class="card-title">{!! $product->name !!}</h4>
                        <p class="card-text">$ {!! $product->price !!}
                        </p>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
         <!--Second slide-->
         <?php 
            $products = App\Products::join('categories', 'products.category_id', '=', 'categories.id')->skip(2)->take(2)->get();
         ?>
         <div class="carousel-item">
            <div class="row">
                 @foreach($products as $product)
               <div class="col-md-6">
                  <div class="card mb-2">
                     <img height="250px" class="card-img-top" src="{{ $product->images_url }}"
                        alt="Card image cap">
                     <div class="card-body" align="center">
                        <h4 class="card-title">{!! $product->name !!}</h4>
                        <p class="card-text">$ {!! $product->price !!}
                        </p>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>
<hr class="hr2" />
<!-- content-two -->
<div class="col-md-12">
   <div class="row">
      <div class="col-md-6">
         <h3>Newsletter</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt 
         </p>
      </div>
      <div class="col-md-6" align="right">
         <br><br>
         <input type="" name="" placeholder="Email Address" size="57">
         <button style="padding:0px 10px 0px 10px;">subscribe</button>
      </div>
   </div>
</div>
<hr class="hr2" />
<!-- content-three -->
<div class="col-md-12">
   <div class="row">
      <?php 
         $products = App\Products::join('categories', 'products.category_id', '=', 'categories.id')->inRandomOrder()->limit(1)->get();
      ?>
      @foreach($products as $product)
      <div class="col-md-4">
         <div class="card" >
            <img class="card-img-top" src="{{ $product->images_url }}" alt="Card image" style="width:100%" height="400px">
             <div class="card-body" align="">
               <h6 class="card-title">{{ substr($product->name,0,10) }}</h6>
               <p class="card-text">$ {!! $product->price !!}
               </p>
            </div>
         </div>
      </div>
      @endforeach
      <?php 
         $products = App\Products::join('categories', 'products.category_id', '=', 'categories.id')->skip(5)->limit(2)->get();
      ?>
      @foreach($products as $product)
      <div class="col-md-4" align="" >
         <div class="card" >
            <img class="card-img-top" src="{{ $product->images_url }}" alt="Card image" style="width:100%;" height="150px">
            <div class="card-body" align="">
               <h6 class="card-title">{{ substr($product->name,0,10) }}</h6>
               <p class="card-text">$ {!! $product->price !!}
               </p>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>
<hr class="hr2" />
<!-- content-four -->
<div class="about-your-shop">
   <h1 class="feature-product-title">About Your Shop</h1>
   <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod
      tempor incididunt ut labore et .
   </p>
</div>
<hr class="hr2" />
@endsection