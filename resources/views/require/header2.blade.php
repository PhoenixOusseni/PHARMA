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
    <nav class="navbar navbar-expand-xl navbar-light bg-white shadow-sm py-2">
        <div class="container">
            <a href="{{ url('dashboard') }}" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('assets/img/22_a9ad743c.jpg') }}" alt="Logo ONPBF" class="img-fluid rounded shadow-sm" style="max-height: 65px;">
            </a>

            <button class="navbar-toggler border-0 shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-xl-0 gap-1">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link fw-semibold px-3 py-2 rounded-3 text-dark">
                            <i class="bi bi-house-door me-1"></i> Accueil
                        </a>
                    </li>
                    @if (Auth::user()->Role->id == 2 || Auth::user()->Role->id == 3 || Auth::user()->Role->id == 4)
                        <li class="nav-item">
                            <a href="{{ route('admin') }}" class="nav-link fw-semibold px-3 py-2 rounded-3 text-dark">
                                <i class="bi bi-gear me-1"></i> Administration
                            </a>
                        </li>
                    @endif

                    @if (Auth::user()->statut == 'En cours')
                        <li class="nav-item">
                            <a href="{{ route('errors_404') }}" class="nav-link fw-semibold px-3 py-2 rounded-3 text-dark">
                                <i class="bi bi-credit-card me-1"></i> Mes cotisations
                            </a>
                        </li>
                    @endif

                    @if (Auth::user()->statut == 'Actif')
                        <li class="nav-item">
                            <a href="{{ route('mes_cotisations') }}" class="nav-link fw-semibold px-3 py-2 rounded-3 text-dark">
                                <i class="bi bi-credit-card me-1"></i> Mes cotisations
                            </a>
                        </li>
                    @endif
                </ul>

                <!-- User Dropdown -->
                <div class="dropdown">
                    <button class="btn btn-outline-success shadow-sm px-3 py-2 rounded-pill fw-semibold d-flex align-items-center gap-2 dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-5"></i>
                        <span class="d-none d-lg-inline">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2 py-2" aria-labelledby="userDropdown">
                        <li>
                            <a href="{{ route('compte') }}" class="dropdown-item px-3 py-2 rounded-3">
                                <i class="bi bi-person me-2 text-success"></i> Mon profil
                            </a>
                        </li>
                        <li><hr class="dropdown-divider my-2"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item px-3 py-2 rounded-3 text-danger">
                                    <i class="bi bi-box-arrow-right me-2"></i> {{ __('Se déconnecter') }}
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
