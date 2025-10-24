@extends('layouts.app')

@section('content')
<!-- Header-->
<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">{{ $profile['badge'] }}</div></div>
                    <div class="fs-3 fw-light text-muted">{{ $profile['subtitle'] }}</div>
                    <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">{{ $profile['title'] }}</span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="#about">About me</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('projects.index') }}">Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <!-- Header profile picture-->
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile bg-gradient-primary-to-secondary">
                        <img class="profile-img" src="{{ asset($profile['image']) }}" alt="..." />
                        <div class="dots-1">@include('partials.dots-svg')</div>
                        <div class="dots-2">@include('partials.dots-svg')</div>
                        <div class="dots-3">@include('partials.dots-svg')</div>
                        <div class="dots-4">@include('partials.dots-svg')</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About Section-->
<section class="bg-light py-5" id="about">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p class="lead fw-light mb-4">{{ $profile['bio'] }}</p>
                    <p class="text-muted">{{ $profile['description'] }}</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href="{{ $profile['linkedin'] }}"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href="{{ $profile['github'] }}"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

