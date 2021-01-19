@extends('layouts.app')

@section('page-title', 'Dresses')

@section('content')
    <div class="small-container">
        <div class="dresses-container">
            @foreach ($dresses as $index => $dress)
                <div class="dress-card">
                    <h2>Dresss {{ $index+1 }}</h2>
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
