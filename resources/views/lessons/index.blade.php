@extends('layout.app')
@section('pagename', 'Lessons')

@section('content')
    @forelse($lessons as $lesson)
        <p><strong>Lestype:</strong> {{ $lesson->lessonType->name }}</p>
        <p><strong>Lestype info:</strong> {{ $lesson->lessonType->description }}</p>
        <p><strong>Instructeur:</strong> {{ $lesson->instructor->fullname }}</p>
        <p><strong>Student:</strong> {{ $lesson->student->fullname }}</p>
        <p><strong>Resterende lesuren:</strong> {{ $lesson->student->lessons }}</p>
        <p><strong>Ophaallocatie:</strong> {{ $lesson->location }}</p>
        <p><strong>Datum:</strong> {{ $lesson->date }}</p>
        <p><strong>Begintijd:</strong> {{ $lesson->begin_time }}</p>
        <p><strong>Eindtijd:</strong> {{ $lesson->end_time }}</p>
        <p><strong>Informatie:</strong> {{ $lesson->information }}</p>
    @empty
        Er zijn momenteel geen ingeplande lessen.
    @endforelse
@endsection
