@extends('layouts.app')

@section('content')
    <section class="movie">
        <div class="container">
            <div class="row row-cols-3 pt-3">
                @foreach ($data as $item)
                    <div class="col mb-3">
                        <div class="series-card">
                            <h4 class="text-center">{{ strtoupper($item['series']) }}</h4>
                            <p class="text-center">Sale date: {{ $item['sale_date'] }}</p>
                            <p class="text-center">Type: {{ $item['type'] }}</p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
