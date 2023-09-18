@extends('dashboard')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <h2>Contactez-nous</h2>
            <form>
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="Votre nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Votre prénom">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Votre adresse email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Votre message"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary mb-3">Envoyer</button>
            </form>
        </div>
        <div class="col-lg-4 pt-5 pl-5">
            <h4>Coordonnées</h4>
            <ul class="list-unstyled">
                <li><i class="fas fa-envelope mt-3"></i> nurutek6@gmail.com</li>
                <li><i class="fas fa-phone my-3"></i> +221 77 456 78 90</li>
                <li><i class="fas fa-map-marker-alt"></i> 1234 Rue de l'Adresse<br>Ville, Pays</li>
            </ul>
        </div>
    </div>
</div>

@endsection
