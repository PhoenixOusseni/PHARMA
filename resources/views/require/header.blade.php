
<header id="header" class="sticky-top shadow-lg">
    <!-- Topbar with Green Gradient -->
    <div class="bg-success bg-gradient py-1 border-bottom border-light border-opacity-25">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-md-start">
                        <a href="mailto:pharmacienbf@gmail.com" class="text-white text-decoration-none d-flex align-items-center gap-2 small">
                            <i class="bi bi-envelope-fill fs-6"></i>
                            <span class="fw-medium">pharmacienbf@gmail.com</span>
                        </a>
                        <div class="text-white d-flex align-items-center gap-2 small">
                            <i class="bi bi-telephone-fill fs-6"></i>
                            <span class="fw-medium">+226 25 36 00 25</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-none d-md-block">
                    <div class="d-flex gap-2 justify-content-end">
                        <a href="#" class="btn btn-sm btn-light btn-outline-light bg-white bg-opacity-10 border-0 rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Twitter">
                            <i class="bi bi-twitter-x text-white"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light btn-outline-light bg-white bg-opacity-10 border-0 rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Facebook">
                            <i class="bi bi-facebook text-white"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light btn-outline-light bg-white bg-opacity-10 border-0 rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Instagram">
                            <i class="bi bi-instagram text-white"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light btn-outline-light bg-white bg-opacity-10 border-0 rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="LinkedIn">
                            <i class="bi bi-linkedin text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-xl navbar-light bg-white shadow-sm py-1">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                <img src="{{asset('assets/img/22_a9ad743c.jpg')}}" alt="Logo ONPBF" class="img-fluid rounded shadow-sm" style="max-height: 65px;">
            </a>

            <button class="navbar-toggler border-0 shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-xl-0 gap-1">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link active fw-semibold px-3 py-2 rounded-3 bg-success bg-opacity-10 text-success">
                            <i class="bi bi-house-door me-1"></i> Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#member" class="nav-link fw-semibold px-3 py-2 rounded-3 text-dark">
                            <i class="bi bi-person-plus me-1"></i> Comment devenir membre
                        </a>
                    </li>
                </ul>

                <a href="{{ route('authentification') }}" class="btn btn-success shadow-sm px-4 py-2 rounded-pill fw-semibold d-flex align-items-center gap-2">
                    <i class="bi bi-person-circle fs-5"></i>
                    <span>Mon compte</span>
                </a>
            </div>
        </div>
    </nav>
</header>
