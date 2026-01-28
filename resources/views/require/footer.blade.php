<footer id="footer" class="bg-dark text-light">
    <!-- Main Footer Content -->
    <div class="bg-success bg-gradient bg-opacity-10 py-5">
        <div class="container">
            <div class="row g-4">
                <!-- About Section -->
                <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                        <img src="{{asset('assets/img/22_a9ad743c.jpg')}}" alt="Logo ONPBF" class="img-fluid rounded shadow-sm mb-3" style="max-height: 60px;">
                    </div>
                    <h5 class="text-success fw-bold mb-3">
                        <i class="bi bi-hospital me-2"></i>Ordre National des Pharmaciens
                    </h5>
                    <p class="text-light text-opacity-75 small">
                        L'Ordre National des Pharmaciens du Burkina Faso œuvre pour la promotion de l'excellence pharmaceutique et la protection de la santé publique.
                    </p>
                </div>

                <!-- Address Section -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-success fw-bold mb-4">
                        <i class="bi bi-geo-alt-fill me-2"></i>Notre Adresse
                    </h5>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-building text-success me-2 mt-1"></i>
                            <span class="text-light text-opacity-75 small">
                                Secteur 14, Ouagadougou<br>
                                Non loin de l'Hôpital St Camille
                            </span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-clock text-success me-2"></i>
                            <span class="text-light text-opacity-75 small">
                                Lun - Ven: 8h00 - 17h00
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-success fw-bold mb-4">
                        <i class="bi bi-telephone-fill me-2"></i>Contacts
                    </h5>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a href="tel:+22625360025" class="text-decoration-none text-light text-opacity-75 d-flex align-items-center small">
                                <i class="bi bi-phone text-success me-2"></i>
                                +226 25 36 00 25
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="mailto:pharmacienbf@gmail.com" class="text-decoration-none text-light text-opacity-75 d-flex align-items-center small">
                                <i class="bi bi-envelope text-success me-2"></i>
                                pharmacienbf@gmail.com
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="#" class="text-decoration-none text-light text-opacity-75 d-flex align-items-center small">
                                <i class="bi bi-globe text-success me-2"></i>
                                www.onpbf.bf
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links Section -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-success fw-bold mb-4">
                        <i class="bi bi-link-45deg me-2"></i>Liens Rapides
                    </h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="{{ url('/') }}" class="text-decoration-none text-light text-opacity-75 small d-flex align-items-center">
                                <i class="bi bi-chevron-right text-success me-2"></i>
                                Accueil
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#member" class="text-decoration-none text-light text-opacity-75 small d-flex align-items-center">
                                <i class="bi bi-chevron-right text-success me-2"></i>
                                Devenir membre
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('authentification') }}" class="text-decoration-none text-light text-opacity-75 small d-flex align-items-center">
                                <i class="bi bi-chevron-right text-success me-2"></i>
                                Mon compte
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-decoration-none text-light text-opacity-75 small d-flex align-items-center">
                                <i class="bi bi-chevron-right text-success me-2"></i>
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Bar -->
    <div class="bg-dark border-top border-success border-opacity-25 py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                    <p class="mb-0 text-light text-opacity-75 small">
                        &copy; {{ date('Y') }} <strong class="text-success">Ordre National des Pharmaciens du Burkina Faso</strong>. Tous droits réservés.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-success rounded-circle position-fixed bottom-0 end-0 m-4 shadow-lg d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; z-index: 1000;" title="Retour en haut">
        <i class="bi bi-arrow-up fs-5"></i>
    </a>
</footer>

<script>
    // Back to top button functionality
    document.addEventListener('DOMContentLoaded', function() {
        const backToTopBtn = document.querySelector('.btn.position-fixed');

        if (backToTopBtn) {
            // Show/hide button on scroll
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    backToTopBtn.style.display = 'flex';
                } else {
                    backToTopBtn.style.display = 'none';
                }
            });

            // Initial state
            backToTopBtn.style.display = 'none';

            // Smooth scroll to top
            backToTopBtn.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    });
</script>
