<?php

use Illuminate\Routing\Route;
use Illuminate\View\View;
use function Laravel\Folio\name;
use function Laravel\Folio\render;

name('about');

$hobbies = [
    ['icon' => 'books', 'title' => 'Lecture'],
    ['icon' => 'puzzle-piece', 'title' => 'Jeux vidéos & Jeux de société'],
    ['icon' => 'tv-retro', 'title' => 'Séries / Films'],
    ['icon' => 'wave-pulse', 'title' => 'Sports'],
    ['icon' => 'child-reaching', 'title' => 'Enfants'],
    ['icon' => 'hands', 'title' => 'Crochet, Bricolage'],
];

$tools = [
    ['icon' => 'chart-mixed', 'title' => 'Data Analyse & Data Viz\'', 'tools' => 'Excel, Google Sheet, SQL, Python, R, RStudio, Tableau'],
    ['icon' => 'code', 'title' => 'Wordpress & Dev', 'tools' => 'Sublime Text, Infomaniak, OVH, Mamp, Php, Divi, Tailwind'],
    ['icon' => 'chair-office', 'title' => 'Matériel', 'tools' => 'Mackbook Pro, Souris Logitech Pop & une bonne connexion internet'],
    ['icon' => 'head-side-brain', 'title' => 'Design et Productivité', 'tools' => 'Mes listes sur Post-Its, Adobe Illustrator, Canva'],
];

$softskills = [
    ['icon' => 'gears', 'title' => 'Optimiser'],
    ['icon' => 'thought-bubble', 'title' => 'Imaginer & Créer'],
    ['icon' => 'file-contract', 'title' => 'Synthétiser'],
    ['icon' => 'files', 'title' => 'Gérer des projets'],
    ['icon' => 'person-chalkboard', 'title' => 'Former'],
    ['icon' => 'people-simple', 'title' => 'Travailler seule & en équipe'],
];

$experiences = [
    [
        'image' => 'images/works/rhinos.png',
        'title' => 'Associée dans la création d’une Start Up',
        'company' => 'Studio Henry',
        'date' => '2023 - Maintenant / 1 an',
        'place' => 'Niort (79)',
        'missions' => [
            'Gestion de l’administratif dont la comptabilité',
            'Création de graphisme pour l\'application, le web et la communication',
            'Intégration du site sur Laravel avec Tailwind',
        ],
    ],
    [
        'image' => 'images/works/oddn.svg',
        'title' => 'Auto entrepreneuse',
        'company' => 'GH',
        'date' => '2019 à aujourd\'hui / 5 ans',
        'place' => 'La Rochelle (17)',
        'missions' => [
            'Accompagner les clients dans leur stratégie de communication',
            'Créer, héberger et maintenir des sites internets',
            'Assurer la gestion d’une entreprise',
        ],
    ],
    [
        'image' => 'images/works/agencehorizon.png',
        'title' => 'Formatrice',
        'company' => 'Sylvan Formations',
        'date' => '2019 à 2024 / 5 ans',
        'place' => 'La Rochelle (17)',
        'missions' => [
            'Animer des formations individuelles et collectives pour adultes',
            'Excel, Wordpress, Illustrator, HMTL, CSS, PHP'
        ],
    ],
    [
        'image' => 'images/works/agencehorizon.png',
        'title' => 'Développeuse Web',
        'company' => 'e-nitiatives groupe / e-dweb',
        'date' => '2017 à 2019 / 2 ans',
        'place' => 'La Rochelle (17)',
        'missions' => [
            'Créer des maquetes graphiques et autres graphismes',
            'Créer des sites internets', 
            'Gérer les clients de l’expression du besoin à la livraison',
        ],
    ],
    [
        'image' => 'images/works/agencehorizon.png',
        'title' => 'Intégratrice web',
        'company' => 'la petite boite',
        'date' => '2016 à 2017 / 1 an',
        'place' => 'La Rochelle (17)',
        'missions' => [
            'Créer des sites web sur maquettes graphiques existantes',
        ],
    ],
    [
        'image' => 'images/works/agencehorizon.png',
        'title' => 'Apprentie Chargée d\'Affaires',
        'company' => 'GrDF',
        'date' => '2013 à 2015 / 2 ans',
        'place' => 'Nantes (44)',
        'missions' => [
            'Suivi de chantier',
            'Missions transverses : Retrouver et répertorier d’anciens réseaux', 
            'Formations d\'agents à la mise en services de nouveaux réseaux',
        ],
    ],
];

