@extends('layout')

@section('content')

<div>
    <h1>Grâce à Comparateur-Telecom.be trouvez l’offre la moins chère d’abonnement GSM, internet, TV et téléphone fixe</h1>

    <a href="/comparator" class="btn btn-danger">Je compare maintenant</a><br/>
    <a href="/contact-me">Rappel gratuit</a>
</div>
<div class="d-flex justify-content-between bg-success">
    <div class="d-flex justify-content-start">
        <p><span>4.9/5</span> sur Facebook</p>
        @for ($i = 0; $i < 5; $i++)
            <img src="{{ asset('asset/icons/CT-pictos-11.svg') }}" width="100px" />
        @endfor
        <p><span>4.6/5</span> sur Google</p>
    </div>
    <p>Une marque </p><img src="{{ asset('asset/logos/comparateur_be.svg') }}" alt="Comparateur.be" width="150px" />
</div>
<div>
    <p>Comparez les prix de tous les opérateurs télécom et <span>économisez jusqu'à 270€</span></p>

    <p>Proximus, Orange, VOO, Base, Scarlet, Telenet, EDPnet,... Vous ne savez pas vers quel opérateur vous diriger ? Comparateur-Telecom.be vous permet de comparer en quelques clics les prix de tous les abonnements proposés en Belgique et ainsi trouver l’offre la plus avantageuse selon vos besoins. Vous souhaitez en savoir plus sur les différents opérateurs avant de prendre votre décision ? Découvrez nos fiches récapitulatives comprenant toutes les informations utiles.</p>

    <img src="{{ asset('asset/logos/proximus.png') }}" alt="Proximus" height="80px" />
    <img src="{{ asset('asset/logos/1022px-Orange_logo.svg.png') }}" alt="Orange" height="80px" />
    <img src="{{ asset('asset/logos/VOO_logo.svg.png') }}" alt="VOO" height="80px" />
    <img src="{{ asset('asset/logos/LOGO2011.jpg') }}" alt="Scarlet" height="80px" />
    <img src="{{ asset('asset/logos/2969px-Telenet_Logo.svg.png') }}" alt="Telenet" height="80px" />
    <img src="{{ asset('asset/logos/Logo_edpnet.jpg') }}" alt="EDP-net" height="80px" />

    <a href="/operators" class="btn btn-success">Voir la liste d'opérateurs</a>
</div>

<!-- PARTIE EN REACT -->
<div id="reactRoot">

</div>

<div>
    <h2>Des services sur-mesure pour gérer vos abonnements télécom</h2>
    <div class="d-flex flex-row">
        <div>
            <img src="{{ asset('asset/icons/CT-pictos-06.svg') }}" alt="Comparateur de prix" height="100px">
            <h3>Comparateur de prix</h3>
            <p>Grâce à Comparateur-Telecom.be, vous effectuez un comparatif et changez d'abonnements GSM, internet, TV et téléphone fixe en seulement quelques clics. Il n'a jamais été aussi simple d'économiser !</p>
        </div>
        <div>
            <img src="{{ asset('asset/icons/CT-pictos-05.svg') }}" alt="Conseils personnalisés et gratuits" height="100px">
            <h3>Conseils personnalisés et gratuits</h3>
            <p>Vous hésitez entre plusieurs packs ? Nos conseillers en télécommunications vous guident et déterminent avec vous l'offre idéale en fonction de vos critères.</p>
        </div>
        <div>
            <img src="{{ asset('asset/icons/CT-pictos-07.svg') }}" alt="Service déménagement" height="100px">
            <h3>Service déménagement</h3>
            <p>Profitez de votre déménagement pour analyser votre contrat actuel et opter pour une formule plus avantageuse. Nous vous aidons dans le choix de votre opérateur et vos démarches administratives</p>
        </div>
    </div>
    <a href="/comparator" class="btn btn-danger">Je compare les offres</a>
