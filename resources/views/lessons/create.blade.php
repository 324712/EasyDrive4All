@extends('layout.app')
@section('pagename', 'Create')

@section('content')
    @include('includes.header')


    <div class="container">
        <form action="{{ route('lessons.create') }}" method="POST">
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

                <div class="col-4">
                    <div class="form-floating mb-3">
                        <select class="form-select @error('lesson_type') is-invalid @enderror" id="lesson_type" name="lesson_type" aria-label="lesson_type" required>
                            <option selected disabled>Maak een keuze</option>
                            <option value="1">Gevaarherkenning</option>
                            <option value="2">Gebruik van de weg</option>
                            <option value="3">Voorrang en voor laten gaan</option>
                            <option value="4">Bijzondere wegen, weggedeelten, weggebruikers en manoeuvres</option>
                            <option value="5">Veilig rijden met het voertuig en reageren in noodsituaties</option>
                            <option value="6">Verkeerstekens en aanwijzingen</option>
                            <option value="7">Verantwoorde verkeersdeelname en milieubewust rijden</option>
                            <option value="8">Wetgeving</option>
                            <option value="9">Voertuigkennis</option>
                        </select>
                        <label for="lesson_type">Welke les?</label>
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-floating mb-3">
                        <select class="form-select @error('student_id') is-invalid @enderror" id="student_id" name="student_id" aria-label="student_id" required>
                            <option selected disabled>Maak een keuze</option>
                            <option value="1">Hannelore Bom</option>
                            <option value="2">Elise van Vuure</option>
                            <option value="3">Meghan van den Elshout</option>
                            <option value="4">Lottie Meerkerk</option>
                            <option value="5">Egbertus van den Hoven</option>
                            <option value="6">Indy Haan</option>
                        </select>
                        <label for="student_id">Welke student?</label>
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-floating mb-3">
                        <select class="form-select @error('instructor_id') is-invalid @enderror" id="instructor_id" name="instructor_id" aria-label="instructor_id" required>
                            <option selected disabled>Maak een keuze</option>
                            <option value="7">Qassim Kurdi</option>
                            <option value="8">Arjan de Ruijter</option>
                            <option value="9">Jesse Malotaux</option>
                            <option value="10">Mitchel Jansen</option>
                        </select>
                        <label for="instructor_id">Welke instructeur?</label>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('location') is-invalid @enderror" value="{{ old('location') }}" id="location" name="location" placeholder="location" required>
                        <label for="location">Locatie</label>
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}" id="date" name="date" placeholder="date" required>
                        <label for="date">Datum</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-floating mb-3">
                        <input type="time" class="form-control @error('begin_time') is-invalid @enderror" value="{{ old('begin_time') }}" id="begin_time" name="begin_time" placeholder="begin_time" required>
                        <label for="begin_time">Begin tijd</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-floating mb-3">
                        <input type="time" class="form-control @error('end_time') is-invalid @enderror" value="{{ old('end_time') }}" id="end_time" name="end_time" placeholder="end_time" required>
                        <label for="end_time">Eind tijd</label>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('information') is-invalid @enderror" value="{{ old('information') }}" id="information" name="information" placeholder="information">
                        <label for="information">Extra informatie</label>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Inplannen</button>
            </div>

        </form>

    </div>

@endsection
