<?php
use function Laravel\Folio\name;

name('about');

$hobbies = [
    ['icon' => 'mountain', 'title' => 'Escalade'],
    ['icon' => 'game-console-handheld', 'title' => 'Jeux vidéos'],
    ['icon' => 'block-brick', 'title' => 'Légo'],
    ['icon' => 'person-snowboarding', 'title' => 'Skateboard'],
    ['icon' => 'code', 'title' => 'CodinGame'],
    ['icon' => 'atom', 'title' => 'Sciences physiques'],
];

$tools = [
    ['icon' => 'code', 'title' => 'Outils de développement web', 'tools' => 'Php, Laravel, Mysql, Docker, Phpstorm, Html, Css, Tailwind'],
    ['icon' => 'mobile', 'title' => 'Outils de développement mobile', 'tools' => 'Dart, Flutter, Android Studio'],
    ['icon' => 'chair-office', 'title' => 'Matériel', 'tools' => 'MacBook Pro M1 16", Magic Mouse, Double écrans, Casque Marshall'],
    ['icon' => 'palette', 'title' => 'Design et Productivité', 'tools' => 'Figma, Adobe Photoshop, Adobe Illustrator, Notion'],
];

$experiences = [
    [
        'image' => 'images/works/rhinos.png',
        'title' => 'CDI Développeur Web',
        'company' => 'Groupe Rhinos',
        'date' => 'Août 2017 - Maintenant',
	    'place' => 'La Rochelle (17)',
		'missions' => [
            'Maintenance et mises à jour de la plateforme Stimbiz',
			'Développements spécifiques et scripts de mises à jours',
			'Développement d\'API pour application mobile, et application front-end',
			'Formateur en interne au framework Laravel',
			'Développement et maintenance de la base socle et d\'outils à destination des développeurs'
		],
	],
    [
        'image' => 'images/works/oddn.svg',
        'title' => 'CDI Développeur Web',
        'company' => 'Des images et des mots',
        'date' => 'Nov 2014 à Nov 2016',
	    'place' => 'Redon (35)',
        'missions' => [
            'Maintenance et mises à jour de la plateforme OnDonneDesNouvelles',
            'Refonte, maintenance et mises à jour de la plateforme TouteMonAnnee',
            'Maintenance et mises à jour d\'outils de gestion d\'administration et de comptabilité',
        ],
    ],
    [
        'image' => 'images/works/agencehorizon.png',
        'title' => 'Stage Développeur Web',
        'company' => 'Agence Horizon',
        'date' => 'Avril 2014 à Septembre 2014',
	    'place' => 'Quimper (29)',
        'missions' => [
            'Conception de sites sous Wordpress',
            'Conception de plugin pour Wordpress',
            'Maintenance et mises à jour de sites web sous Wordpress',
        ],
    ],
];

$formations = [
    [
        'title' => 'Licence professionnelle conception multimédia',
	    'option' => 'Option gestion de projet Multimédia',
	    'school' => 'IUT de Bayonne et du pays basque',
	    'place' => 'Anglet (64)',
    ],
    [
        'title' => 'DUT Services et réseaux de communication',
        'option' => 'Option Informatique avancée',
        'school' => 'IUT Paul Sabatier Toulouse III',
        'place' => 'Tarbes (65)',
    ],
    [
        'title' => 'Baccalauréat Scientifique',
        'option' => 'Option Physique Chimie',
        'school' => 'Lycée Michelet',
        'place' => 'Lannemezan (65)',
    ],
];

?>

@extends('layout')

