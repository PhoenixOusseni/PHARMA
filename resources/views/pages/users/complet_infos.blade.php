@extends('layout.master')

@section('content')
    <style>
        .completion-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 15px;
        }

        .completion-card {
            background: white;
            border-radius: 5px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .completion-header {
            background: linear-gradient(135deg, #218838 0%, #28a745 100%);
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .completion-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .completion-header::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: -50px;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .completion-header h2 {
            color: white;
            font-size: 28px;
            font-weight: 700;
            margin: 0;
            position: relative;
            z-index: 1;
        }

        .completion-header p {
            color: rgba(255, 255, 255, 0.9);
            margin: 10px 0 0;
            font-size: 16px;
            position: relative;
            z-index: 1;
        }

        .completion-body {
            padding: 40px;
        }

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
            border: 2px solid #28a745;
            transition: all 0.3s ease;
        }

        .radio-option input:checked~.checkmark {
            background-color: #28a745;
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

        .step {
            display: none;
            animation: fadeIn 0.5s;
        }

        .step.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #28a745;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #28a745;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-control, .form-select {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 12px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }

        .btn {
            border-radius: 5px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #218838 0%, #28a745 100%);
            border: none;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(40, 167, 69, 0.4);
        }

        .btn-secondary {
            background: #6c757d;
            border: none;
        }

        .btn-secondary:hover {
            background: #5a6268;
            transform: translateY(-2px);
        }

        .recap-card {
            background: #f8f9fa;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 4px solid #28a745;
        }

        .recap-card h6 {
            color: #28a745;
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .recap-card p {
            margin-bottom: 8px;
            color: #555;
            font-size: 14px;
        }

        .recap-card strong {
            color: #333;
        }

        .info-section {
            background: #f8f9fa;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 25px;
        }

        @media (max-width: 768px) {
            .completion-body {
                padding: 20px;
            }

            .completion-header h2 {
                font-size: 22px;
            }
        }
    </style>
    <div class="completion-container">
        <div class="completion-card">
            <div class="completion-header">
                <h2><i class="bi bi-pencil-square"></i> Compléter vos informations</h2>
                <p>Veuillez remplir tous les champs requis pour finaliser votre profil</p>
            </div>
            <div class="completion-body">

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
                    <div class="step-item flex-fill" id="step-nav-4">
                        <div class="step-circle">4</div>
                        <small class="step-label">Résumé</small>
                    </div>
                </div>

                <!-- Barre de progression -->
                <div class="mb-4">
                    <div class="progress" style="height: 25px; border-radius: 5px;">
                        <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 25%; background: linear-gradient(135deg, #218838 0%, #28a745 100%);"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <span style="font-weight: 600;">Étape 1 / 4</span>
                        </div>
                    </div>
                </div>

                <!-- Formulaire -->
                <form method="POST" action="{{ route('complete_info_post', auth()->user()->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Étape 1 -->
                    <div id="step-1" class="step active">
                        <div class="alert alert-info" style="border-radius: 5px; border-left: 4px solid #28a745;">
                            <i class="bi bi-info-circle"></i> <strong>Information:</strong> Les champs avec étoile (<span class="text-danger">*</span>) sont obligatoires.
                        </div>

                        <div class="section-title">
                            <i class="bi bi-envelope"></i> Informations de contact
                        </div>
                        <div class="info-section">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email<span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Téléphone <span class="text-danger">*</span></label>
                                    <input type="text" id="telephone" name="telephone" class="form-control" value="{{ auth()->user()->telephone }}" required
                                        oninput="validatePhone()">
                                    <div class="invalid-feedback">Veuillez entrer un numéro valide (8 à 15 chiffres).</div>
                                </div>
                            </div>
                        </div>

                        <div class="section-title">
                            <i class="bi bi-geo-alt"></i> Localisation
                        </div>
                        <div class="info-section">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Région ordinale<span class="text-danger">*</span></label>
                            <select name="region_ordinal_id" id="region_ordinale" class="form-select" required>
                                <option value="" disabled>Sélectionner une région ordinale</option>
                                @foreach (App\Models\RegionOrdinal::all() as $item)
                                    <option value="{{ $item->id }}" {{ auth()->user()->region_ordinal_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->libelle }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Région<span class="text-danger">*</span></label>
                            <select name="region_id" id="region" class="form-select" required>
                                <option value="" disabled>Sélectionner une région</option>
                                @if(auth()->user()->region_id)
                                    <option value="{{ auth()->user()->region_id }}" selected>
                                        {{ auth()->user()->Region->libelle ?? '' }}
                                    </option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Province<span class="text-danger">*</span></label>
                            <select name="province_id" id="province" class="form-select" required>
                                <option value="" disabled>Sélectionner une province</option>
                                @if(auth()->user()->province_id)
                                    <option value="{{ auth()->user()->province_id }}" selected>
                                        {{ auth()->user()->Province->libelle ?? '' }}
                                    </option>
                                @endif
                            </select>
                        </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Ville<span class="text-danger">*</span></label>
                                    <select name="commune_id" id="commune" class="form-select" required>
                                        <option value="" disabled>Sélectionner une ville</option>
                                        @if(auth()->user()->commune_id)
                                            <option value="{{ auth()->user()->commune_id }}" selected>
                                                {{ auth()->user()->Commune->libelle ?? '' }}
                                            </option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="section-title">
                            <i class="bi bi-person"></i> Identité
                        </div>
                        <div class="info-section">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nom<span class="text-danger">*</span></label>
                                    <input type="text" name="nom" class="form-control" value="{{ auth()->user()->nom }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Prénom(s)<span class="text-danger">*</span></label>
                                    <input type="text" name="prenom" class="form-control" value="{{ auth()->user()->prenom }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nom de jeune fille</label>
                                    <input type="text" name="nom_jeune_fille" class="form-control" value="{{ auth()->user()->nom_jeune_fille }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Date de naissance <span class="text-danger">*</span></label>
                                    <input type="date" id="dateNaissance" name="date_naiss" class="form-control" value="{{ auth()->user()->date_naiss }}" required>
                                    <div id="dateNaissanceError" style="color:red; display:none; margin-top:5px;">
                                        Vous devez avoir au moins 25 ans.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Lieu de naissance<span class="text-danger">*</span></label>
                                    <input type="text" name="lieu_naiss" class="form-control" value="{{ auth()->user()->lieu_naiss }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nationalité<span class="text-danger">*</span></label>
                                    <input type="text" name="nationalite" class="form-control" value="{{ auth()->user()->nationalite }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Situation Matrimoniale <span class="text-danger">*</span></label><br>
                                    <div class="radio-group" style="margin-top: 10px;">
                            <label class="radio-option">
                                Marié
                                <input type="radio" name="situation_matrimoniale" value="Marié" {{ auth()->user()->situation_matrimoniale == 'Marié' ? 'checked' : '' }}>
                                <span class="checkmark"></span>
                            </label>

                            <label class="radio-option">
                                Veuf(ve)
                                <input type="radio" name="situation_matrimoniale" value="Veuf(ve)" {{ auth()->user()->situation_matrimoniale == 'Veuf(ve)' ? 'checked' : '' }}>
                                <span class="checkmark"></span>
                            </label>

                            <label class="radio-option">
                                Célibataire
                                <input type="radio" name="situation_matrimoniale" value="Célibataire" {{ auth()->user()->situation_matrimoniale == 'Célibataire' ? 'checked' : '' }}>
                                <span class="checkmark"></span>
                            </label>

                                        <label class="radio-option">
                                            Divorcé(e)
                                            <input type="radio" name="situation_matrimoniale" value="Divorcé(e)" {{ auth()->user()->situation_matrimoniale == 'Divorcé(e)' ? 'checked' : '' }}>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="button" class="btn btn-primary" onclick="nextStep(2)">
                                Suivant <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Étape 2 -->
                    <div id="step-2" class="step">
                        <div class="section-title">
                            <i class="bi bi-house"></i> Adresse et domicile
                        </div>
                        <div class="info-section">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Adresse Permanente</label>
                                    <input type="text" name="adresse" class="form-control" value="{{ auth()->user()->adresse }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Domicile</label>
                                    <input type="text" name="domicile" class="form-control" value="{{ auth()->user()->domicile }}">
                                </div>
                            </div>
                        </div>

                        <div class="section-title">
                            <i class="bi bi-briefcase"></i> Informations professionnelles
                        </div>
                        <div class="info-section">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">N° Matricule <small class="text-muted">(Pour les fonctionnaires)</small></label>
                                    <input type="text" name="matricule" class="form-control" value="{{ auth()->user()->matricule }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">N° RCCM</label>
                                    <input type="text" name="num_rccm" class="form-control" value="{{ auth()->user()->num_rccm }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Lieu d'exercice</label>
                                    <input type="text" name="lieu_exercice" class="form-control" value="{{ auth()->user()->lieu_exercice }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Photo de profil <small class="text-muted">(Format: jpg, png)</small></label>
                                    <input type="file" name="photo" class="form-control" accept=".jpg,.jpeg,.png">
                                    @if(auth()->user()->photo)
                                        <small class="text-muted">Photo actuelle: {{ basename(auth()->user()->photo) }}</small>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" onclick="prevStep(1)">
                                <i class="bi bi-arrow-left"></i> Précédent
                            </button>
                            <button type="button" class="btn btn-primary" onclick="nextStep(3)">
                                Suivant <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Étape 3 -->
                    <div id="step-3" class="step">
                        <div class="section-title">
                            <i class="bi bi-mortarboard"></i> Diplôme et formation
                        </div>
                        <div class="info-section">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Diplome <small class="text-muted">(En format pdf)</small></label>
                                    <input type="file" name="diplome" class="form-control" accept=".pdf">
                                    @if(auth()->user()->diplome)
                                        <small class="text-muted">Diplôme actuel: {{ basename(auth()->user()->diplome) }}</small>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Date d'obtention<span class="text-danger">*</span></label>
                                    <input type="date" name="date_diplome" class="form-control" value="{{ auth()->user()->date_diplome }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Institution ayant délivré<span class="text-danger">*</span></label>
                                    <input type="text" name="inst_delivre" class="form-control" value="{{ auth()->user()->inst_delivre }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Lieu de délivrance</label>
                                    <input type="text" name="lieu_delivrance" class="form-control" value="{{ auth()->user()->lieu_delivrance }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Section</label>
                                    <select name="section_id" class="form-select">
                                        <option value="">Sélectionner une section</option>
                                        @foreach (App\Models\Section::all() as $item)
                                            <option value="{{ $item->id }}" {{ auth()->user()->section_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->libelle }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Pièces jointes <small class="text-muted">(En format pdf)</small></label>
                                    <input type="file" name="file" class="form-control" accept=".pdf">
                                    @if(auth()->user()->file)
                                        <small class="text-muted">Pièce actuelle: {{ basename(auth()->user()->file) }}</small>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-info" style="border-radius: 5px; border-left: 4px solid #0dcaf0;">
                            <h6><i class="bi bi-info-circle"></i> <strong>Pièces requises:</strong></h6>
                            <ul class="mb-0 mt-2">
                                <li>Un extrait d'acte de naissance</li>
                                <li>Un extrait d'un casier judiciaire datant de moins de trois mois</li>
                                <li>Une copie légalisée du diplôme de pharmacien ou l'attestation de diplôme de docteur en pharmacie</li>
                                <li>Un certificat de nationalité</li>
                                <li>Un certificat d'aptitude médical</li>
                            </ul>
                            <p class="text-danger mt-2 mb-0">
                                <strong><i class="bi bi-exclamation-triangle"></i> Note :</strong> <em>Les pièces jointes doivent être au format PDF et ne pas dépasser 5 Mo.</em>
                            </p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" onclick="prevStep(2)">
                                <i class="bi bi-arrow-left"></i> Précédent
                            </button>
                            <button type="button" class="btn btn-primary" onclick="nextStep(4)">
                                Suivant <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Étape 4 - Résumé -->
                    <div id="step-4" class="step">
                        <div class="section-title">
                            <i class="bi bi-clipboard-check"></i> Récapitulatif de vos informations
                        </div>

                        <div class="recap-card">
                            <h6><i class="bi bi-person"></i> Informations personnelles</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Nom:</strong> <span id="recap-nom"></span></p>
                                    <p><strong>Prénom(s):</strong> <span id="recap-prenom"></span></p>
                                    <p><strong>Nom de jeune fille:</strong> <span id="recap-nom_jeune_fille"></span></p>
                                    <p><strong>Date de naissance:</strong> <span id="recap-date_naiss"></span></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Lieu de naissance:</strong> <span id="recap-lieu_naiss"></span></p>
                                    <p><strong>Nationalité:</strong> <span id="recap-nationalite"></span></p>
                                    <p><strong>Situation matrimoniale:</strong> <span id="recap-situation_matrimoniale"></span></p>
                                </div>
                            </div>
                        </div>

                        <div class="recap-card">
                            <h6><i class="bi bi-geo-alt"></i> Contact et localisation</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Email:</strong> <span id="recap-email"></span></p>
                                    <p><strong>Téléphone:</strong> <span id="recap-telephone"></span></p>
                                    <p><strong>Adresse:</strong> <span id="recap-adresse"></span></p>
                                    <p><strong>Domicile:</strong> <span id="recap-domicile"></span></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Région ordinale:</strong> <span id="recap-region_ordinal_id"></span></p>
                                    <p><strong>Région:</strong> <span id="recap-region_id"></span></p>
                                    <p><strong>Province:</strong> <span id="recap-province_id"></span></p>
                                    <p><strong>Commune:</strong> <span id="recap-commune_id"></span></p>
                                </div>
                            </div>
                        </div>

                        <div class="recap-card">
                            <h6><i class="bi bi-briefcase"></i> Formation et exercice</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Date diplôme:</strong> <span id="recap-date_diplome"></span></p>
                                    <p><strong>Institution:</strong> <span id="recap-inst_delivre"></span></p>
                                    <p><strong>Lieu de délivrance:</strong> <span id="recap-lieu_delivrance"></span></p>
                                    <p><strong>Section:</strong> <span id="recap-section_id"></span></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Matricule:</strong> <span id="recap-matricule"></span></p>
                                    <p><strong>N° RCCM:</strong> <span id="recap-num_rccm"></span></p>
                                    <p><strong>Lieu d'exercice:</strong> <span id="recap-lieu_exercice"></span></p>
                                    <p><strong>Fonction:</strong> <span id="recap-fonction_id"></span></p>
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-warning" style="border-radius: 5px; border-left: 4px solid #ffc107;">
                            <i class="bi bi-exclamation-triangle"></i> <strong>Attention:</strong> Veuillez vérifier les informations ci-dessus avant de soumettre.
                        </div>
                        <div class="alert alert-success" style="border-radius: 5px; border-left: 4px solid #198754;">
                            <i class="bi bi-check-circle"></i> <strong>Note:</strong> Vos informations seront mises à jour dans votre profil.
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" onclick="prevStep(3)">
                                <i class="bi bi-arrow-left"></i> Précédent
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Enregistrer les modifications
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
        .step-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            min-width: 80px;
            position: relative;
        }

        .step-item:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 20px;
            left: 60%;
            width: 100%;
            height: 2px;
            background: #dee2e6;
            z-index: -1;
        }

        .step-circle {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: #dee2e6;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 8px;
            transition: all 0.3s ease;
            border: 3px solid #dee2e6;
        }

        .step-label {
            color: #6c757d;
            font-size: 0.85rem;
            line-height: 1.2;
            white-space: nowrap;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .step-item.active .step-circle {
            background: linear-gradient(135deg, #218838 0%, #28a745 100%);
            color: white;
            border-color: #28a745;
            box-shadow: 0 3px 10px rgba(102, 126, 234, 0.3);
            transform: scale(1.1);
        }

        .step-item.active .step-label {
            color: #28a745;
            font-weight: 600;
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
            const widths = ['25%', '50%', '75%', '100%'];
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

            // Vérification spécifique du téléphone au Step 1
            if (prevStep === 1 && !validatePhone()) {
                valid = false;
            }

            // Vérification de la date de naissance
            if (prevStep === 1 && !validateDateNaissance()) {
                valid = false;
            }

            if (!valid) return;

            // Récapitulatif quand on arrive à l'étape 4
            if (step === 4) {
                const getVal = (selector, fallback = 'Non renseigné') => {
                    const el = document.querySelector(selector);
                    return el?.value?.trim() || fallback;
                };
                const getText = (selector, fallback = 'Non renseigné') => {
                    const el = document.querySelector(selector + ' option:checked');
                    return el?.textContent?.trim() || fallback;
                };
                const getRadio = (name, fallback = 'Non renseigné') => {
                    const el = document.querySelector(`input[name="${name}"]:checked`);
                    return el?.value || fallback;
                };

                document.getElementById('recap-nom').innerText = getVal('[name="nom"]');
                document.getElementById('recap-prenom').innerText = getVal('[name="prenom"]');
                document.getElementById('recap-nom_jeune_fille').innerText = getVal('[name="nom_jeune_fille"]');
                document.getElementById('recap-telephone').innerText = getVal('[name="telephone"]');
                document.getElementById('recap-date_naiss').innerText = getVal('[name="date_naiss"]');
                document.getElementById('recap-lieu_naiss').innerText = getVal('[name="lieu_naiss"]');
                document.getElementById('recap-nationalite').innerText = getVal('[name="nationalite"]');
                document.getElementById('recap-situation_matrimoniale').innerText = getRadio('situation_matrimoniale');
                document.getElementById('recap-email').innerText = getVal('[name="email"]');
                document.getElementById('recap-adresse').innerText = getVal('[name="adresse"]');
                document.getElementById('recap-domicile').innerText = getVal('[name="domicile"]');
                document.getElementById('recap-matricule').innerText = getVal('[name="matricule"]');
                document.getElementById('recap-num_rccm').innerText = getVal('[name="num_rccm"]');
                document.getElementById('recap-lieu_exercice').innerText = getVal('[name="lieu_exercice"]');
                document.getElementById('recap-date_diplome').innerText = getVal('[name="date_diplome"]');
                document.getElementById('recap-inst_delivre').innerText = getVal('[name="inst_delivre"]');
                document.getElementById('recap-lieu_delivrance').innerText = getVal('[name="lieu_delivrance"]');
                document.getElementById('recap-region_ordinal_id').innerText = getText('[name="region_ordinal_id"]');
                document.getElementById('recap-region_id').innerText = getText('[name="region_id"]');
                document.getElementById('recap-province_id').innerText = getText('[name="province_id"]');
                document.getElementById('recap-commune_id').innerText = getText('[name="commune_id"]');
                document.getElementById('recap-section_id').innerText = getText('[name="section_id"]');
                document.getElementById('recap-fonction_id').innerText = getText('[name="fonction_id"]');
            }

            showStep(step);
        }

        function validatePhone() {
            const telInput = document.getElementById("telephone");
            const telValue = telInput.value.trim();
            const telRegex = /^[0-9]{8,15}$/;

            if (!telRegex.test(telValue)) {
                telInput.classList.add("is-invalid");
                return false;
            } else {
                telInput.classList.remove("is-invalid");
                return true;
            }
        }

        function validateDateNaissance() {
            const dateInput = document.getElementById("dateNaissance");
            const dateValue = dateInput.value.trim();

            if (!dateValue) {
                dateInput.classList.add("is-invalid");
                return false;
            }

            const dateNaissance = new Date(dateValue);
            if (isNaN(dateNaissance.getTime())) {
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
                document.getElementById('dateNaissanceError').style.display = 'block';
                return false;
            } else {
                dateInput.classList.remove("is-invalid");
                document.getElementById('dateNaissanceError').style.display = 'none';
                return true;
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('telephone').addEventListener('input', validatePhone);
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
                            region.innerHTML += `<option value="${item.id}">${item.libelle}</option>`;
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
                            province.innerHTML += `<option value="${item.id}">${item.libelle}</option>`;
                        });
                    });
            });

            province.addEventListener('change', function() {
                fetch(`/communes/${this.value}`)
                    .then(res => res.json())
                    .then(data => {
                        commune.innerHTML = '<option value="">Sélectionner une commune</option>';
                        data.forEach(item => {
                            commune.innerHTML += `<option value="${item.id}">${item.libelle}</option>`;
                        });
                    });
            });
        });
    </script>
@endsection
