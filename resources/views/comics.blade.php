@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2 my-3">
                    <div class="card" style="width: 100%; height:300px">
                        <img style="height: 200px;" src="{{ $comic['thumb'] }}" class="card-img-top"
                            alt="{{ $comic['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic['title'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