$formations = [
    [
        'title' => ' Data Analyst',
        'option' => 'Certification Google',
        'school' => 'Coursera',
        'place' => 'en ligne',
        'date' => '2024',
    ],
    [
        'title' => 'BAC +2 Développeur Web Junior',
        'option' => 'Option Informatique avancée',
        'school' => 'Open Classrooms',
        'place' => 'en ligne',
        'date' => '2017',
    ],
    [
        'title' => 'BTS Assistant Technique d\’Ingénieur',
        'option' => 'en alternance',
        'school' => 'Cipecma - GrDF',
        'place' => 'La Rochelle (17) - Nantes (44)',
        'date' => '2015',
    ],
];

?>

@extends('gaelle_layout')

@section('content')
    
    <!-- <div class="p-5 mt-5  max-w-7xl mx-auto grid grid-cols-1 lg:items-center lg:justify-items-start md:justify-items-center">
        <div class="py-10 col-span-1 w-96 float-left    ">
            <img class="rounded-3xl" src="/images/gaelle/gaelle-henaf.jpg" alt="">
        </div>
    </div> -->

    <div class="p-5 mt-5 max-w-7xl mx-auto grid grid-cols-1 lg:items-center lg:justify-items-start md:justify-items-center">
        <h2 class="dark:text-zinc-50 text-5xl font-title lg:col-span-3 col-span-1 font-semibold text-left">En bref</h2>
        <div class="lg:col-span-2 col-span-1lg:p-0">
            <div class="py-10 col-span-1 w-96 float-right ml-10">
                <img class="rounded-3xl" src="/images/gaelle/gaelle-henaf.jpg" alt="">
            </div>
            <p class="dark:text-zinc-50 text-zinc-600 font-normal py-5 md:text-base">
                Gaëlle, 30 ans, 1 enfant, 1 twingo rouge, rochelaise vivant à coté de La Rochelle (17).
            </p>
            <p class="dark:text-zinc-50 text-zinc-600 py-5 md:text-base">
                J'ai grandi avec mes parents et mes deux grands freres aux alentours de La Rochelle tout d'abord puis 3 ans en Nouvelle Caledonie. Après quelques cabanes, copains, baignades et noix de coco, nous sommes rentrés en France.
            </p>
            <p class="dark:text-zinc-50 text-zinc-600 py-5 md:text-base">
                Passionnée depuis toujours de maths, de logique et de sciences mais surtout curieuse d'apprendre tout ce qu'il est possible d'apprendre. 
                Wikipédia est mon ami. J'aime me cultiver mais aussi apprendre de nouvelles compétences. J'ai passé mon permis moto, j'ai appris le crochet, j'ai essayé d'apprendre à peindre, j'aimerais apprendre le piano, et plus si affinités. 
            </p>
            <p class="dark:text-zinc-50 text-zinc-600 py-5 md:text-base">
                Au niveau scolaire je me suis naturellement orientée vers un Bac S, spécialité mathématiques à la fois car j'adorais ca mais aussi pour me laisser le plus de portes ouvertes. Puis je me suis dirigée vars un DUT de Statistiques que j'ai malheureusement du abandonner pour des raisons personelles.<br>
                Je me suis ensuite inscrite à la faculté de La Rochelle en Informatique afin de ne pas perdre mon année. Après validation de ma première année, je me suis redirigée vers un BTS Assistant Technique Ingénieur car j'avais besoin de quelques choses de plus concret de la fac.<br>
                Ma matière préférée : la programmation d'automates. Donc je me suis intéressée à la programmation informatique à la fin de mon BTS qui allait à la fois les connaissances acquises lors de mon année de face et lors de mon BTS. 
            </p>
            <p class="dark:text-zinc-50 text-zinc-600 py-5 md:text-base">
                C'est ainsi que j'obtient mon premier poste d'intégratrice de maquettes travaillant en binome avec deux graphismes. 
                Cela m'a permis d'acquérir les compétences graphiques qui manquait à l'épanouissmenet de mon côté créatif.
            </p>
            <p class="dark:text-zinc-50 text-zinc-600 py-5 md:text-base">
                2023 - en plein tournant professionnel - je questionne et je me dirige vers un bilan de compétences. Les sites c'est bien mais j'ai fait le tour. Il me fautun nouveau challenge et pourquoi pas revenir aux bases ; mes études de statistiques ! Avec en plus mon stack technique, un  nouveau métier s'impose : La Data Analyse ! Le bilan de compétences valide cet orientation, je me redirige donc vers un formation pour complétencer mes compétences. Et me voici postulant en Data Analyst aux alentours de La Rochelle et Niort. 
            </p>
        </div>
    </div>

    <div class="p-5 max-w-7xl mx-auto grid grid-cols-1 mt-5 lg:mt-32">
        <div class="items-center lg:col-span-4 grid grid-cols-1 md:col-span-2 col-span-2">
            <h2 class="text-5xl text-extrabold font-title py-5 col-span-2 font-semibold dark:text-zinc-50">Compétences</h2>
        </div>

        <div class="items-center lg:col-span-4 grid grid-cols-1 md:col-span-2 col-span-2">
            <h3 class="text-4xl text-extrabold font-title py-5 col-span-2 font-semibold dark:text-zinc-50">Techniques</h3>
        </div>

        <div class="mx-auto grid lg:grid-cols-4 gap-5 rounded-xl md:grid-cols-2 grid-cols-2 lg:rounded-xl md:rounded-none mt-6">

            @foreach($tools as $tool)
                <div class="bg-white dark:bg-zinc-800 rounded-md p-5 flex flex-col">
                    <span class="dark:hidden text-center"><i
                            class="text-red-600 block my-10 text-center text-5xl fa-duotone fa-{{ $tool['icon'] }}"></i></span>
                    <span class="hidden dark:block text-center"><i
                            class="my-10 text-red-600 text-center text-5xl fa-duotone fa-{{ $tool['icon'] }}"></i></span>
                    <h3 class="text-center font-title font-semibold text-xl py-5 dark:text-zinc-50">{{ $tool['title'] }}</h3>
                    <p class="text-center font-raleway dark:text-zinc-50">{{ $tool['tools'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="items-center lg:col-span-4 grid grid-cols-1 md:col-span-2 col-span-2 mt-3 lg:mt-10">
            <h3 class="text-4xl text-extrabold font-title py-5 col-span-2 font-semibold dark:text-zinc-50">Transverses</h3>
        </div>

        <div class="mx-auto grid lg:grid-cols-6 gap-5 rounded-xl md:grid-cols-2 grid-cols-2 lg:rounded-xl md:rounded-none mt-6">
            
                @foreach($softskills as $softskill)
                    <div class="bg-white dark:bg-zinc-800 rounded-md p-5 flex flex-col">
                        <span class="dark:hidden text-center"><i
                                class="text-red-600 block my-6 text-center text-3xl fa-duotone fa-{{ $softskill['icon'] }}"></i></span>
                        <span class="hidden dark:block text-center"><i
                                class="my-6 text-red-600 text-center text-3xl fa-duotone fa-{{ $softskill['icon'] }}"></i></span>
                        <h3 class="text-center font-title font-semibold text-lg py-3  dark:text-zinc-50">{{ $softskill['title'] }}</h3>
                    </div>
                @endforeach

        </div>
    </div>


    <div class="max-w-7xl mx-auto mt-5 lg:mt-32 p-5">
        <h2 class="text-5xl font-title font-semibold dark:text-zinc-50">Expériences</h2>
        <div class="lg:mt-20">
            @foreach($experiences as $experience)
                <div
                    class="grid grid-cols-1 lg:grid-cols-3 lg:mt-20 py-10 lg:py-0 border-b-2 border-b-zinc-800 lg:border-0 lg:gap-20">
                    <div class="col-span-1">
                        <span
                            class="text-sm uppercase dark:text-zinc-50 text-zinc-400 text-left">{{ $experience['date'] }}</span>
                        <br>
                        <span><i class="dark:text-zinc-50 text-zinc-400 fa-duotone fa-location-dot mt-2"></i> <span
                                class="text-sm dark:text-zinc-50 text-zinc-400">{{ $experience['place'] }}</span></span>
                    </div>
                    <div class="col-span-1 lg:col-span-2">
                        <div class="flex flex-col">
                            <span class="flex flex-col dark:text-zinc-50 text-left mt-5 lg:mt-0">
                                <span class="text-4xl font-title font-semibold">{{ $experience['title'] }}</span>
                                <span
                                    class="text-xl font-title font-semibold dark:text-red-600 text-red-600 text-left mt-5">{{ $experience['company'] }}</span>
                            </span>
                            <ul class="list-disc list-inside mt-5">
                                @foreach($experience['missions'] as $mission)
                                    <li class="mt-1 dark:text-zinc-50">{{ $mission }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="max-w-7xl mx-auto mt-5 lg:mt-32 p-5">
        <h2 class="text-5xl font-title font-semibold dark:text-zinc-50">Formations</h2>
        <div class="lg:mt-20">
            @foreach($formations as $formation)

                <div
                    class="grid grid-cols-1 lg:grid-cols-3 lg:mt-20 py-10 lg:py-0 border-b-2 border-b-zinc-800 lg:border-0 lg:gap-20">
                    <div class="col-span-1">
                        <span
                            class="text-sm uppercase dark:text-zinc-50 text-zinc-400 text-left">{{ $formation['date'] }}</span>
                        <br>
                        <span><i class="dark:text-zinc-50 text-zinc-400 fa-duotone fa-location-dot mt-2"></i> <span
                                class="text-sm dark:text-zinc-50 text-zinc-400">{{ $formation['place'] }}</span></span>
                    </div>
                    <div class="col-span-1 lg:col-span-2">
                        <div class="flex flex-col dark:text-zinc-50 text-left mt-5 lg:mt-0">
                            <p class="text-4xl font-title font-semibold">{{ $formation['title'] }}</p>
                            <p class="text-xl font-title font-semibold dark:text-red-600 text-red-600 text-left mt-5">{{ $formation['school'] }}</p>
                            <p class="text-sm italic dark:text-zinc-50 mt-2">{{ $formation['option'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="max-w-7xl mx-auto mt-5 lg:mt-32 p-5">
        <h3 class="text-5xl font-title font-semibold text-left dark:text-zinc-50">Centres d'intêrets</h3>
        <div class="grid grid-cols-2 lg:grid-cols-6 lg:gap-5 gap-5 md:gap-10 mt-5">
            @foreach($hobbies as $hobby)
                <div class="bg-white dark:bg-zinc-800 rounded-md p-5 flex flex-col">
                    <span class="dark:hidden text-center"><i
                            class="text-red-600 block my-10 text-center text-5xl fa-duotone fa-{{ $hobby['icon'] }}"></i></span>
                    <span class="hidden dark:block text-center"><i
                            class="my-10 text-red-600 text-center text-5xl fa-duotone fa-{{ $hobby['icon'] }}"></i></span>
                    <h3 class="text-center font-title font-semibold text-xl py-5 dark:text-zinc-50">{{ $hobby['title'] }}</h3>
                </div>
            @endforeach
        </div>
    </div>

@endsection
