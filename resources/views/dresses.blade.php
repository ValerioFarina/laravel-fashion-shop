@extends('layouts.app')

@section('page-title', 'Dresses')

@section('content')
    <div class="small-container">
        <div class="dresses-container">
            @foreach ($dresses as $index => $dress)
                <a href="#" class="dress-card">
                    <div class="dress-image">
                        @if ($dress->percentage_discount != 0)
                            <span class="discount">
                                - {{ $dress->percentage_discount }} %
                            </span>
                        @endif
                        <img src="{{ asset("images/{$dress->image}.jpg") }}" alt="{{$dress->color}} dress">
                    </div>
                    <ul class="dress-info">
                        @if ($dress->percentage_discount != 0)
                            <li>
                                Original Price : {{ number_format($dress->price, 2, ",", ".") }} euro
                            </li>
                        @endif
                        <li>
                            Sale price : {{ $sale_prices[$index] }} euro
                        </li>
                        <li>
                            Color : {{ $dress->color }}
                        </li>
                        <li>
                            Size : {{ $dress->size }}
                        </li>
                    </ul>
                </a>
            @endforeach
        </div>
    </div>
@endsection
