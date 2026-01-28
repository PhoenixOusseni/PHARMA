@extends('layout.master2')

@section('content')

{{-- Profile Page Styles --}}
@include('pages.users.style')
@include('pages.users.modal_style')

    <div class="profile-container">
        <div class="profile-card">
            <div class="profile-header">
                <h2><i class="bi bi-person-circle"></i> Mon Profil</h2>
                <div class="profile-status">
                    État du compte : <strong>{{ $finds->statut }}</strong>
                </div>
            </div>

            <div class="profile-body">
                @if (session('success'))
                    <div class="alert-modern">
                        <i class="bi bi-check-circle"></i> {{ session('success') }}
                    </div>
                @endif
                <!-- 👤 SECTION 1 : État Civil -->
                <div class="section-card">
                    <h5 class="section-title"><i class="bi bi-person"></i> État Civil</h5>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="profile-photo-section">
                                @if ($finds->photo)
                                    <img src="{{ asset('storage') . '/' . $finds->photo }}" class="profile-photo" alt="Photo de profil">
                                @else
                                    <img src="{{ asset('assets/img/avatar.png') }}" class="profile-photo" alt="Avatar">
                                @endif
                                <br>
                                <a href="#" class="btn btn-sm btn-modern-outline mt-2" data-bs-toggle="modal" data-bs-target="#photoBackdrop">
                                    <i class="bi bi-camera"></i> {{ $finds->photo ? 'Changer ma photo' : 'Charger une photo' }}
                                </a>

                                <div class="profile-name">{{ $finds->prenom }} {{ $finds->nom }}</div>
                                @if ($finds->statut == 'Actif')
                                    <span class="profile-role">{{ $finds->Role->libelle }}</span>
                                @endif
                                <div class="profile-code">Code : <strong>{{ $finds->code }}</strong></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="info-row">
                                <div class="info-item">
                                    <strong>Nom de jeune fille</strong>
                                    <span>{{ $finds->nom_jeune_fille ?? 'Non spécifié' }}</span>
                                </div>
                                <div class="info-item">
                                    <strong>Situation matrimoniale</strong>
                                    <span>{{ $finds->situation_matrimoniale }}</span>
                                </div>
                                <div class="info-item">
                                    <strong>Date de naissance</strong>
                                    <span>{{ $finds->date_naiss }}</span>
                                </div>
                                <div class="info-item">
                                    <strong>Lieu de naissance</strong>
                                    <span>{{ $finds->lieu_naiss }}</span>
                                </div>
                                <div class="info-item">
                                    <strong>Nationalité</strong>
                                    <span>{{ $finds->nationalite }}</span>
                                </div>
                                <div class="info-item">
                                    <strong>Section</strong>
                                    <span>{{ $finds->Section->libelle }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 📍 SECTION 2 : Coordonnées géographiques -->
                <div class="section-card">
                    <h5 class="section-title"><i class="bi bi-geo-alt"></i> Coordonnées géographiques</h5>
                    <div class="info-row">
                        <div class="info-item">
                            <strong>Région ordinale</strong>
                            <span>{{ $finds->RegionOrdinal->libelle ?? 'Non spécifié' }}</span>
                        </div>
                        <div class="info-item">
                            <strong>Région</strong>
                            <span>{{ $finds->Region->libelle ?? 'Non spécifié' }}</span>
                        </div>
                        <div class="info-item">
                            <strong>Province</strong>
                            <span>{{ $finds->Province->libelle ?? 'Non spécifié' }}</span>
                        </div>
                        <div class="info-item">
                            <strong>Commune/Ville</strong>
                            <span>{{ $finds->Commune->libelle ?? 'Non spécifié' }}</span>
                        </div>
                    </div>
                </div>

                <!-- 📞 SECTION 3 : Coordonnées de contact -->
                <div class="section-card">
                    <h5 class="section-title"><i class="bi bi-telephone"></i> Coordonnées de contact</h5>
                    <div class="info-row">
                        <div class="info-item">
                            <strong>Email</strong>
                            <span>{{ $finds->email }}</span>
                        </div>
                        <div class="info-item">
                            <strong>Téléphone</strong>
                            <span>{{ $finds->telephone }}</span>
                        </div>
                        <div class="info-item">
                            <strong>Adresse permanente</strong>
                            <span>{{ $finds->adresse ?? 'Non spécifié' }}</span>
                        </div>
                        <div class="info-item">
                            <strong>Domicile</strong>
                            <span>{{ $finds->domicile ?? 'Non spécifié' }}</span>
                        </div>
                        <div class="info-item">
                            <strong>N° Matricule</strong>
                            <span>{{ $finds->matricule ?? 'Non spécifié' }}</span>
                        </div>
                        <div class="info-item">
                            <strong>Lieu d'exercice</strong>
                            <span>{{ $finds->lieu_exercice ?? 'Non spécifié' }}</span>
                        </div>
                    </div>
                </div>

                <!-- 🎓 SECTION 4 : Diplômes -->
                <div class="section-card">
                    <h5 class="section-title"><i class="bi bi-mortarboard"></i> Diplômes</h5>
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <div class="document-card">
                                <img src="{{ asset('assets/img/téléchargement.png') }}" class="document-icon" alt="Document">
                                <h6 style="color: #28a745; font-weight: 600;">Diplôme du doctorat</h6>
                                <a href="{{ asset('storage') . '/' . $finds->diplome }}" target="_blank" class="btn btn-sm btn-modern-primary mt-2">
                                    <i class="bi bi-download"></i> Télécharger
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="document-card">
                                <img src="{{ asset('assets/img/téléchargement.png') }}" class="document-icon" alt="Document">
                                <h6 style="color: #28a745; font-weight: 600;">Fichiers joints</h6>
                                <a href="{{ asset('storage') . '/' . $finds->file }}" target="_blank" class="btn btn-sm btn-modern-primary mt-2">
                                    <i class="bi bi-download"></i> Télécharger
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="info-item">
                            <strong>Date d'obtention</strong>
                            <span>{{ $finds->date_diplome }}</span>
                        </div>
                        <div class="info-item">
                            <strong>Institution</strong>
                            <span>{{ $finds->inst_delivre }}</span>
                        </div>
                        <div class="info-item">
                            <strong>Lieu de délivrance</strong>
                            <span>{{ $finds->lieu_delivrance ?? 'Non spécifié' }}</span>
                        </div>
                    </div>
                </div>

                <!-- 🎓 SECTION 5 : Autres diplômes et fonctions -->
                <div class="section-card">
                    <h5 class="section-title"><i class="bi bi-award"></i> Autres diplômes et Fonctions</h5>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                                <h6 style="color: #28a745; font-weight: 700; margin: 0;">Autres diplômes</h6>
                                <a href="#" class="btn btn-sm btn-modern-primary" data-bs-toggle="modal" data-bs-target="#addDipBackdrop">
                                    <i class="bi bi-plus-circle"></i> Ajouter
                                </a>
                            </div>
                            <table class="table table-modern">
                                <thead>
                                    <tr>
                                        <th>Date d'obtention</th>
                                        <th>Nature diplôme</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($autres_diplomes as $item)
                                        <tr>
                                            <td>{{ $item->date_diplome }}</td>
                                            <td>{{ $item->nature }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2" class="text-center" style="color: #666; font-style: italic;">
                                                Aucun autre diplôme enregistré
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                                <h6 style="color: #28a745; font-weight: 700; margin: 0;">Fonctions</h6>
                                <a href="#" class="btn btn-sm btn-modern-primary" data-bs-toggle="modal" data-bs-target="#addFoctBackdrop">
                                    <i class="bi bi-plus-circle"></i> Ajouter
                                </a>
                            </div>
                            <table class="table table-modern">
                            <table class="table table-modern">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Libellé fonction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($fonctions as $item)
                                        <tr>
                                            <td>{{ $item->date }}</td>
                                            <td>{{ $item->libelle }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2" class="text-center" style="color: #666; font-style: italic;">
                                                Aucune fonction enregistrée
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="action-section">
                    <button class="btn btn-modern-outline" data-bs-toggle="modal" data-bs-target="#editBackdrop">
                        <i class="bi bi-pencil-square"></i> Modifier mon compte
                    </button>
                    <button class="btn btn-modern-primary" data-bs-toggle="modal" data-bs-target="#cotisationUserBackdrop">
                        <i class="bi bi-wallet2"></i> Faire une cotisation
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal profile -->
    @include('pages.users.modal')
@endsection

@section('scripts')
    <style>
        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        .step-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            min-width: 80px;
        }

        .step-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #dee2e6;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .step-label {
            color: #6c757d;
            font-size: 0.875rem;
            line-height: 1.2;
            white-space: nowrap;
        }

        .step-item.active .step-circle {
            background-color: #28a745;
            color: white;
        }

        .step-item.active .step-label {
            color: #28a745;
        }
    </style>

    <script>
        function updateStepNav(step) {
            for (let i = 1; i <= 5; i++) {
                const el = document.getElementById('step-nav-' + i);
                if (el) {
                    el.classList.toggle('active', i === step);
                }
            }
        }

        function updateProgressBar(step) {
            const bar = document.getElementById('progress-bar');
            const labels = ['Étape 1 / 5', 'Étape 2 / 5', 'Étape 3 / 5', 'Étape 4 / 5', 'Étape 5 / 5'];
            const widths = ['25%', '25%', '50%', '100%'];
            bar.style.width = widths[step - 1];
            bar.innerText = labels[step - 1];
        }

        function showStep(step) {
            document.querySelectorAll('.step').forEach(el => el.classList.remove('active'));
            const stepDiv = document.getElementById('step-' + step);
            if (stepDiv) stepDiv.classList.add('active');
            updateStepNav(step);
            updateProgressBar(step);
        }

        function nextStep(step) {
            const prevStep = step - 1;
            const inputs = document.querySelectorAll(`#step-${prevStep} input[required]`);
            let valid = true;
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    input.classList.add('is-invalid');
                    valid = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            if (!valid) return;

            if (step === 5) {
                document.getElementById('recap-nom').innerText = document.querySelector('[name="nom"]').value;
                document.getElementById('recap-prenom').innerText = document.querySelector('[name="prenom"]').value;
                document.getElementById('recap-telephone').innerText = document.querySelector('[name="telephone"]').value;
                document.getElementById('recap-date_naiss').innerText = document.querySelector('[name="date_naiss"]').value;
                document.getElementById('recap-lieu_naiss').innerText = document.querySelector('[name="lieu_naiss"]').value;
                document.getElementById('recap-nationalite').innerText = document.querySelector('[name="nationalite"]')
                    .value;
            }
            showStep(step);
        }

        function prevStep(step) {
            showStep(step);
        }
        document.addEventListener('DOMContentLoaded', () => showStep(1));
    </script>
@endsection
