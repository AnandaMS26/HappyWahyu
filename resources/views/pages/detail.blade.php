@extends('layouts.app')

@section('title', 'Detail Product')

@section('content')
<div class="col-md-12">    
            <div class="container detail-product">
                <div class="container col-lg-5 col-md-5 col-sm-12 col-12 foto-product">
                    <img src="{{ url('frontend/image/meat_photo.png') }}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 desc-product">
                    <h2>Boneless Prime Rib</h2>
                    <h4><a href="">Miyazakgyu Japanese Wagyu</a></h4>
                    <h5>Rp.20000/kg</h5>
                    <p>Project Discussions, important documents and get to know the news project earlier. Its easy to use and has a good Interface and comfortable with all good services.</p>
                    <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                </div>
            </div>
        </div>
@endsection