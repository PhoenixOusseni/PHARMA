<!-- Modal photo -->
<div class="modal fade" id="photoBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-default">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="bi bi-camera"></i> Charger la photo du profil
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('add_profil_image/' . $finds->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="modal-form-label">Sélectionner une photo</label>
                        <input type="file" class="form-control modal-form-control" name="photo" accept="image/*"
                            required>
                        <small class="text-muted">Formats acceptés: JPG, PNG. Taille max: 2MB</small>
                    </div>
                    <hr>
                    <div class="mt-3 d-flex gap-2">
                        <button type="submit" class="btn btn-modal-primary">
                            <i class="bi bi-upload"></i> Charger
                        </button>
                        <button type="button" class="btn btn-modal-danger" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle"></i> Fermer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal edit profile -->
<div class="modal fade" id="editBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="bi bi-pencil-square"></i> Modifier mon compte
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Étapes visuelles -->
                <div class="steps mb-4 d-flex justify-content-between modal-steps">
                    <div class="step-item flex-fill modal-step-item" id="step-nav-1">
                        <div class="step-circle modal-step-circle">1</div>
                        <small class="step-label modal-step-label">État Civil</small>
                    </div>
                    <div class="step-item flex-fill modal-step-item" id="step-nav-2">
                        <div class="step-circle modal-step-circle">2</div>
                        <small class="step-label modal-step-label">Adresse</small>
                    </div>
                    <div class="step-item flex-fill modal-step-item" id="step-nav-3">
                        <div class="step-circle modal-step-circle">3</div>
                        <small class="step-label modal-step-label">Diplôme</small>
                    </div>
                    <div class="step-item flex-fill modal-step-item" id="step-nav-4">
                        <div class="step-circle modal-step-circle">4</div>
                        <small class="step-label modal-step-label">Régional</small>
                    </div>
                    <div class="step-item flex-fill modal-step-item" id="step-nav-5">
                        <div class="step-circle modal-step-circle">5</div>
                        <small class="step-label modal-step-label">Résumé</small>
                    </div>
                </div>

                <!-- Barre de progression -->
                <div class="mb-4">
                    <div class="progress" style="height: 25px; border-radius: 5px;">
                        <div id="progress-bar" class="progress-bar modal-progress-bar" role="progressbar"
                            style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span style="font-weight: 600;">Étape 1 / 5</span>
                        </div>
                    </div>
                </div>

                <!-- Formulaire -->
                <form method="POST" action="{{ url('update_profil/' . $finds->id) }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Étape 1 -->
                    <div id="step-1" class="step active">
                        <div class="modal-section">
                            <div class="modal-section-title">
                                <i class="bi bi-person"></i> Informations personnelles
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="modal-form-label">Nom<span class="text-danger">*</span></label>
                                    <input type="text" name="nom" class="form-control modal-form-control"
                                        value="{{ $finds->nom }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="modal-form-label">Prénom(s)<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="prenom" class="form-control modal-form-control"
                                        value="{{ $finds->prenom }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="modal-form-label">Nom de jeune fille</label>
                                    <input type="text" name="nom_jeune_fille"
                                        class="form-control modal-form-control" value="{{ $finds->nom_jeune_fille }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="modal-form-label">Date de naissance<span
                                            class="text-danger">*</span></label>
                                    <input type="date" name="date_naiss" class="form-control modal-form-control"
                                        value="{{ $finds->date_naiss }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="modal-form-label">Lieu de naissance<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="lieu_naiss" class="form-control modal-form-control"
                                        value="{{ $finds->lieu_naiss }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="modal-form-label">Nationalité<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="nationalite" class="form-control modal-form-control"
                                        value="{{ $finds->nationalite }}" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="modal-form-label">Situation Matrimoniale<span
                                        class="text-danger">*</span></label><br>
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
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-modal-primary" onclick="nextStep(2)">
                                Suivant <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Étape 2 -->
                    <div id="step-2" class="step">
                        <div class="modal-section">
                            <div class="modal-section-title">
                                <i class="bi bi-house"></i> Adresse et coordonnées
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="modal-form-label">Adresse Permanente</label>
                                    <input type="text" name="adresse" class="form-control modal-form-control"
                                        value="{{ $finds->adresse }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="modal-form-label">Domicile</label>
                                    <input type="text" name="domicile" class="form-control modal-form-control"
                                        value="{{ $finds->domicile }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="modal-form-label">Email<span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control modal-form-control"
                                        value="{{ $finds->email }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="modal-form-label">Téléphone<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="telephone" class="form-control modal-form-control"
                                        value="{{ $finds->telephone }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="modal-form-label">N° Matricule</label>
                                    <input type="text" name="matricule" class="form-control modal-form-control"
                                        value="{{ $finds->matricule }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="modal-form-label">Lieu d'exercice</label>
                                    <input type="text" name="lieu_exercice"
                                        class="form-control modal-form-control" value="{{ $finds->lieu_exercice }}">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-modal-secondary" onclick="prevStep(1)">
                                <i class="bi bi-arrow-left"></i> Précédent
                            </button>
                            <button type="button" class="btn btn-modal-primary" onclick="nextStep(3)">
                                Suivant <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Étape 3 -->
                    <div id="step-3" class="step">
                        <div class="modal-section">
                            <div class="modal-section-title">
                                <i class="bi bi-mortarboard"></i> Diplômes et formation
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="modal-form-label">Diplôme <small
                                            class="text-muted">(PDF)</small></label>
                                    <input type="file" name="diplome" class="form-control modal-form-control"
                                        accept=".pdf">
                                </div>
                                <div class="col-md-6">
                                    <label class="modal-form-label">Date d'obtention</label>
                                    <input type="date" name="date_diplome" class="form-control modal-form-control"
                                        value="{{ $finds->date_diplome }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="modal-form-label">Institution ayant délivré</label>
                                    <input type="text" name="inst_delivre" class="form-control modal-form-control"
                                        value="{{ $finds->inst_delivre }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="modal-form-label">Lieu de délivrance</label>
                                    <input type="text" name="lieu_delivrance"
                                        class="form-control modal-form-control"
                                        value="{{ $finds->lieu_delivrance }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="modal-form-label">Section</label>
                                    <select name="section_id" class="form-select modal-form-control">
                                        @foreach (App\Models\Section::all() as $item)
                                            <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="modal-form-label">Pièces jointes <small
                                            class="text-muted">(PDF)</small></label>
                                    <input type="file" name="file" class="form-control modal-form-control"
                                        accept=".pdf">
                                </div>
                            </div>
                        </div>
                        <div class="document-info">
                            <strong><i class="bi bi-info-circle"></i> Pièces requises :</strong>
                            <ul>
                                <li>Un extrait d'acte de naissance</li>
                                <li>Un extrait d'un casier judiciaire datant de moins de trois mois</li>
                                <li>Une copie légalisée du diplôme de pharmacien ou l'attestation de diplôme de docteur
                                    en pharmacie</li>
                                <li>Un certificat de nationalité</li>
                                <li>Un certificat d'aptitude médical</li>
                            </ul>
                            <p class="text-danger mb-0 mt-2">
                                <strong><i class="bi bi-exclamation-triangle"></i> Note :</strong> Les pièces jointes
                                doivent être au format PDF et ne pas dépasser 2 Mo.
                            </p>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <button type="button" class="btn btn-modal-secondary" onclick="prevStep(2)">
                                <i class="bi bi-arrow-left"></i> Précédent
                            </button>
                            <button type="button" class="btn btn-modal-primary" onclick="nextStep(4)">
                                Suivant <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Étape 4 -->
                    <div id="step-4" class="step">
                        <div class="modal-section">
                            <div class="modal-section-title">
                                <i class="bi bi-geo-alt"></i> Localisation géographique
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="modal-form-label">Région ordinale</label>
                                    <select name="region_ordinal_id" class="form-select modal-form-control">
                                        @foreach (App\Models\RegionOrdinal::all() as $item)
                                            <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="modal-form-label">Région</label>
                                    <select name="region_id" class="form-select modal-form-control">
                                        @foreach (App\Models\Region::all() as $item)
                                            <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="modal-form-label">Province</label>
                                    <select name="province_id" class="form-select modal-form-control">
                                        @foreach (App\Models\Province::all() as $item)
                                            <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="modal-form-label">Commune</label>
                                    <select name="commune_id" class="form-select modal-form-control">
                                        @foreach (App\Models\Commune::all() as $item)
                                            <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-modal-secondary" onclick="prevStep(3)">
                                <i class="bi bi-arrow-left"></i> Précédent
                            </button>
                            <button type="button" class="btn btn-modal-primary" onclick="nextStep(5)">
                                Suivant <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Étape 5 -->
                    <div id="step-5" class="step">
                        <div class="modal-section">
                            <div class="modal-section-title">
                                <i class="bi bi-clipboard-check"></i> Récapitulatif
                            </div>
                            <ul class="list-group recap-list mb-4">
                                <li class="list-group-item"><strong>Nom :</strong> <span id="recap-nom"></span></li>
                                <li class="list-group-item"><strong>Prénom :</strong> <span id="recap-prenom"></span>
                                </li>
                                <li class="list-group-item"><strong>Téléphone :</strong> <span
                                        id="recap-telephone"></span></li>
                                <li class="list-group-item"><strong>Date de naissance :</strong> <span
                                        id="recap-date_naiss"></span></li>
                                <li class="list-group-item"><strong>Lieu de naissance :</strong> <span
                                        id="recap-lieu_naiss"></span></li>
                                <li class="list-group-item"><strong>Nationalité :</strong> <span
                                        id="recap-nationalite"></span></li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-modal-secondary" onclick="prevStep(4)">
                                <i class="bi bi-arrow-left"></i> Précédent
                            </button>
                            <button type="submit" class="btn btn-modal-primary">
                                <i class="bi bi-save"></i> Modifier mon profil
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal add diplomes --}}
<div class="modal fade" id="addDipBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-default">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="bi bi-mortarboard"></i> Ajouter autres diplômes
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('gestion_diplome.store') }}">
                    @csrf
                    <input type="text" name="user_id" value="{{ $finds->id }}" hidden>

                    <div class="modal-section">
                        <div class="mb-3">
                            <label class="modal-form-label">Date d'obtention<span class="text-danger">*</span></label>
                            <input type="date" class="form-control modal-form-control" name="date_diplome"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="modal-form-label">Nature du diplôme<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control modal-form-control" name="nature"
                                placeholder="Ex: Master en Pharmacie clinique" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-modal-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle"></i> Annuler
                        </button>
                        <button type="submit" class="btn btn-modal-primary">
                            <i class="bi bi-plus-circle"></i> Ajouter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal add an a fonction --}}
