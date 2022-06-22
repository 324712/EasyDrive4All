@extends('layout.app')
@section('pagename', 'Cars')

@section('content')
    @include('includes.header')


    <div class="container">



        @if (session()->has('success'))
            <div class="alert alert-success mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @forelse($cars as $data)
                <div class="col-sm-6">
                    <div class="card mb-3">
                        <div class="card-body h-50">
                            <h5 class="card-title truncate1">{{ $data->brand }} {{ $data->type }}</h5>
                            <p class="card-text truncate">{{ $data->number_plate }}</p>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>{{ $data->created_at }}</strong><br/>{{ $data->problem }}</li>
                            <li class="list-group-item">
                                <div class="d-grid gap-2">
                                    <a class="btn btn-success" href="{{ route('cars.publish', $data->id) }}" role="button">Terugzetten</a>
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
