@extends('layouts.app')

@section('content')
<div class="card shadow-lg p-4 mx-auto" style="max-width: 600px;">
    <div class="card-body text-center">
        <h2 class="card-title mb-3">{{ $developer['name'] }}</h2>
        <h4 class="text-muted mb-3">{{ $developer['role'] }}</h4>
        <p class="mb-4">{{ $developer['bio'] }}</p>
        <a href="mailto:{{ $developer['email'] }}" class="btn btn-primary">
            Contact Me
        </a>
    </div>
</div>
@endsection
