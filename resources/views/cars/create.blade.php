@extends('layout.app')
@section('pagename', 'Create')

@section('content')
    @include('includes.header')


    <div class="container">
        <form action="{{ route('cars.create') }}" method="POST">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Je hebt niet alle velden juist ingevuld..</h4>
                    @foreach ($errors->all() as $error)
                        <p style="margin:0;">- {{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="row">

                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('brand') is-invalid @enderror" value="{{ old('brand') }}" id="brand" name="brand" placeholder="brand">
                        <label for="brand">Merk</label>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}" id="type" name="type" placeholder="type">
                        <label for="type">Type</label>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('number_plate') is-invalid @enderror" value="{{ old('number_plate') }}" id="number_plate" name="number_plate" placeholder="number_plate">
                        <label for="number_plate">Kenteken</label>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('problem') is-invalid @enderror" value="{{ old('problem') }}" id="problem" name="problem" placeholder="problem">
                        <label for="problem">Probleem</label>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Probleem melden</button>
            </div>

        </form>

    </div>

@endsection
