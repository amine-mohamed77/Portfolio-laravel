@extends('layouts.app')

@section('body-class', 'bg-light')

@section('content')
<!-- Projects Section-->
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                @foreach($projects as $project)
                <!-- Project Card -->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <img class="card-img-top" src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" style="max-height: 350px; object-fit: cover;" />
                    <div class="card-body p-4">
                        <h2 class="fw-bolder mb-3">{{ $project['title'] }}</h2>
                        <p class="text-muted mb-3">{{ $project['description'] }}</p>
                        <a href="{{ route('projects.show', $project['slug']) }}" class="btn btn-primary">Show Details →</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Call to action section-->
<section class="py-5 bg-gradient-primary-to-secondary text-white">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
            <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="#!">Contact me</a>
        </div>
    </div>
</section>
@endsection
