@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('projects.index') }}" class="btn btn-primary mb-4">&larr; Back to Projects</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow-lg" style="max-width: 900px; margin: 0 auto;">
                <img src="{{ asset($project['image']) }}" class="card-img-top" alt="{{ $project['title'] }}" style="max-height: 400px; object-fit: cover; width: 100%;">
                <div class="card-body" class="card-body mb-4">

                    <h1 class="card-title display-4 fw-bold mb-4">{{ $project['title'] }}</h1>

                    <h5 class="mt-4 mb-3">Project Description</h5>
                    <p class="card-text">{{ $project['description'] }}</p>

                    @if(isset($project['features']))
                    <h5 class="mt-4 mb-3">Key Features</h5>
                    <ul class="list-group list-group-flush mb-4">
                        @foreach($project['features'] as $feature)
                        <li class="list-group-item">{{ $feature }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <div class="mt-4">
                        <h5 class="mb-3">Project Links</h5>
                        <div class="d-flex gap-3">
                            <a href="{{ $project['github'] }}" class="btn btn-dark btn-lg" target="_blank">
                                <i class="bi bi-github"></i> View on GitHub
                            </a>
                            <a href="{{ $project['demo'] }}" class="btn btn-primary btn-lg ml-3" target="_blank">
                                <i class="bi bi-box-arrow-up-right"></i> Live Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
