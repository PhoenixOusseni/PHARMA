@extends('layout.master')

@section('content')
    <style>
        .radio-group {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .radio-option {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            font-size: 16px;
            user-select: none;
        }

        .radio-option input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .radio-option .checkmark {
            position: absolute;
            top: 2px;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #e9ecef;
            border-radius: 50%;
            border: 2px solid #99CC00;
            transition: all 0.3s ease;
        }

        .radio-option input:checked~.checkmark {
            background-color: #99CC00;
        }

        .radio-option .checkmark::after {
            content: "";
            position: absolute;
            display: none;
        }

        .radio-option input:checked~.checkmark::after {
            display: block;
        }

        .radio-option .checkmark::after {
            top: 5px;
            left: 5px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }
    </style>
    <div class="container my-5">
        <div class="card shadow-sm border border-success p-4">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    <span><img src="{{ asset('assets/img/close.svg') }}" alt=""></span><span
                        style="color: rgb(242, 96, 96)">Echec !</span>
                    {{ session('error') }}
                </div>
            @endif

            <h2 class="mb-4 text-center text-success">Créer un compte</h2>

            <!-- Étapes visuelles -->
            <div class="steps mb-4 d-flex justify-content-between">
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
                <div class="step-item flex-fill" id="step-nav-5">
                    <div class="step-circle">4</div>
                    <small class="step-label">Résumé</small>
                </div>
            </div>

            <!-- Barre de progression -->
            <div class="mb-4">
                <div class="progress" style="height: 20px;">
                    <div id="progress-bar" class="progress-bar bg-success" role="progressbar" style="width: 25%;"
                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        Étape 1 / 4
                    </div>
                </div>
            </div>

            <!-- Formulaire -->
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <!-- Étape 1 -->
                <p class="text-danger"><em>Les champs avec etoiles(*) sont obligatoires !</em></p>
                <div id="step-1" class="step active">
                    <input type="text" class="form-control" name="role_id" value="1" hidden>
                    <input type="text" class="form-control" name="statut" value="En cours" hidden>
                    <div class="row p-2 mb-3" style="background: #f7f4ec; border-radius: 5px;">
                        <div class="col-md-6">
                            <label>Email<span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label>Mot de passe<span class="text-danger">*</span></label>
                            <input type="password" name="password" name="password" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label>Confirmer mot de passe<span class="text-danger">*</span></label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                        </div>
                    </div>
                    <div class="row p-2 mb-3" style="background: #eceef1; border-radius: 5px;">
                        <div class="col-md-6 mb-3">
                            <label>Région ordinale<span class="text-danger">*</span></label>
                            <select name="region_ordinal_id" id="region_ordinale" class="form-select" required>
                                <option value="" disabled selected>Sélectionner une région ordinale</option>
                                @foreach (App\Models\RegionOrdinal::all() as $item)
                                    <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Région<span class="text-danger">*</span></label>
                            <select name="region_id" id="region" class="form-select" required>
                                <option value="" disabled selected>Sélectionner une région</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Province<span class="text-danger">*</span></label>
                            <select name="province_id" id="province" class="form-select" required>
                                <option value="" disabled selected>Sélectionner une province</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Ville<span class="text-danger">*</span></label>
                            <select name="commune_id" id="commune" class="form-select" required>
                                <option value="" disabled selected>Sélectionner une ville</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Nom<span class="text-danger">*</span></label>
                            <input type="text" name="nom" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label>Prénom(s)<span class="text-danger">*</span></label>
                            <input type="text" name="prenom" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Nom de jeune fille</label>
                            <input type="text" name="nom_jeune_fille" class="form-control">
                        </div>
                        <div class="col-md-6">
                        <label>Date de naissance <span class="text-danger">*</span></label>
                        <input type="date" id="dateNaissance" name="date_naiss" class="form-control" required>
                        <div id="dateNaissanceError" style="color:red; display:none; margin-top:5px;">
                            Vous devez avoir au moins 25 ans.
                        </div>
                    </div>

                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Lieu de naissance<span class="text-danger">*</span></label>
                            <input type="text" name="lieu_naiss" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label>Nationalité<span class="text-danger">*</span></label>
                            <input type="text" name="nationalite" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Situation Matrimoniale <span class="text-danger">*</span></label><br>
                        <div class="radio-group">
                            <label class="radio-option">
                                Marié
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
                        <button type="button" class="btn btn-success" onclick="nextStep(2)">Suivant</button>
                    </div>
                </div>

                <!-- Étape 2 -->
                <div id="step-2" class="step">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Adresse Permanente</label>
                            <input type="text" name="adresse" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Domicile</label>
                            <input type="text" name="domicile" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Téléphone <span class="text-danger">*</span></label>
                        <input type="text" id="telephone" name="telephone" class="form-control" required oninput="validatePhone()">
                        <div class="invalid-feedback">Veuillez entrer un numéro valide (8 à 15 chiffres).</div>
                    </div>

                        <div class="col-md-6">
                            <label>N° Matricule<span class="text-danger"><em> (Pour les fonctionnaires)
                                    </em></span></label>
                            <input type="text" name="matricule" class="form-control">
                        </div>

                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" onclick="prevStep(1)">Précédent</button>
                        <button type="button" class="btn btn-success" onclick="nextStep(3)">Suivant</button>
                    </div>
                </div>

                <!-- Étape 3 -->
                <div id="step-3" class="step">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Diplome<span class="text-danger">* <em>(En format pdf)</em></span></label>
                            <input type="file" name="diplome" class="form-control" accept=".pdf" required>
                        </div>
                        <div class="col-md-6">
                            <label>Date d'obtention<span class="text-danger">*</span></label>
                            <input type="date" name="date_diplome" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Institution ayant délivré<span class="text-danger">*</span></label>
                            <input type="text" name="inst_delivre" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label>Lieu de délivrance</label>
                            <input type="text" name="lieu_delivrance" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Section</label>
                            <select name="section_id" class="form-select">
                                @foreach (App\Models\Section::all() as $item)
                                    <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Pièces jointes<span class="text-danger">* <em>(En format pdf)</em></span></label>
                            <input type="file" name="file" class="form-control" accept=".pdf" required>
                            <p>
                                <span>1. Un extrait d'acte de naissance</span>
                                <br>
                                <span>2. un extrait d'un casier judiciaire datant de moins de trois mois</span>
                                <br>
                                <span>3. Une copie légalisée du diplôme de pharmacien ou l'attestation de diplôme de docteur
                                    en pharmacie</span>
                                <br>
                                <span>4. Un certificat de nationalité</span>
                                <br>
                                <span>5.Un certificat d'aptitude médical</span>
                            </p>
                            <p class="text-danger text-italic">
                                <strong>Note :</strong> <em>Les pièces jointes doivent être au format PDF et ne pas dépasser
                                    5 Mo.</em>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" onclick="prevStep(2)">Précédent</button>
                        <button type="button" class="btn btn-success" onclick="nextStep(4)">Suivant</button>
                    </div>
                </div>

                <!-- Étape 4 -->
                <div id="step-4" class="step">
                    <h5 class="mb-4 text-success">Récapitulatif</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Nom:</strong> <span id="recap-nom"></span></p>
                            <p><strong>Prénom(s):</strong> <span id="recap-prenom"></span></p>
                            <p><strong>Téléphone:</strong> <span id="recap-telephone"></span></p>
                            <p><strong>Date de naissance:</strong> <span id="recap-date_naiss"></span></p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Lieu de naissance:</strong> <span id="recap-lieu_naiss"></span></p>
                            <p><strong>Nationalité:</strong> <span id="recap-nationalite"></span></p>
                            <p><strong>Email:</strong> <span id="recap-email"></span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Adresse:</strong> <span id="recap-adresse"></span></p>
                            <p><strong>Domicile:</strong> <span id="recap-domicile"></span></p>
                            <p><strong>Section:</strong> <span id="recap-section_id"></span></p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Région ordinale:</strong> <span id="recap-region_ordinal_id"></span></p>
                            <p><strong>Région:</strong> <span id="recap-region_id"></span></p>
                            <p><strong>Province:</strong> <span id="recap-province_id"></span></p>
                            <p><strong>Commune:</strong> <span id="recap-commune_id"></span></p>
                        </div>
                    </div>
                    <p class="text-danger"><em>Veuillez vérifier les informations ci-dessus avant de soumettre votre
                            inscription.</em></p>
                    <p class="text-success"><strong>Note :</strong> <em>Votre inscription sera examinée par
                            l'administration
                            et vous recevrez une notification par email une fois votre compte activé.</em></p>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" onclick="prevStep(3)">Precedant</button>
                        <button type="submit" class="btn btn-success">Valider l'inscription</button>
                    </div>
                </div>
            </form>
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
            for (let i = 1; i <= 4; i++) {
                const el = document.getElementById('step-nav-' + i);
                if (el) {
                    el.classList.toggle('active', i === step);
                }
            }
        }

        function updateProgressBar(step) {
            const bar = document.getElementById('progress-bar');
            const labels = ['Étape 1 / 4', 'Étape 2 / 4', 'Étape 3 / 4', 'Étape 4 / 4'];
            const widths = ['15%', '40%', '65%', '100%'];
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
    const pwd  = document.querySelector('[name="password"]');
    const pwd2 = document.querySelector('[name="password_confirmation"]');
    const msg  = document.getElementById('pwd-msg'); // <div id="pwd-msg" ...>

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
    const inputs = document.querySelectorAll(`#step-${prevStep} input[required], #step-${prevStep} select[required], #step-${prevStep} textarea[required]`);
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

        document.getElementById('recap-nom').innerText                 = getVal('[name="nom"]');
        document.getElementById('recap-prenom').innerText              = getVal('[name="prenom"]');
        document.getElementById('recap-telephone').innerText           = getVal('[name="telephone"]');
        document.getElementById('recap-date_naiss').innerText          = getVal('[name="date_naiss"]');
        document.getElementById('recap-lieu_naiss').innerText          = getVal('[name="lieu_naiss"]');
        document.getElementById('recap-nationalite').innerText         = getVal('[name="nationalite"]');
        document.getElementById('recap-email').innerText               = getVal('[name="email"]');
        document.getElementById('recap-adresse').innerText             = getVal('[name="adresse"]');
        document.getElementById('recap-domicile').innerText            = getVal('[name="domicile"]');
        document.getElementById('recap-region_ordinal_id').innerText   = getText('[name="region_ordinal_id"] option:checked');
        document.getElementById('recap-region_id').innerText           = getText('[name="region_id"] option:checked');
        document.getElementById('recap-province_id').innerText         = getText('[name="province_id"] option:checked');
        document.getElementById('recap-commune_id').innerText          = getText('[name="commune_id"] option:checked');
        document.getElementById('recap-section_id').innerText          = getText('[name="section_id"] option:checked');
        // ... ajoute les autres si besoin
    }

    showStep(step);
}

// (optionnel) validation live pendant la saisie
document.addEventListener('DOMContentLoaded', () => {
    const pwd  = document.querySelector('[name="password"]');
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
        document.addEventListener('DOMContentLoaded', function () {
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
