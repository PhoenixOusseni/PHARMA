@extends('layout.master')

@section('caroussel')
    <style>
        .hero {
            position: relative;
            background-image: url('assets/img/bd-gestionmenbre.jpg');
            background-size: cover;
            background-position: center;
            height: 85vh;
            min-height: 500px;
            color: white;
            margin: 0;
            padding: 0;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.671);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding: 2rem;
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
        }
    </style>

    <div class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <div class="welcome position-relative">
                <h3 class="text-center text-light" style="font-size: 38px;">ORDRE NATIONAL DES PHARMACIENS DU BURKINA FASO
                    (ONPBF)</h3>
                <p class="text-center">Plateforme de gestion des procédure administratives et des membres</p>
            </div>
            <div class="d-flex justify-content-between mt-5">
                <button type="button" class="btn btn-success p-3"
                    onclick="window.location.href='{{ route('inscription') }}'" style="width: 46%">
                    <i class="bi bi-person-plus"></i>&nbsp; S'inscrire à l'ordre
                </button>
                <button type="button" class="btn btn-success p-3"
                    onclick="window.location.href='{{ route('verify_page') }}'" style="width: 46%">
                    <i class="bi bi-currency-dollar"></i>&nbsp; Payer ma cotisation
                </button>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- About Section -->
    <section id="member" class="py-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6 position-relative align-self-start">
                    <img src="assets/img/9ae41482.jpg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6">
                    <h3 class="text-success fw-bold mb-4">
                        <i class="bi bi-question-circle me-2"></i>Comment devenir membre ?
                    </h3>
                    <div class="mb-4">
                        <p class="text-muted">
                            Une demande manuscrite adressée à monsieur le Président du conseil régional
                            de l'Ordre de la région dans laquelle il se propose d'exercer.
                        </p>
                    </div>

                    <div class="card border-success border-opacity-25 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-success mb-3">
                                <i class="bi bi-file-earmark-text me-2"></i>Pièces requises
                            </h5>
                            <ul class="list-unstyled">
                                <li class="mb-2 d-flex align-items-start">
                                    <span class="badge bg-success rounded-circle me-3 mt-1" style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;">1</span>
                                    <span>Un extrait d'acte de naissance</span>
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <span class="badge bg-success rounded-circle me-3 mt-1" style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;">2</span>
                                    <span>Un extrait d'un casier judiciaire datant de moins de trois mois</span>
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <span class="badge bg-success rounded-circle me-3 mt-1" style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;">3</span>
                                    <span>Une copie légalisée du diplôme de pharmacien ou l'attestation de diplôme de docteur en pharmacie</span>
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <span class="badge bg-success rounded-circle me-3 mt-1" style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;">4</span>
                                    <span>Un certificat de nationalité</span>
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <span class="badge bg-success rounded-circle me-3 mt-1" style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;">5</span>
                                    <span>Un certificat d'aptitude médical</span>
                                </li>
                            </ul>

                            <div class="alert alert-danger d-flex align-items-start mt-4 mb-0" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2 fs-5"></i>
                                <div>
                                    <strong>NB :</strong> Pour les pharmaciens de nationalités étrangères, il faudra ajouter l'attestation de radiation et la lettre d'introduction de l'Ordre d'origine.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
@endsection
