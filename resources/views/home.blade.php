@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2>@lang('main.Products')</h2>

        <div class="row">

            @foreach ($products as $product)

                <div class="col-4">
                    <div class="card ">
                        <img class="card-img-top" src="{{ asset('1.jfif') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{$product->name}}</h4>
                            <p class="card-text">{{$product->description}}</p>
                            <p class="card-text">{{$product->price}}</p>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('cart', $product->id, __('main.set_lang')) }}" class="card-link">@lang('main.Add to cart')</a>
                        </div>
                    </div>
                </div>

            @endforeach



        </div>
    </div>
@endsection
