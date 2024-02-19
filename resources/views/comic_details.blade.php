@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $single_comic['thumb'] }}" class="card-img-top" alt="{{ $single_comic['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $single_comic['title'] }}</h5>
                        <p class="card-text">{{ $single_comic['description'] }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Best Price:{{ $single_comic['price'] }}</li>
                        <li class="list-group-item">series: {{ $single_comic['series'] }}</li>
                        <li class="list-group-item">type: {{ $single_comic['type'] }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
