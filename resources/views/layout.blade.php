<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comparateur-Télécom</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <header class="d-flex flex-row">
                <a href="/" title="Accueil"><img src="{{ asset('asset/logos/comparateur_telecom_logo-01.png') }}" /></a>
                <ul class="nav">
                    @foreach ($main_menu as $tab)
                        
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $tab->url }}" title="{{ $tab->title }}">{{ $tab->title }}</a>
                        @if ($tab->url == '/operators')
                            <ul>
                                <li><a href="/operators" title="Tous les opérateurs">Tous les opérateurs</a></li>
                                @foreach ($operators as $operator)
                                    <li>
                                        <a href="/operators/{{ $operator->url }}" title="{{ $operator->name }}">{{ $operator->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                    @endforeach
                </ul>
                <div>
                    <p>0800 37 369 | Rappel gratuit | Français</p>
                </div>
            </header>

            @yield('content')

            <footer>
                <div>
                    <img src="{{ asset('asset/icons/CT-pictos-12.svg') }}" alt="Contactez-nous" height="80px" />
                    <h3>Contactez-nous !<br/>0800 37 369</h3>
                </div>
                <div>
                    <img src="{{ asset('asset/icons/CT-pictos-13.svg') }}" alt="Contactez-nous" height="80px" />
                    <h3>Suivez-nous sur</h3>
                    <img src="{{ asset('asset/icons/twitter.png') }}" alt="Twitter" />
                    <img src="{{ asset('asset/icons/facebook.png') }}" alt="Facebook" />
                </div>
                <div>
                    <div>
                        <h4>Comparateur de prix</h4>
                        <ul>
                            <li><a href="/packs" title="Toutes les promos">Toutes les promos</a></li>
                            @foreach ($packs as $pack)
                            <li>
                                <a href="/packs/{{ $pack->url }}" title="{{ $pack->title }}">{{ $pack->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h4>Opérateurs</h4>
                        <ul>
                            @foreach ($operators as $operator)
                            <li>
                                <a href="/operators/{{ $operator->url }}" title="{{ $operator->name }}">{{ $operator->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h4>A propos</h4>
                        <ul>
                            @foreach ($aboutPages as $abPage)
                            <li>
                                <a href="/{{ $abPage->url }}" title="{{ $abPage->title }}">{{ $abPage->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h4>Avis et support</h4>
                        <ul>
                            @foreach ($supportPages as $suPage)
                            <li>
                                <a href="/{{ $suPage->url }}" title="{{ $suPage->title }}">{{ $suPage->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <p>&copy; Compararateur-Telecom.be 2020. Tous droits réservés. | Une marque</p>
                <img src="{{ asset('asset/logos/comparateur_be.svg') }}" alt="Comparateur.be" />
            </footer>
        </div>
    </body>
</html>