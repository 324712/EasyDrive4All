@extends('layout.app')
@section('pagename', 'Lessons')

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
                                    <a class="btn btn-secondary" href="{{ route('lessons.edit', $lesson->id) }}" role="button">Aanpassen</a>
                                    <a class="btn btn-warning" href="{{ route('lessons.location', $lesson->id) }}" role="button">Alternatieve ophaallocatie opgeven</a>
                                    <a class="btn btn-danger" href="{{ route('lessons.delete', $lesson->id) }}" role="button">Annuleren</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            @empty
                Er zijn momenteel geen ingeplande lessen.
            @endforelse
        </div>
    </div>

@endsection
