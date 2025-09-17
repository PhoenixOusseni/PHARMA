@extends('layout.master2')

@section('content')
    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Mes cotisations</h2>
        </div><!-- End Section Title -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        @forelse ($cotisations as $item)
                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="team-member d-flex align-items-start">
                                    <div class="pic">
                                        @if ($item->User->photo)
                                            <img src="{{ asset('storage/' . $item->User->photo) }}" class="img-fluid"
                                                alt="">
                                        @else
                                            <img src="{{ asset('assets/img/avatar.png') }}" class="img-fluid"
                                                alt="">
                                        @endif
                                    </div>
                                    <div class="member-info">
                                        <h4>{{ number_format($item->montant, 0, ',', ' ') }} FCFA</h4>
                                        <p>Période : <strong class="badge bg-danger">{{ $item->Annee->annee }}</strong></p>
                                        <p>Mode paiement : <strong>{{ $item->mode }}</strong></p>
                                        <p>Date paiement : <strong>{{ $item->date }}</strong></p>
                                        <a href="{{ url('impression/print_cotisation/' . $item->id) }}" class="mt-3"
                                            target="_blank">
                                            <i class="fas fa-print fa-fw text-success me-2"></i>
                                            Imprimer mon reçu
                                        </a>
                                    </div>
                                </div>
                            </div><!-- End Team Member -->
                        @empty
                            <p class="text-danger">Vous n'avez pas encore de cotisation !</p>
                        @endforelse
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Comment devenir membre ?</h3>
                    <p>
                        Une demande manuscrite adressée à monsieur le Président du conseil régional
                        de l'Ordre de la région dans laquelle il se propose d'exercer.
                    </p>
                    <p>
                        <strong>1.</strong> Un extrait d'acte de naissance <br>
                        <strong>2.</strong> un extrait d'un casier judiciaire datant de moins de trois mois <br>
                        <strong>3.</strong> Une copie légalisée du diplôme de pharmacien ou l'attestation de diplôme de
                        docteur en pharmacie <br>
                        <strong>4.</strong> Un certificat de nationalité <br>
                        <strong>5.</strong> Un certificat d'aptitude médical
                    <p class="text-danger font-italic mt-3">
                        <em><strong class="text-danger">NB: </strong> Pour les pharmaciens de nationalités étrangères, il
                            faudra ajouter l'attestation de radiation et la lettre d'introduction de l'Ordre d'origine </em>
                    </p>
                </div>
            </div>
        </div>
    </section><!-- /Doctors Section -->
@endsection