</div>
<div>
    <h2>À propos de Comparateur-Telecom.be</h2>
    <p>Comparateur-Telecoms.be est une société soeur de Comparateur-Energie.be, comparateur des prix de l'énergie réputé, actif depuis 2013 et accrédité par la CREG.</p>
    <p>Nous sommes une équipe d’experts en télécommunications aux côtés du consommateur. Notre plateforme indépendante permet de comparer gratuitement les offres de tous les opérateurs actifs en Belgique. En quelques clics, vous accédez aux packs Internet, TV, téléphonie fixe et mobile, qui collent à vos attentes. Un fois l’offre la moins chère identifiée, nous vous proposons un changement d’opérateur simple et rapide en direct sur notre plateforme.</p>
    <a href="/jobs" class="btn btn-success">Découvrir l'équipe derrière</a>
</div>
<div>
    <h2>Pourquoi Comparateur-Telecom.be ?</h2>
    <div class="d-flex flex-row">
        <div>
            <img src="{{ asset('asset/icons/CT-pictos-06.svg') }}" alt="Promotions exclusives" height="80px" />
            <p>Des promotions exclusives
                et des offres mises à jour
                quotidiennement</p>
        </div>
        <div>
            <img src="{{ asset('asset/icons/CT-pictos-10.svg') }}" alt="Service objectif" height="80px" />
            <p>Un service objectif, rapide,
                gratuit et adapté à vos
                besoins</p>
        </div>
        <div>
            <img src="{{ asset('asset/icons/CT-pictos-09.svg') }}" alt="Simple et intuitif" height="80px" />
            <p>Un changement d'opérateur
                simple et intuitif via
                Comparateur-Telecom.be</p>
        </div>
        <div>
            <img src="{{ asset('asset/icons/CT-pictos-08.svg') }}" alt="Accompagnement personnalisé" height="80px" />
            <p>Un accompagnement
                personnalisé depuis le
                comparatif jusqu'au
                changement d'abonnement</p>
        </div>
    </div>
    <a href="/comparator" class="btn btn-white">Je compare les abonnements</a>
</div>
<div>
    <h2>Les avis de notre communauté</h2>
    <div>
        <div>
            <h3>Nos clients nous ont donné la note de</h3>
            <p><span>4.9/5</span> sur Facebook</p>
            <p><span>4.6/5</span> sur Google</p>
            @for ($i = 0; $i < 5; $i++)
                <img src="{{ asset('asset/icons/CT-pictos-11.svg') }}" width="100px" />
            @endfor
        </div>
        <div>
            <img src="{{ asset('asset/images/jean-dujardin.jpg') }}" alt="Jean Dujardin" height="80px" />
            <h3>Jean Dujardin</h3>
            @for ($i = 0; $i < 5; $i++)
                <img src="{{ asset('asset/icons/CT-pictos-11.svg') }}" width="100px" />
            @endfor
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quis non commodi, iste quia veniam alias voluptate. Eum magnam consequatur excepturi facere, in doloribus incidunt a quibusdam! Ad, soluta minima!</p>
        </div>
    </div>
    <h2>Rejoignez-nous sur</h2>
    <a>Facebook</a>
    <a>Google</a>
</div>
<div>
    <h2>Nos articles les plus récents</h2>
    <p>Notre blog vous permettra de découvrir le secteur télécom et d'accéder au meilleurs trucs et astuces.</p>
    <div class="d-flex flex-row">
        @foreach ($blogPosts as $post)
            <div>
                <img src="{{ asset('asset/images/'.$post->img) }}" alt="{{ $post->title }}">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->text }}</p>
                    <a href="/blog/{{ $post->id }}">Lire plus</a>
            </div>
        @endforeach
    </div>
    <a href="/blog" class="btn btn-danger">Découvrir plus d'articles</a>
</div>

<div>
    <p>Restez au courant des dernières nouvelles et offres de Comparateur-Telecom.be</p>
    <a href="/newsletter">Je m’inscris à la newsletter</a>
</div>

@endsection