@extends('layouts.app')

@section('content')
    <section class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </section>

    <section class="series">
        <div class="container">
            <div class="row row-cols-6 pt-3">
                @foreach ($data as $item)
                    <div class="col mb-3">
                        <div class="series-card">
                            <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                            <h4 class="text-center">{{ strtoupper($item['series']) }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
