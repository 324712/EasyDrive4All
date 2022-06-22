@extends('layout.app')
@section('pagename', 'Archief')

@section('content')
    @include('includes.header')


    <div class="container">



        @if (session()->has('success'))
            <div class="alert alert-success mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @forelse($lessons as $lesson)
                <div class="col-sm-4">
                    <div class="card mb-3">
                        <div class="card-body h-50">
                            <h5 class="card-title truncate1">{{ $lesson->lessonType->name }}</h5>
                            <p class="card-text truncate">{{ $lesson->lessonType->description }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Datum</strong>: {{ $lesson->date }}</li>
                            <li class="list-group-item"><strong>Tijd:</strong> {{ $lesson->begin_time }} tot {{ $lesson->end_time }}</li>
                            <li class="list-group-item"><strong>Student:</strong> {{ $lesson->student->fullname }}</li>
                            <li class="list-group-item"><strong>Instructeur:</strong> {{ $lesson->instructor->fullname }}</li>
                            <li class="list-group-item"><strong>Ophaallocatie:</strong> {{ $lesson->location }}</li>
                            <li class="list-group-item">
                                <div class="d-grid gap-2">
                                    <a class="btn btn-success" href="{{ route('lessons.publish', $lesson->id) }}" role="button">Actief maken</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            @empty
                Er zijn momenteel geen lessen in het archief.
            @endforelse
        </div>
    </div>

@endsection
