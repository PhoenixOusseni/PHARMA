@extends('layout.master')

@section('content')

    {{-- Registration Page Styles --}}
    @include('pages.auth.style')
    <div class="registration-container">
        <div class="registration-card">
            <!-- Header -->
            <div class="registration-header">
                <h2><i class="bi bi-person-plus-fill me-2"></i>Créer un compte</h2>
                <p>Rejoignez l'Ordre National des Pharmaciens du Burkina Faso</p>
            </div>

            <div class="registration-body">
                <!-- Étapes visuelles -->
                <div class="steps-container">
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="step-item flex-fill" id="step-nav-1">
                            <div class="step-circle">1</div>
                            <small class="step-label">Etat Civil</small>
                        </div>
                        <div class="step-item flex-fill" id="step-nav-2">
                            <div class="step-circle">2</div>
                            <small class="step-label">Adresse</small>
                        </div>
                        <div class="step-item flex-fill" id="step-nav-3">
                            <div class="step-circle">3</div>
                            <small class="step-label">Diplôme</small>
                        </div>
                        <div class="step-item flex-fill" id="step-nav-4">
                            <div class="step-circle">4</div>
                            <small class="step-label">Résumé</small>
                        </div>
                        <div class="step-item flex-fill" id="step-nav-5">
                            <div class="step-circle">5</div>
                            <small class="step-label">Paiement</small>
                        </div>
                    </div>
                </div>

                <!-- Barre de progression -->
                <div class="progress">
                    <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20"
                        aria-valuemin="0" aria-valuemax="100">
                        Étape 1 / 5
                    </div>
                </div>

                <!-- Formulaire -->
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- Étape 1 -->
                    <div class="required-note">
                        <em><i class="bi bi-info-circle me-2"></i>Les champs avec étoiles (*) sont obligatoires !</em>
                    </div>

                    <div id="step-1" class="step active">
                        <input type="text" class="form-control" name="role_id" value="1" hidden>
                        <input type="text" class="form-control" name="statut" value="En cours" hidden>

                        <div class="section-title">
                            <h5><i class="bi bi-shield-lock me-2"></i>Informations de connexion</h5>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="exemple@email.com"
                                    required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Mot de passe<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Confirmer mot de passe<span class="text-danger">*</span></label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control" placeholder="••••••••" required>
                            </div>
                        </div>

                        <div class="section-title">
                            <h5><i class="bi bi-geo-alt me-2"></i>Localisation</h5>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Région ordinale<span class="text-danger">*</span></label>
                                <select name="region_ordinal_id" id="region_ordinale" class="form-select" required>
                                    <option value="" disabled selected>Sélectionner une région ordinale</option>
                                    @foreach (App\Models\RegionOrdinal::all() as $item)
                                        <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Région<span class="text-danger">*</span></label>
                                <select name="region_id" id="region" class="form-select" required>
                                    <option value="" disabled selected>Sélectionner une région</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Province<span class="text-danger">*</span></label>
                                <select name="province_id" id="province" class="form-select" required>
                                    <option value="" disabled selected>Sélectionner une province</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Ville<span class="text-danger">*</span></label>
                                <select name="commune_id" id="commune" class="form-select" required>
                                    <option value="" disabled selected>Sélectionner une ville</option>
                                </select>
                            </div>
                        </div>

                        <div class="section-title">
                            <h5><i class="bi bi-person me-2"></i>Identité</h5>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nom<span class="text-danger">*</span></label>
                                <input type="text" name="nom" class="form-control" placeholder="Entrez votre nom"
                                    required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Prénom(s)<span class="text-danger">*</span></label>
                                <input type="text" name="prenom" class="form-control"
                                    placeholder="Entrez votre(vos) prénom(s)" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nom de jeune fille</label>
                                <input type="text" name="nom_jeune_fille" class="form-control"
                                    placeholder="Optionnel">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date de naissance <span class="text-danger">*</span></label>
                                <input type="date" id="dateNaissance" name="date_naiss" class="form-control"
                                    required>
                                <div id="dateNaissanceError"
                                    style="color:#ef4444; display:none; margin-top:5px; font-size:13px;">
                                    <i class="bi bi-exclamation-circle me-1"></i>Vous devez avoir au moins 25 ans.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Lieu de naissance<span class="text-danger">*</span></label>
                                <input type="text" name="lieu_naiss" class="form-control"
                                    placeholder="Ville/Village de naissance" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nationalité<span class="text-danger">*</span></label>
                                <input type="text" name="nationalite" class="form-control" placeholder="Burkinabè"
                                    required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Situation Matrimoniale <span class="text-danger">*</span></label>
                            <div class="radio-group">
                                <label class="radio-option">
                                    Marié(e)
                                    <input type="radio" name="situation_matrimoniale" value="Marié">
                                    <span class="checkmark"></span>
                                </label>

                                <label class="radio-option">
                                    Veuf(ve)
                                    <input type="radio" name="situation_matrimoniale" value="Veuf(ve)">
                                    <span class="checkmark"></span>
                                </label>

                                <label class="radio-option">
                                    Célibataire
                                    <input type="radio" name="situation_matrimoniale" value="Célibataire">
                                    <span class="checkmark"></span>
                                </label>

                                <label class="radio-option">
                                    Divorcé(e)
                                    <input type="radio" name="situation_matrimoniale" value="Divorcé(e)">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="button" class="btn-navigation btn-next" onclick="nextStep(2)">
                                Suivant <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Étape 2 -->
                    <div id="step-2" class="step">
                        <div class="section-title">
                            <h5><i class="bi bi-house-door me-2"></i>Coordonnées</h5>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Adresse Permanente</label>
                                <input type="text" name="adresse" class="form-control"
                                    placeholder="Secteur, quartier...">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Domicile</label>
                                <input type="text" name="domicile" class="form-control"
                                    placeholder="Lieu de résidence actuel">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Téléphone <span class="text-danger">*</span></label>
                                <input type="text" id="telephone" name="telephone" class="form-control"
                                    placeholder="+226 XX XX XX XX" required oninput="validatePhone()">
                                <div class="invalid-feedback">Veuillez entrer un numéro valide (8 à 15 chiffres).</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">N° Matricule<span class="text-danger"><em> (Pour les
                                            fonctionnaires)</em></span></label>
                                <input type="text" name="matricule" class="form-control"
                                    placeholder="Matricule fonctionnaire">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn-navigation btn-prev" onclick="prevStep(1)">
                                <i class="bi bi-arrow-left"></i> Précédent
                            </button>
                            <button type="button" class="btn-navigation btn-next" onclick="nextStep(3)">
                                Suivant <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Étape 3 -->
                    <div id="step-3" class="step">
                        <div class="section-title">
                            <h5><i class="bi bi-mortarboard me-2"></i>Formation et Diplômes</h5>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Diplôme<span class="text-danger">* <em>(Format
                                            PDF)</em></span></label>
                                <input type="file" name="diplome" class="form-control" accept=".pdf" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date d'obtention<span class="text-danger">*</span></label>
                                <input type="date" name="date_diplome" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Institution ayant délivré<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="inst_delivre" class="form-control"
                                    placeholder="Nom de l'université/institut" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Lieu de délivrance</label>
                                <input type="text" name="lieu_delivrance" class="form-control"
                                    placeholder="Ville, Pays">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Section</label>
                                <select name="section_id" class="form-select">
                                    <option value="">Sélectionner une section</option>
                                    @foreach (App\Models\Section::all() as $item)
                                        <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Pièces jointes<span class="text-danger">* <em>(Format
                                            PDF)</em></span></label>
                                <input type="file" name="file" class="form-control" accept=".pdf" required>
                            </div>
                        </div>

                        <div class="alert-info-custom">
                            <strong><i class="bi bi-info-circle me-2"></i>Pièces requises :</strong>
                            <ul class="mb-0 mt-2">
                                <li>Un extrait d'acte de naissance</li>
                                <li>Un extrait d'un casier judiciaire datant de moins de trois mois</li>
                                <li>Une copie légalisée du diplôme de pharmacien ou l'attestation de diplôme de docteur en
                                    pharmacie</li>
                                <li>Un certificat de nationalité</li>
                                <li>Un certificat d'aptitude médical</li>
                            </ul>
                            <p class="text-danger mt-2 mb-0">
                                <strong>Note :</strong> <em>Les pièces jointes doivent être au format PDF et ne pas dépasser
                                    5 Mo.</em>
                            </p>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn-navigation btn-prev" onclick="prevStep(2)">
                                <i class="bi bi-arrow-left"></i> Précédent
                            </button>
                            <button type="button" class="btn-navigation btn-next" onclick="nextStep(4)">
                                Suivant <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Étape 4 - Récapitulatif -->
                    <div id="step-4" class="step">
                        <div class="section-title mb-4">
                            <h5><i class="bi bi-file-text me-2"></i>Récapitulatif de votre inscription</h5>
                        </div>

                        <div class="recap-card">
                            <h6><i class="bi bi-person-badge me-2"></i>Informations personnelles</h6>
                            <div class="recap-item">
                                <span class="recap-label">Nom :</span>
                                <span class="recap-value" id="recap-nom"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Prénom(s) :</span>
                                <span class="recap-value" id="recap-prenom"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Nom de jeune fille :</span>
                                <span class="recap-value" id="recap-nom_jeune_fille"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Date de naissance :</span>
                                <span class="recap-value" id="recap-date_naiss"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Lieu de naissance :</span>
                                <span class="recap-value" id="recap-lieu_naiss"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Nationalité :</span>
                                <span class="recap-value" id="recap-nationalite"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Situation matrimoniale :</span>
                                <span class="recap-value" id="recap-situation_matrimoniale"></span>
                            </div>
                        </div>

                        <div class="recap-card">
                            <h6><i class="bi bi-telephone me-2"></i>Contact et localisation</h6>
                            <div class="recap-item">
                                <span class="recap-label">Email :</span>
                                <span class="recap-value" id="recap-email"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Téléphone :</span>
                                <span class="recap-value" id="recap-telephone"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Adresse :</span>
                                <span class="recap-value" id="recap-adresse"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Domicile :</span>
                                <span class="recap-value" id="recap-domicile"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Région ordinale :</span>
                                <span class="recap-value" id="recap-region_ordinal_id"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Région :</span>
                                <span class="recap-value" id="recap-region_id"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Province :</span>
                                <span class="recap-value" id="recap-province_id"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Commune :</span>
                                <span class="recap-value" id="recap-commune_id"></span>
                            </div>
                        </div>

                        <div class="recap-card">
                            <h6><i class="bi bi-mortarboard me-2"></i>Formation et exercice</h6>
                            <div class="recap-item">
                                <span class="recap-label">Date diplôme :</span>
                                <span class="recap-value" id="recap-date_diplome"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Institution :</span>
                                <span class="recap-value" id="recap-inst_delivre"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Lieu de délivrance :</span>
                                <span class="recap-value" id="recap-lieu_delivrance"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Section :</span>
                                <span class="recap-value" id="recap-section_id"></span>
                            </div>
                            <div class="recap-item">
                                <span class="recap-label">Matricule :</span>
                                <span class="recap-value" id="recap-matricule"></span>
                            </div>
                        </div>

                        <div class="alert-info-custom mt-4">
                            <p class="mb-2"><strong><i class="bi bi-exclamation-circle me-2"></i>Important :</strong>
                            </p>
                            <p class="mb-2"><em>Veuillez vérifier attentivement toutes les informations ci-dessus avant
                                    de continuer.</em></p>
                            <p class="mb-0"><strong>Note :</strong> <em>Votre inscription sera examinée par
                                    l'administration et vous recevrez une notification par email une fois votre compte
                                    activé.</em></p>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn-navigation btn-prev" onclick="prevStep(3)">
                                <i class="bi bi-arrow-left"></i> Précédent
                            </button>
                            <button type="button" class="btn-navigation btn-next" onclick="nextStep(5)">
                                Passer au paiement <i class="bi bi-credit-card"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Étape 5 - Paiement -->
                    <div id="step-5" class="step">
                        <div class="section-title">
                            <h5><i class="bi bi-credit-card me-2"></i>Paiement de l'inscription</h5>
                        </div>

                        <div class="alert-info-custom mb-4">
                            <p class="mb-0"><strong><i class="bi bi-clock me-2"></i>Délai de traitement :</strong> 2
                                jours ouvrables à compter de l'heure de paiement.</p>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="recap-card">
                                    <h6 class="mb-3"><i class="bi bi-cash-stack me-2"></i>Informations de paiement</h6>
                                    <div class="mb-3">
                                        <label class="form-label">Code OTP <span class="text-danger">*</span></label>
                                        <input type="number" id="code_otp" name="code_otp" class="form-control"
                                            placeholder="Entrez le code OTP reçu">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Numéro ayant servi pour le paiement <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control" type="number" id="numero_demande"
                                            name="numero_demande" placeholder="Ex: 70123456">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="recap-card text-center">
                                    <h6 class="mb-3"><i class="bi bi-phone me-2"></i>Opérateur Mobile Money</h6>
                                    <div class="mb-3">
                                        <img src="{{ asset('assets/img/orange_money.png') }}" alt="Orange Money"
                                            class="img-fluid" style="max-width: 200px;">
                                    </div>
                                    <div class="alert-info-custom">
                                        <p class="mb-0"><strong>Pour générer le code OTP, composez :</strong></p>
                                        <h4 class="mt-2 mb-0" style="color: #0284c7;">*144*4*146*15000#</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn-navigation btn-prev" onclick="prevStep(4)">
                                <i class="bi bi-arrow-left"></i> Précédent
                            </button>
                            <button type="submit" class="btn-navigation btn-submit">
                                <i class="bi bi-check-circle me-2"></i>Finaliser l'inscription
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
            /* pour un bon espacement */
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
            background-color: #198754;
            color: white;
        }

        .step-item.active .step-label {
            color: #198754;
        }
    </style>

    <script>
        function updateStepNav(step) {
            for (let i = 1; i <= 5; i++) {
                const el = document.getElementById('step-nav-' + i);
                if (el) {
                    el.classList.toggle('active', i === step); // active uniquement pour l'étape courante
                }
            }
        }

        function updateProgressBar(step) {
            const bar = document.getElementById('progress-bar');
            const labels = ['Étape 1 / 5', 'Étape 2 / 5', 'Étape 3 / 5', 'Étape 4 / 5',
                'Étape 5 / 5'
            ]; // Met à jour pour 5 étapes
            const widths = ['15%', '40%', '65%', '85%', '100%']; // Met à jour pour 5 étapes
            bar.style.width = widths[step - 1]; // Met à jour pour 5 étapes
            bar.innerText = labels[step - 1]; // Met à jour pour 5 étapes
        }

        function showStep(step) {
            document.querySelectorAll('.step').forEach(el => el.classList.remove('active'));
            const stepDiv = document.getElementById('step-' + step);
            if (stepDiv) stepDiv.classList.add('active');
            updateStepNav(step);
            updateProgressBar(step);
        }

        function nextStep1(step) {
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

            if (step === 4) {
                document.getElementById('recap-nom').innerText = document.querySelector('[name="nom"]').value;
                document.getElementById('recap-prenom').innerText = document.querySelector('[name="prenom"]').value;
                document.getElementById('recap-telephone').innerText = document.querySelector('[name="telephone"]').value;
                document.getElementById('recap-date_naiss').innerText = document.querySelector('[name="date_naiss"]').value;
                document.getElementById('recap-lieu_naiss').innerText = document.querySelector('[name="lieu_naiss"]').value;
                document.getElementById('recap-nationalite').innerText = document.querySelector('[name="nationalite"]')
                    .value;
                document.getElementById('recap-email').innerText = document.querySelector('[name="email"]').value;
                document.getElementById('recap-adresse').innerText = document.querySelector('[name="adresse"]').value;
                document.getElementById('recap-domicile').innerText = document.querySelector('[name="domicile"]').value;
                document.getElementById('recap-region_ordinal_id').innerText = document.querySelector(
                    '[name="region_ordinal_id"] option:checked').textContent;
                document.getElementById('recap-region_id').innerText = document.querySelector(
                    '[name="region_id"] option:checked').textContent;
                document.getElementById('recap-province_id').innerText = document.querySelector(
                    '[name="province_id"] option:checked').textContent;
                document.getElementById('recap-commune_id').innerText = document.querySelector(
                    '[name="commune_id"] option:checked').textContent;
                document.getElementById('recap-section_id').innerText = document.querySelector(
                    '[name="section_id"] option:checked').textContent;
                // Ajouter d'autres champs récapitulatifs si nécessaire
            }

            showStep(step);
        }

        function passwordsMatch() {
            const pwd = document.querySelector('[name="password"]');
            const pwd2 = document.querySelector('[name="password_confirmation"]');
            const msg = document.getElementById('pwd-msg'); // <div id="pwd-msg" ...>

            // Adapte les règles si besoin (longueur min, etc.)
            const ok = pwd && pwd2 && pwd.value.trim() !== '' && pwd.value === pwd2.value && pwd.value.length >= 8;

            if (!ok) {
                if (msg) msg.classList.remove('d-none');
                pwd?.classList.add('is-invalid');
                pwd2?.classList.add('is-invalid');
            } else {
                if (msg) msg.classList.add('d-none');
                pwd?.classList.remove('is-invalid');
                pwd2?.classList.remove('is-invalid');
            }
            return ok;
        }

        function nextStep(step) {
            const prevStep = step - 1;

            // Validation générique des champs requis du step courant
            const inputs = document.querySelectorAll(
                `#step-${prevStep} input[required], #step-${prevStep} select[required], #step-${prevStep} textarea[required]`
            );
            let valid = true;
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    input.classList.add('is-invalid');
                    valid = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            // ✅ Contrôle spécifique mots de passe si on QUITTE l'étape 1
            if (prevStep === 1) {
                if (!passwordsMatch() || !validateDateNaissance()) {
                    valid = false;
                }
            }

            // Vérification spécifique du téléphone au Step 2
            if (prevStep === 2 && !validatePhone()) {
                valid = false;
            }

            if (!valid) return;

            // Ton récap quand on arrive à l'étape 4
            if (step === 4) {
                const getVal = (selector, fallback = '') => document.querySelector(selector)?.value ?? fallback;
                const getText = (selector, fallback = '') => document.querySelector(selector)?.textContent ?? fallback;

                document.getElementById('recap-nom').innerText = getVal('[name="nom"]');
                document.getElementById('recap-prenom').innerText = getVal('[name="prenom"]');
                document.getElementById('recap-telephone').innerText = getVal('[name="telephone"]');
                document.getElementById('recap-date_naiss').innerText = getVal('[name="date_naiss"]');
                document.getElementById('recap-lieu_naiss').innerText = getVal('[name="lieu_naiss"]');
                document.getElementById('recap-nationalite').innerText = getVal('[name="nationalite"]');
                document.getElementById('recap-email').innerText = getVal('[name="email"]');
                document.getElementById('recap-adresse').innerText = getVal('[name="adresse"]');
                document.getElementById('recap-domicile').innerText = getVal('[name="domicile"]');
                document.getElementById('recap-region_ordinal_id').innerText = getText(
                    '[name="region_ordinal_id"] option:checked');
                document.getElementById('recap-region_id').innerText = getText('[name="region_id"] option:checked');
                document.getElementById('recap-province_id').innerText = getText('[name="province_id"] option:checked');
                document.getElementById('recap-commune_id').innerText = getText('[name="commune_id"] option:checked');
                document.getElementById('recap-section_id').innerText = getText('[name="section_id"] option:checked');
                // ... ajoute les autres si besoin
            }

            showStep(step);
        }

        // (optionnel) validation live pendant la saisie
        document.addEventListener('DOMContentLoaded', () => {
            const pwd = document.querySelector('[name="password"]');
            const pwd2 = document.querySelector('[name="password_confirmation"]');
            if (pwd && pwd2) {
                pwd.addEventListener('input', passwordsMatch);
                pwd2.addEventListener('input', passwordsMatch);
            }
        });

        function validatePhone() {
            const telInput = document.getElementById("telephone");
            const telValue = telInput.value.trim();
            const telRegex = /^[0-9]{8,15}$/; // entre 8 et 15 chiffres

            if (!telRegex.test(telValue)) {
                telInput.classList.add("is-invalid");
                return false;
            } else {
                telInput.classList.remove("is-invalid");
                return true;
            }
        }


        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('telephone').addEventListener('input', validatePhone);
        });

        function validateDateNaissance() {
            const dateInput = document.getElementById("dateNaissance");
            const dateValue = dateInput.value.trim();

            if (!dateValue) {
                // Champ vide → invalide
                dateInput.classList.add("is-invalid");
                return false;
            }

            const dateNaissance = new Date(dateValue);
            if (isNaN(dateNaissance.getTime())) {
                // Date invalide
                dateInput.classList.add("is-invalid");
                return false;
            }

            const today = new Date();
            let age = today.getFullYear() - dateNaissance.getFullYear();
            const m = today.getMonth() - dateNaissance.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < dateNaissance.getDate())) {
                age--;
            }

            if (age < 25) {
                dateInput.classList.add("is-invalid");
                return false;
            } else {
                dateInput.classList.remove("is-invalid");
                return true;
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('dateNaissance').addEventListener('input', validateDateNaissance);
        });


        function prevStep(step) {
            showStep(step);
        }
        document.addEventListener('DOMContentLoaded', () => showStep(1));
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const regionOrdinale = document.getElementById('region_ordinale');
            const region = document.getElementById('region');
            const province = document.getElementById('province');
            const commune = document.getElementById('commune');

            regionOrdinale.addEventListener('change', function() {
                fetch(`/regions/${this.value}`)
                    .then(res => res.json())
                    .then(data => {
                        region.innerHTML = '<option value="">Sélectionner une région</option>';
                        province.innerHTML = '<option value="">Sélectionner une province</option>';
                        commune.innerHTML = '<option value="">Sélectionner une commune</option>';
                        data.forEach(item => {
                            region.innerHTML +=
                                `<option value="${item.id}">${item.libelle}</option>`;
                        });
                    });
            });

            region.addEventListener('change', function() {
                fetch(`/provinces/${this.value}`)
                    .then(res => res.json())
                    .then(data => {
                        province.innerHTML = '<option value="">Sélectionner une province</option>';
                        commune.innerHTML = '<option value="">Sélectionner une commune</option>';
                        data.forEach(item => {
                            province.innerHTML +=
                                `<option value="${item.id}">${item.libelle}</option>`;
                        });
                    });
            });

            province.addEventListener('change', function() {
                fetch(`/communes/${this.value}`)
                    .then(res => res.json())
                    .then(data => {
                        commune.innerHTML = '<option value="">Sélectionner une commune</option>';
                        data.forEach(item => {
                            commune.innerHTML +=
                                `<option value="${item.id}">${item.libelle}</option>`;
                        });
                    });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dateNaissanceInput = document.getElementById('dateNaissance');
            const errorDiv = document.getElementById('dateNaissanceError');

            function verifierAge() {
                const dateNaissance = new Date(dateNaissanceInput.value);
                if (isNaN(dateNaissance.getTime())) {
                    // Date vide ou invalide => pas d'erreur visible
                    errorDiv.style.display = 'none';
                    dateNaissanceInput.setCustomValidity('');
                    return;
                }

                const today = new Date();
                let age = today.getFullYear() - dateNaissance.getFullYear();
                const m = today.getMonth() - dateNaissance.getMonth();
                if (m < 0 || (m === 0 && today.getDate() < dateNaissance.getDate())) {
                    age--;
                }

                if (age < 25) {
                    errorDiv.style.display = 'block';
                    dateNaissanceInput.setCustomValidity('Vous devez avoir au moins 25 ans.');
                } else {
                    errorDiv.style.display = 'none';
                    dateNaissanceInput.setCustomValidity('');
                }
            }

            dateNaissanceInput.addEventListener('change', verifierAge);
            dateNaissanceInput.addEventListener('input', verifierAge);
        });
    </script>
@endsection
