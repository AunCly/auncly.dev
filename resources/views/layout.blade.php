<?php

    $menus = [
        'a-propos' => [
            'title' => 'A propos',
			'url' => route('about'),
        ],
        'expériences' => [
            'title' => 'Blog',
			'url' => route('articles'),
		],
        'projets' => [
            'title' => 'Projets',
			'url' => route('projects'),
		],
    ];

?>

<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>Auncly - Développeur Fullstack</title>
    <meta name="title" content="Auncly - Développeur Fullstack" />
    <meta name="description" content="Hello ! Je suis Aurélien Clugery,
développeur fulltstack
d'origine Pyrénéenne vivant à La Rochelle" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://auncly.dev/" />
    <meta property="og:title" content="Auncly - Développeur Fullstack" />
    <meta property="og:description" content="Hello ! Je suis Aurélien Clugery,
développeur fulltstack
d'origine Pyrénéenne vivant à La Rochelle" />
    <meta property="og:image" content="https://metatags.io/images/meta-tags.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://auncly.dev/" />
    <meta property="twitter:title" content="Auncly - Développeur Fullstack" />
    <meta property="twitter:description" content="Hello ! Je suis Aurélien Clugery,
développeur fulltstack
d'origine Pyrénéenne vivant à La Rochelle" />
    <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" />

    <!-- Meta Tags Generated with https://metatags.io -->

	<!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

	<script src="https://kit.fontawesome.com/27ec9a7a74.js" crossorigin="anonymous"></script>

</head>
<body class="bg-zinc-50 dark:bg-zinc-900">
	<div class="container mx-auto md:py-10">
		<nav class="grid md:grid-cols-2 grid-cols-1 p-3" aria-label="Breadcrumb">
			<a href="{{ url('/') }}" class="md:justify-self-start md:flex md:flex-col hidden">
				<span class="text-3xl font-title dark:text-zinc-50">Auncly</span>
				<span class="text-3xl md:text-sm dark:text-zinc-50">Développeur Web et mobile</span>
			</a>
			<ul role="list" class="flex md:justify-end justify-center items-center">
				<li>
					<div>
						<a href="/" class="text-xl dark:hover:text-blue-300 dark:text-zinc-50 text-black hover:text-blue-800">
							<i class="fa-solid fa-home"></i>
							<span class="sr-only">Home</span>
						</a>
					</div>
				</li>

				@foreach($menus as $alias => $menu)
					<li>
						<div class="flex items-center">
							<a href="{{ $menu['url'] }}" class="font-title text-xl ml-4 dark:text-zinc-50 font-normal dark:hover:text-blue-300 text-black-500 hover:text-blue-800">{{ $menu['title'] }}</a>
						</div>
					</li>
				@endforeach

				<li>
					<div class="flex items-center">
						<div class="px-5">
							<a class="text-xl enable-dark-mode dark:hidden light:inline text-black-500 hover:text-blue-800 font-medium dark:text-red-400 dark:hover:text-gray-500" href="#!">
								<i class="dark:hidden dark:text-zinc-50 fa-solid fa-moon"></i>
							</a>
							<a class="text-xl dark:hover:text-blue-300 disable-dark-mode dark:inline hidden text-black-500 font-medium dark:text-blue-400" href="#!">
								<i class="dark:inline dark:hover:text-blue-300 dark:text-zinc-50 fa-solid fa-sun"></i>
							</a>
						</div>
					</div>
				</li>
			</ul>
		</nav>
	</div>

    @yield('content')

	<div class="my-10 w-full mx-auto lg:px-8 border-t-2 dark:border-t-0 border-zinc-50">
		<p class="mt-8 text-center text-base text-gray-400">Made with <i class="fa-solid fa-heart text-red-600"></i> and <i class="fa-light fa-code dark:text-zinc-50 text-gray-950"></i> by Auncly.</p>
	</div>

	@vite('resources/js/app.js')

    <script>
        // Dark mode
        const darkMode = document.querySelector('.dark');
        const enableDarkMode = document.querySelector('.enable-dark-mode');
        const disableDarkMode = document.querySelector('.disable-dark-mode');

        enableDarkMode.addEventListener('click', () => {
            darkMode.classList.add('dark');
            localStorage.setItem('darkMode', 'enabled');
        });

        disableDarkMode.addEventListener('click', () => {
            darkMode.classList.remove('dark');
            localStorage.setItem('darkMode', null);
        });

        if (localStorage.getItem('darkMode') === 'enabled') {
            darkMode.classList.add('dark');
        }
        else{
            darkMode.classList.remove('dark');
        }
    </script>

</body>
</html>
