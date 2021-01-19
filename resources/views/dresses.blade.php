@extends('layouts.app')

@section('page-title', 'Dresses')

@section('content')
    <div class="small-container">
        <div class="dresses-container">
            @foreach ($dresses as $dress)
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
                        <li>
                            Price : {{ $dress->price }} euro
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
