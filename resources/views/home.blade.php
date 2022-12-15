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

    <section class="info">
        <div class="container">
            <div class="row row-cols-5 pt-3">
                <div class="col d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <h4>DIGITAL COMICS</h4>
                </div>
                <div class="col d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <h4>DC MERCHANDISE</h4>
                </div>
                <div class="col d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <h4>SUBSCRITPIONS</h4>
                </div>
                <div class="col d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <h4>LOCATOR</h4>
                </div>
                <div class="col d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <h4>DC POWER VISA</h4>
                </div>


            </div>
        </div>
    </section>
@endsection
