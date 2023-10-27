@extends('umum.temp_umum.index')

@section('content')
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/logo.png') }}" class="d-block w-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/logo.png') }}" class="d-block w-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/logo.png') }}" class="d-block w-50" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">

    </div>
@endsection
