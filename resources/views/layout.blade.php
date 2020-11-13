<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comparateur-Télécom</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/affc9e4c15.js" crossorigin="anonymous"></script>
        <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->
        <link href="./css/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="mainDiv">
            <header class="d-flex flex-row">
                <div class="content">
                    <div class="logoAndMenu">
                        <a class="mainLogo-link" href="/" title="Accueil"><img id="mainLogo" src="{{ asset('asset/logos/comparateur_telecom_logo-01.png') }}" /></a>
                        <a class="mainLogo-link-smart" href="/" title="Accueil"><img id="mainLogo-smart" src="{{ asset('asset/logos/comparateur_telecom_logo-02.png') }}" /></a>
                        <ul id="nav">
                            @foreach ($main_menu as $tab)
                            
                            <li class="nav-item">
                                <a href="{{ $tab->url }}" title="{{ $tab->title }}">{{ $tab->title }}</a>
                                @if ($tab->url == '/operators')
                                    <ul class="submenu">
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
                    </div>
                    <div id="top-shortcuts">
                        <p><span id="phone">0800 37 369</span> | <a href="/contact-me" title="Rappel gratuit">Rappel gratuit</a><span id="language">Français</span></p>
                    </div>
                    <img id="burgerMenu" src="{{ asset('asset/icons/burger-menu.png') }}" />
                </div>
            </header>

            @yield('content')

            <footer>
                <div class="content">
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
                </div>
            </footer>
        </div>
        <script>
            let burgerMenu = document.getElementById('burgerMenu');
            /*function getSmartMenu(){
                let mainMenu = document.getElementById('nav');
                mainMenu.style.visibility = "visible";
                mainMenu.style.display = "block";
            }*/
            burgerMenu.addEventListener('click', () => {
                    let mainMenu = document.getElementById('nav');
                    if(mainMenu.classList.contains("hidden")){
                        mainMenu.classList.toggle("hidden");
                        mainMenu.style.visibility = "visible";
                        mainMenu.style.display = "block";
                    }else{
                        mainMenu.classList.toggle("hidden");
                        mainMenu.style.visibility = "hidden";
                        mainMenu.style.display = "none";
                    }
                });
        </script>
        <script src="./js/app.js"></script>
    </body>
</html>