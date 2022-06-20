@extends('layout.app')
@section('pagename', 'Home')

@section('content')
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom header">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <span class="fs-4">Autorijschool Easy drive 4 all</span>
            </a>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Inloggen</button>
                <button type="button" class="btn btn-primary">Account aanmaken</button>
            </div>
        </header>
    </div>

    <div class="background-custom">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="https://rijschoolmaryann.nl/wp-content/uploads/Autorijles-rijschool-Ede-Mary-Ann.jpg" class="d-block mx-lg-auto img-fluid rounded shadow-sm" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">
                        Rijles bij de meest onderscheidende rijschool in Utrecht
                    </h1>
                    <p class="lead">
                        We staan voor echt persoonlijke aandacht, we zijn uniek in het omgaan van rij onzekerheden,
                        gecertificeerd RIS (Rijopleiding in stappen), aanbevolen door het CBR.<br/><br/>

                        In 2021 zijn wij bekroond met de titel: <strong>"Beste rijschool voor jongeren met een fysieke beperking"</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="featured-3">
        <h2 class="pb-2 border-bottom">Onze Doelstellingen</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
                    <i class="far fa-car fa-fw"></i>
                </div>
                <h2>Persoonlijke aandacht</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
                    <i class="far fa-user fa-fw"></i>
                </div>
                <h2>Rij onzekerheden</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
               </div>
            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
                    <i class="far fa-wheelchair fa-fw"></i>
                </div>
                <h2>Fysieke beperkingen</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="pb-2 border-bottom">Onze prijzen</h2>
        <div class="row row-cols-1 row-cols-md-3 mb-3 g-4 py-5">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3 text-center">
                        <h4 class="my-0 fw-normal">20 Lesuren</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title text-center">&euro; 1510,-</h1>
                        <ul class="list mt-3 mb-4">
                            <li>20 praktijkuren rijles: <strong>&euro; 1055,-</strong></li>
                            <li>Tussentijdse toets CBR: <strong>&euro; 210,-</strong></li>
                            <li>Praktijkexamen CBR: <strong>&euro; 245,-</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3 text-white bg-primary border-primary text-center">
                        <h4 class="my-0 fw-normal">25 Lesuren</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title text-center">&euro; 1780,-</h1>
                        <ul class="list mt-3 mb-4">
                            <li>20 praktijkuren rijles: <strong>&euro; 1325,-</strong></li>
                            <li>Tussentijdse toets CBR: <strong>&euro; 210,-</strong></li>
                            <li>Praktijkexamen CBR: <strong>&euro; 245,-</strong></li>
                            <li>Boek van RIS (Rijopleiding in stappen)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-center">
                        <h4 class="my-0 fw-normal">30 Lesuren</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title text-center">&euro; 2030,-</h1>
                        <ul class="list mt-3 mb-4">
                            <li>20 praktijkuren rijles: <strong>&euro; 1575,-</strong></li>
                            <li>Tussentijdse toets CBR: <strong>&euro; 210,-</strong></li>
                            <li>Praktijkexamen CBR: <strong>&euro; 245,-</strong></li>
                            <li><strong>Gratis</strong> herkansing praktijkexamen CBR</li>
                            <li>Boek van RIS (Rijopleiding in stappen)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="featured-3">
        <h2 class="pb-2 border-bottom">Onze Instructeurs</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 text-center">
            <div class="feature col">
                <div class="feature-icon-image d-inline-flex align-items-center justify-content-center img-fluid" style="background-image: url(https://randomuser.me/api/portraits/men/32.jpg);"></div>
                <h2>Qassim Kurdi</h2>
                <p>Rijinstructeur</p>
            </div>
            <div class="feature col">
                <div class="feature-icon-image d-inline-flex align-items-center justify-content-center img-fluid" style="background-image: url(https://randomuser.me/api/portraits/men/5.jpg);"></div>
                <h2>Arjan de Ruijter</h2>
                <p>Rijinstructeur</p>
            </div>
            <div class="feature col">
                <div class="feature-icon-image d-inline-flex align-items-center justify-content-center img-fluid" style="background-image: url(https://randomuser.me/api/portraits/men/18.jpg);"></div>
                <h2>Jesse Malotaux</h2>
                <p>Rijinstructeur</p>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="1050" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=Daltonlaan%20300&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="https://rijschoolmaryann.nl/Voorwaarden_Rijschool_Mary-Ann.pdf" target="_blank" class="nav-link px-2 text-muted">Algemene Voorwaarden</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Inloggen</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Account aanmaken</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 Autorijschool Easy drive 4 all</p>
        </footer>
    </div>
@endsection
