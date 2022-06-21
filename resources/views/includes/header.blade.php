<header>
    <div class="px-3 py-2 bg-dark text-white mb-5">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    Autorijschool Easy Drive 4 All
                </a>

                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="{{ route('lessons.index') }}" class="nav-link {{ checkActive('lessons.index') }}">
                            <i class="far fa-car fa-fw bi d-block mx-auto mb-1"></i>
                            Overzicht Rijlessen
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('lessons.archive') }}" class="nav-link {{ checkActive('lessons.archive') }}">
                            <i class="far fa-archive fa-fw bi d-block mx-auto mb-1"></i>
                            Archief Rijlessen
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('lessons.create') }}" class="nav-link {{ checkActive('lessons.create') }}">
                            <i class="far fa-calendar-plus fa-fw bi d-block mx-auto mb-1"></i>
                            Rijles inplannen
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('cars.index') }}" class="nav-link {{ checkActive('cars.index') }}">
                            <i class="far fa-cars fa-fw bi d-block mx-auto mb-1"></i>
                            Problemen
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('cars.archive') }}" class="nav-link {{ checkActive('cars.archive') }}">
                            <i class="far fa-archive fa-fw bi d-block mx-auto mb-1"></i>
                            Problemen Archief
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
