<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nonvizor') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body class="text-blueGray-700 antialiased">
    @include('layouts.navigation')
    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="background-image: url('assets/img/home.jpg');">
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="">
                            <h1 class="text-white font-semibold text-2xl">
                                Bienvenue sur notre site de collecte de dons aux personnes malades
                            </h1>
                            <p class="mt-4 text-lg text-blueGray-200">
                                En faisant un don à une personne malade, vous pouvez apporter un soutien précieux qui
                                peut aider à alléger sa douleur et sa souffrance. Votre générosité peut faire une grande
                                différence dans la vie de cette personne et peut même contribuer à sauver sa vie.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-20 bg-blueGray-200 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <a href="{{ route('gift') }}">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <h6 class="text-xl font-semibold">
                                        Faire un don
                                    </h6>
                                    <p class="mt-2 mb-4 text-blueGray-500">
                                        Cliquez pour voir les demandes d'aide ensuite faites un don à un patient de
                                        votre choix
                                    </p>
                                    <button type="button"
                                        class="bg-red-400 text-white text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                        Voir Plus
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <a href="{{ route('follow.auth') }}">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                                        <i class="fas fa-retweet"></i>
                                    </div>
                                    <h6 class="text-xl font-semibold">
                                        Suivre l'état d'un patient
                                    </h6>
                                    <p class="mt-2 mb-4 text-blueGray-500">
                                        Avec l'identifiant d'une demande vous pouvez suivre l'évolution de l'état d'un
                                        patient
                                    </p>
                                    <button type="button"
                                        class="bg-emerald-400 text-white text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                        Voir Plus
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <a href="{{ route('partner.create') }}">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                                        <i class="fas fa-fingerprint"></i>
                                    </div>
                                    <h6 class="text-xl font-semibold">
                                        Devenir partenaire
                                    </h6>
                                    <p class="mt-2 mb-4 text-blueGray-500">
                                        ONG, Hopital, particulier faites partie d'un mouvement en faveur du changement
                                        social
                                    </p>
                                    <button type="button"
                                        class="bg-lightBlue-400 text-white text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                        Voir Plus
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex flex-wrap items-center mt-32">
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <div
                            class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                            <i class="fas fa-user-friends text-xl"></i>
                        </div>
                        <h3 class="text-3xl mb-2 font-semibold leading-normal">
                            A PROPOS DE NOUS
                        </h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
                            Faites connaissance avec notre équipe extraordinaire de jeunes gens engagés
                            pour aider les personnes en difficultées à accéder aux soins médicaux dont elles ont
                            besoin.
                        </p>
                        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-blueGray-600">
                            Animés d'une même passion pour faire la différence, nous venons
                            d'horizons divers et apportons chacun un ensemble unique de compétences et de points de vue.
                            Ensemble, nous formons un mélange harmonieux de créativité, de détermination et de
                            compassion.
                        </p>
                    </div>
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-800">
                            <img alt="..." src="{{ asset('assets/img/team.jpeg') }}"
                                class="w-full align-middle rounded-t-lg" />
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                    class="absolute left-0 w-full block h-95-px -top-94-px">
                                    <polygon points="-30,95 583,95 583,65" class="text-blueGray-800 fill-current">
                                    </polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    Helen Keller
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    <q>Seuls, nous pouvons faire si peu ; ensemble, nous pouvons faire beaucoup</q>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative py-20">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 ml-auto mr-auto bg-pink-500 shadow-lg rounded-lg">
                        <img alt="..." src="{{ asset('assets/img/help.jpg') }}"
                            class="w-full align-middle rounded-t-lg" />
                        <blockquote class="relative p-8 mb-4">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                class="absolute left-0 w-full block h-95-px -top-94-px">
                                <polygon points="-30,95 583,95 583,65" class="text-pink-500 fill-current">
                                </polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                Auteur Inconnu
                            </h4>
                            <p class="text-md font-light mt-2 text-white">
                                <q>Demander de l'aide n'est pas un signe de faiblesse, mais une reconnaissance de notre
                                    humanité partagée et de notre interconnexion</q>
                            </p>
                        </blockquote>
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="">
                            <div
                                class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                                <i class="fas fa-heart text-xl"></i>
                            </div>
                            <h3 class="text-3xl font-semibold">Comment faire une demande d'aide ?</h3>
                            <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                                Vous devez nous communiquer certaines informations nécéssaires par un formulaire
                                accessible via le bouton ci dessous. Après une rapide vérification votre demande sera
                                publié et suivi. Vous serez régulièrement informé de l'évolution de votre demande.
                            </p>
                            <div class="mt-4 text-lg leading-relaxed text-blueGray-500">
                                <a href="{{ route('request.create') }}">
                                    <button
                                        class="bg-blueGray-800 mt-2 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                        Faire une demande
                                    </button>
                                </a>
                                <a href="{{ route('request.auth') }}">
                                    <button
                                        class="bg-blueGray-800 mt-2 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                        Suivre ma demande
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-20 relative block bg-blueGray-800">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
                id="contact" style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-800 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4 lg:pt-24 pt-12 lg:pb-64">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white">CONTACTEZ NOUS</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative block py-24 lg:pt-0 bg-blueGray-800">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center lg:-mt-64 -mt-24">
                    <div class="w-full lg:w-6/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200">
                            <div class="flex-auto p-5 lg:p-10">
                                <h4 class="text-2xl font-semibold">Vous souhaitez nous joindre ?</h4>
                                <p class="leading-relaxed mt-1 mb-4 text-blueGray-500">
                                    Remplissez ce formulaire et vous aurez une réponse en 24h.
                                </p>
                                <div class="relative w-full mb-3 mt-8">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="full-name">Nom et prénom</label><input type="text"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Nom et prénom" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="email">Email</label><input type="email"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Email" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="Objet">Objet</label><input type="text"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Objet" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="message">Message</label>
                                    <textarea rows="4" cols="80"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                        placeholder="Saisir un message..."></textarea>
                                </div>
                                <div class="text-center mt-6">
                                    <button
                                        class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        type="button">
                                        Envoyer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="relative bg-blueGray-200 pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
            style="transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-center lg:text-left">
                <div class="w-full lg:w-9/12 px-4">
                    <h4 class="text-3xl font-semibold">Faites une différence, faites un don!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
                        Aidez-nous à apporter un sourire aux visages des malades
                    </h5>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button type="button"
                            class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button type="button"
                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2">
                            <i class="fab fa-facebook-square"></i>
                        </button>
                        <button type="button"
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2">
                            <i class="fab fa-instagram"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-3/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full px-4 ml-auto">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Contact
                            </span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="mailto:contact@nonvizor.com"><i class="fas fa-mail-bulk"></i> &nbsp
                                        contact@nonvizor.com</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="tel:+22900112233"><i class="fas fa-mobile"></i> &nbsp +229 00 11 22
                                        33</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="{{ route('cgu') }}"><i class="fas fa-file-contract"></i> &nbsp Conditions d'utilisation</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-blueGray-300" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-blueGray-500 font-semibold py-1">
                        <span id="get-current-year"></span> NONVIZOR
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script>
    /* Make dynamic date appear */
    (function() {
        if (document.getElementById("get-current-year")) {
            document.getElementById("get-current-year").innerHTML =
                new Date().getFullYear();
        }
    })();
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
            element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
            placement: "bottom-start"
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
    }
</script>

</html>