@section('content')

	<div class="max-w-7xl mx-auto grid lg:grid-cols-3 grid-cols-1 lg:items-center md:px-5 lg:justify-items-start md:justify-items-center p-5">
		<h2 class="dark:text-zinc-50 text-5xl font-dosis py-5 lg:col-span-3 col-span-1 font-semibold text-center lg:text-left">En bref</h2>
		<div class="lg:pr-40 lg:col-span-2 col-span-1 lg:order-1 order-2 lg:p-0 p-5">
			<p class="dark:text-zinc-50 text-zinc-600 font-normal py-5 font-raleway md:text-lg">
				Je suis Aurélien Clugery (AunCly) développeur web d’origine pyrénéenne vivant à La Rochelle (17).
			</p>
			<p class="dark:text-zinc-50 text-zinc-600 py-5 font-raleway md:text-lg">
				J’ai grandi dans la vallée d’Aure, dans un petit village non loin de Saint-Lary Soulan. C’est donc au milieu des montagnes que je passe le plus clair de mon enfance et de mon adolescence. Plus tard les études et le travail m’éloigneront de cette région pour rejoindre le Pays Basque, puis la Bretagne et je finirais par arriver et m’installer à La Rochelle.
			</p>
			<p class="dark:text-zinc-50 text-zinc-600 py-5 font-raleway md:text-lg">
				Je suis passionné depuis toujours de sciences et d’informatique, et depuis mes études, par la programmation informatique. Lors de mes années lycée, je m’initie au développement à l’aide de langages comme java et python.
			</p>
			<p class="dark:text-zinc-50 text-zinc-600 py-5 font-raleway md:text-lg">
				Puis c’est lors de mes études supérieures que j’approfondis mes connaissances en programmation et que j’apprends les bases de la conception de site web (Réseaux, serveur, IHM, Algorithmie, Base de donnée et Php).
			</p>
			<p class="dark:text-zinc-50 text-zinc-600 py-5 font-raleway md:text-lg">
				Je travaille depuis maintenant 6 ans à la conception et à la maintenance de sites ou d’API web, principalement côté Back-End, ce qui ne m’empêche pas de pouvoir intervenir aussi côté Front-End.
			</p>
		</div>
		<div class="py-10 col-span-1 order-1 md:h-96 md:w-96 md:py-0 lg:order-2">
			<img class="rounded-3xl" src="/images/moi.jpeg" alt="">
		</div>
	</div>

	<div class="dark:bg-zinc-800 lg:p-20 lg:my-40 max-w-7xl mx-auto grid lg:grid-cols-4 gap-5 bg-white p-5 rounded-xl md:grid-cols-2 grid-cols-1 lg:rounded-xl md:rounded-none">

		<div class="items-center lg:col-span-4 grid grid-cols-1 md:col-span-2 col-span-1">
			<h2 class="text-5xl text-extrabold font-dosis py-5 col-span-2 font-semibold text-center dark:text-zinc-50">Stack technique</h2>
			<p class="col-span-2 text-gray-400 font-raleway text-center dark:text-zinc-200">Liste de soutils et logiciels que j'utilise au quotidien dans mon travail ou mes projets personnels.</p>
		</div>

		@foreach($tools as $tool)
			<div class="border-2 border-zinc-100 rounded-md p-5 flex flex-col">
				<span class="dark:hidden text-center"><i class="text-indigo-600 block my-10 text-center text-5xl fa-duotone fa-{{ $tool['icon'] }}"></i></span>
				<span class="hidden dark:block text-center"><i class="my-10 text-indigo-300 text-center text-5xl fa-duotone fa-{{ $tool['icon'] }}"></i></span>
				<h3 class="text-center font-dosis font-bold text-xl py-5 dark:text-zinc-50">{{ $tool['title'] }}</h3>
				<p class="text-center font-raleway dark:text-zinc-50">{{ $tool['tools'] }}</p>
			</div>
		@endforeach

	</div>

	<div class="flex flex-col">
		<div class="max-w-7xl mx-auto grid lg:grid-cols-3 md:gap-20 grid-cols-1 p-5">
			<div class="lg:col-span-2 md:col-span-1">
				<h2 class="text-5xl font-dosis lg:py-0 py-5 font-semibold text-center lg:text-left dark:text-zinc-50">Expériences</h2>

				@foreach($experiences as $experience)
					<div class="flex flex-col md:flex-row mt-5 dark:bg-zinc-800 bg-white p-5 rounded-xl">
						<div class="mr-4 flex-shrink-0 self-center">
							<img class="bg-white rounded-xl w-16" src="{{ $experience['image'] }}" alt="">
						</div>
						<div class="flex flex-col">
							<span class="flex flex-col dark:text-zinc-50 text-center md:text-left">
								<span class="text-md font-bold">{{ $experience['title'] }}</span>
								<span class="hidden"> - </span>
								<span class="md:text-left">
									<span>{{ $experience['company'] }}</span>
									<span>-</span>
									<span>{{ $experience['place'] }}</span>
								</span>
							</span>
							<span class="text-xs dark:text-zinc-50 text-zinc-400 text-center md:text-left">{{ $experience['date'] }}</span>
							<ul class="md:list-disc md:list-inside mt-5">
								@foreach($experience['missions'] as $mission)
									<li class="mt-1 dark:text-zinc-50">{{ $mission }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				@endforeach

			</div>
			<div class="grid grid-cols-1 gap-5">
				<div class="col-span-1">
					<h3 class="text-5xl font-dosis py-5 lg:py-0 font-semibold text-center lg:text-left dark:text-zinc-50">Formations</h3>

					@foreach($formations as $formation)
						<div class="rounded-xl mt-5 lg:bg-transparent bg-white dark:bg-zinc-800 lg:p-5 ounded-xl dark:text-zinc-50">
							<p class="font-raleway font-bold text-lg">{{ $formation['title'] }}</p>
							<p class="text-sm italic dark:text-zinc-50">{{ $formation['option'] }}</p>
							<p><span class="md:block dark:text-zinc-50">{{ $formation['school'] }}</span><span class="hidden"> - </span><span class="block md:inline"><i class="fa-duotone fa-location-dot"></i> {{ $formation['place'] }}</span></p>
						</div>
					@endforeach
				</div>
				<div class="col-span-1">
					<h3 class="text-5xl font-dosis py-5 font-semibold text-center lg:text-left dark:text-zinc-50">Centres d'intrêrets</h3>
					<ul class="lg:list-disc lg:list-inside grid lg:grid-cols-1 grid-cols-1 md:grid-cols-3 list-none lg:gap-2 gap-5">
						@foreach($hobbies as $hobby)
							<li class="lg:bg-transparent lg:dark:bg-transparent bg-white dark:bg-zinc-800 lg:p-0 p-5 rounded-xl">
	                            <i class="block md:hidden fa-duotone dark:text-zinc-50 fa-{{ $hobby['icon'] }}"></i>
	                            <span class="dark:text-zinc-50">{{ $hobby['title'] }}</span>
	                        </li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>

	</div>

@endsection
