@extends('layouts.app')

@section('page-title', 'Dresses')

@section('content')
    <div class="small-container">
        <div class="dresses-container">
            @foreach ($dresses as $index => $dress)
                <div class="dress-card">
                    <div class="dress_image">
                        <img src="{{ asset("images/{$dress->image}.jpg") }}" alt="{{$dress->color}} dress">
                    </div>
                    <ul>
                        <li>
                            Color : {{ $dress->color }}
                        </li>
                        <li>
                            Size : {{ $dress->size }}
                        </li>
                            Original Price : {{ $dress->price }} euro
                        </li>
                        <li>
                            Discount : {{ $dress->percentage_discount }} %
                        </li>
                        <li>
                            Sale price : {{ $sale_prices[$index] }} euro
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
