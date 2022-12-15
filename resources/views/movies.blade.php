@extends('layouts.app')

@section('content')
    <section class="movie">
        <div class="container">
            <div class="row row-cols-3 pt-3">
                @foreach ($data as $item)
                    <div class="col mb-3">
                        <div class="series-card">
                            <h4 class="text-center">{{ strtoupper($item['series']) }}</h4>
                            <p>{{ $item['description'] }}</p>
                            <span>Price:{{ $item['price'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