<div class="modal fade" id="addFoctBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-default">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="bi bi-briefcase"></i> Ajouter une fonction
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('gestion_fonction.store') }}">
                    @csrf
                    <input type="text" name="user_id" value="{{ $finds->id }}" hidden>

                    <div class="modal-section">
                        <div class="mb-3">
                            <label class="modal-form-label">Date d'occupation<span
                                    class="text-danger">*</span></label>
                            <input type="date" class="form-control modal-form-control" name="date" required>
                        </div>

                        <div class="mb-3">
                            <label class="modal-form-label">Libellé de la fonction<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control modal-form-control" name="libelle"
                                placeholder="Ex: Pharmacien responsable" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-modal-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle"></i> Annuler
                        </button>
                        <button type="submit" class="btn btn-modal-primary">
                            <i class="bi bi-plus-circle"></i> Ajouter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal cotisation -->
<div class="modal fade" id="cotisationUserBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="bi bi-credit-card"></i> Paiement de cotisation
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{  route('gestion_cotisations.store')  }}">
                    @csrf
                    <!-- Operator Section -->
                    <div class="payment-operator mb-4">
                        <div class="text-center mb-3">
                            <h5 class="text-dark fw-bold mb-3">
                                <i class="bi bi-phone"></i> Opérateur de paiement
                            </h5>
                            <img src="{{ asset('assets/img/orange_money.png') }}" alt="Operateur" class="img-fluid"
                                style="max-width: 200px;">
                        </div>
                        <div class="payment-instructions">
                            <i class="bi bi-info-circle"></i>
                            <p class="mb-0">Composez <strong class="text-success">*144*4*146*15000#</strong> pour
                                générer le code OTP</p>
                        </div>
                    </div>

                    <!-- Payment Details -->
                    <div class="modal-section mb-4">
                        <div class="modal-section-title">
                            <i class="bi bi-cash-stack"></i> Informations de paiement
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="modal-form-label">Montant de la cotisation</label>
                                <input type="text" name="montant" class="form-control modal-form-control"
                                    value="{{ $finds->montant_cotisation }} FCFA" readonly disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="modal-form-label">Période<span class="text-danger">*</span></label>
                                <select name="annee_id" class="form-select modal-form-control" required>
                                    @foreach (App\Models\Annee::where('statut', 'Activé')->get() as $item)
                                        <option value="{{ $item->id }}">{{ $item->annee }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- OTP Section -->
                    <div class="modal-section">
                        <div class="modal-section-title">
                            <i class="bi bi-shield-lock"></i> Validation du paiement
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="modal-form-label" for="code_otp">Code OTP<span
                                        class="text-danger">*</span></label>
                                <input type="number" id="code_otp" name="code_otp"
                                    class="form-control modal-form-control" placeholder="Entrez le code OTP généré"
                                    required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="modal-form-label" for="numero_demande">Numéro de paiement<span
                                        class="text-danger">*</span></label>
                                <input class="form-control modal-form-control" type="number" id="numero_demande"
                                    name="numero_demande" placeholder="Numéro ayant servi au paiement" required>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <button type="button" class="btn btn-modal-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle"></i> Annuler
                        </button>
                        <button type="submit" class="btn btn-modal-primary">
                            <i class="bi bi-check-circle"></i> Valider le paiement
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

