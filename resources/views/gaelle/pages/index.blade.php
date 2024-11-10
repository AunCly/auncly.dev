<?php

use App\Models\Article;
use App\Models\Project;
use function Laravel\Folio\name;

name('home');

// $articles = Article::whereHas('user', function($query){
//     $query->where('email', 'gaelle.henaf@gmail.com');
// })->where('is_published', 1)->orderBy('published_at', 'desc')->get();

$projects = Project::with('user')->whereHas('user', function($query){
    $query->where('email', 'gaelle.henaf@gmail.com');
})->get();



$qualities = [
    ['icon' => 'gears', 'title' => 'Logique'],
    ['icon' => 'eyes', 'title' => 'Curieuse'],
    ['icon' => 'brain-circuit', 'title' => 'Perspicace'],
    ['icon' => 'table-tree', 'title' => 'Structurée'],
    ['icon' => 'brightness', 'title' => 'Naturelle'],
    ['icon' => 'circle-bolt', 'title' => 'Dynamique'],
];

?>



@extends('gaelle_layout')

@section('content')
    <div
        class="bg-cover bg-center bg-[linear-gradient(to_bottom,rgba(250,250,250,1),rgba(250,250,250,0),rgba(250,250,250,1)),url('/public/images/gaelle/fond-test-1.jpg')] dark:bg-[linear-gradient(to_bottom,rgba(24,24,27,0),rgba(24,24,27,1)),url('/public/images/bg-dark.png')]">
        <div class="container mx-auto py-10">
            <div class="bg-max-w-7xl mx-auto flex flex-col justify-center sm:py-5 lg:pt-40 lg:pb-20 md:py-30">
                <h1 class="text-7xl font-title font-semibold mb-20 text-center lg:text-left">
                    <span class="hidden md:block lg:inline dark:text-zinc-50">Hello ! </span>
                    <span class="hidden md:block lg:inline dark:text-zinc-50">Je suis </span>
                    <span class="dark:text-zinc-50">Gaelle Henaf,</span>
                    <x-typing-gaelle />
                    <span class="hidden md:block lg:inline dark:text-zinc-50">vivant</span>
                    <span class="dark:text-zinc-50">à</span>
                    <span class="underline decoration-wavy decoration-red-600 dark:decoration-red-600 block lg:inline dark:text-zinc-50">La Rochelle</span>
                    <span class="dark:text-zinc-50">.</span>
                </h1>

                <!-- <div class="flex items-center justify-center gap-5 flex-col md:flex-row">
                    <button type="button"
                            class="hidden max-w-fit cursor-pointer whitespace-nowrap bg-transparent rounded-2xl border border-blue-700 p-4 text-sm font-medium tracking-wide text-blue-700 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-red-600 dark:text-red-600 dark:focus-visible:outline-red-600">
                        <i class="fa-duotone fa-download mr-2"></i> Télécharger mon CV
                    </button>
                    <ol class="flex gap-6 max-w-fit">
                        <li>
                            <a href="https://github.com/AunCly">
                                <i class="dark:text-red-600 text-red-600 text-3xl fa-brands fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/clugery-aurelien-697746b0/">
                                <i class="dark:text-red-600 text-red-600 text-3xl fa-brands fa-linkedin"></i>
                            </a>
                        </li>
                    </ol>
                </div> -->
            </div>
        </div>
    </div>

    <div class="md:justify-center max-w-7xl mx-auto grid grid-cols-3 p-5 gap-5">
        <div class="hover:saturate-0 col-span-1 h-80 rounded-lg bg-[url('/public/images/gaelle/gaelle-henaf.jpg')] bg-cover bg-center relative hover:rotate-0 rotate-2 ease-in-out transition-all duration-300 hover:before:ease-in-out hover:before:transition-all hover:before:duration-300 before:absolute before:rounded-lg before:left-0 before:right-0 before:top-0 before:z-10 before:h-full"></div>

        <div class="saturate-0 hover:saturate-100 col-span-2 h-80 rounded-lg bg-[url('/public/images/gaelle/books.avif')] bg-cover bg-center relative hover:rotate-3 ease-in-out transition-all duration-300 hover:before:ease-in-out hover:before:transition-all hover:before:duration-300 before:absolute before:rounded-lg before:left-0 before:right-0 before:top-0 before:z-10 before:h-full before:w-full"></div>
        <div class="saturate-0 hover:saturate-100 col-span-2 h-80 rounded-lg bg-[url('/public/images/gaelle/foot.png')] bg-cover bg-center relative hover:rotate-2 ease-in-out transition-all duration-300 hover:before:ease-in-out hover:before:transition-all hover:before:duration-300 before:absolute before:rounded-lg before:left-0 before:right-0 before:top-0 before:z-10 before:h-full before:w-full "></div>
        <div class="saturate-0 hover:saturate-100 col-span-1 h-80 rounded-lg bg-[url('/public/images/gaelle/code.jpg')] bg-cover bg-center relative hover:rotate-2 ease-in-out transition-all duration-300 hover:before:ease-in-out hover:before:transition-all hover:before:duration-300 before:absolute before:rounded-lg before:left-0 before:right-0 before:top-0 before:z-10 before:h-full before:w-full "></div>
        <!-- <div class="saturate-0 hover:saturate-100 col-span-3 h-80 rounded-lg bg-[url('/public/images/gaelle/foot.png')] bg-cover bg-center relative hover:rotate-2 ease-in-out transition-all duration-300 hover:before:ease-in-out hover:before:transition-all hover:before:duration-300 before:absolute before:rounded-lg before:left-0 before:right-0 before:top-0 before:z-10 before:h-full before:w-full "></div> -->
    </div>

    <div class="max-w-7xl mx-auto mt-32 p-5">
        <div class="flex justify-between">
            <h2 class="text-5xl font-title font-semibold dark:text-zinc-50">Mes projets</h2>
            <a href="{{ url('projects') }}" type="button"
               class="cursor-pointer whitespace-nowrap bg-transparent rounded-2xl border border-red-600 p-4 text-sm font-medium tracking-wide text-red-600 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-red-600 dark:text-red-600 dark:focus-visible:outline-red-600"><i
                    class="fa-duotone fa-arrow-right"></i> Voir tout les projets</a>
        </div>

        <div class="grid grid-cold-1 md:grid-cols-2 gap-5 mt-20">
            @foreach($projects->take(2) as $project)
                <a class="dark:bg-zinc-800 hover:transition-all hover:duration-300 bg-white hover:shadow-xl hover:shadow-red-600/10 rounded-xl p-5 hover:cursor-pointer"
                   href="{{ url('projects/' . $project->slug) }}">
                    <article class="flex flex-col">
                        <div
                            class="rounded-xl col-span-1 relative ease-in-out transition-all duration-300 hover:before:ease-in-out hover:before:transition-all hover:before:duration-300 before:absolute before:rounded-lg before:left-0 before:right-0 before:top-0 before:z-10 before:h-full before:w-full dark:hover:before:bg-transparent hover:before:bg-transparent dark:before:bg-red-300 before:bg-red-600 before:opacity-60">
                            <img alt="" src="{{ $project->getFirstMediaUrl('project_main') }}"
                                 class="rounded-xl w-auto h-auto">
                        </div>
                        <h3 class="dark:text-zinc-50 font-title text-4xl mt-5">{{ $project->title }}</h3>
                        <div class="mt-5">
                            <p class="font-title uppercase font-bold text-red-600 dark:text-red-600 mb-2">Date</p>
                            <p class="dark:text-zinc-50">{{ date('d/m/Y', strtotime($project->created_at)) }}</p>
                        </div>
                        <div class="mt-5">
                            <p class="font-title font-bold uppercase text-red-600 dark:text-red-600 mb-2">
                                Technologies</p>
                            @foreach($project->technologies as $technologie)
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium dark:bg-red-300 dark:text-zinc-900 bg-red-100 text-red-600"> {{ $technologie }} </span>
                            @endforeach
                        </div>
                        <p class="dark:text-zinc-50 mt-5">{{ $project->excerpt }}</p>
                        <button type="button"
                                class="self-end mt-5 max-w-fit cursor-pointer whitespace-nowrap bg-transparent rounded-2xl border border-red-600 px-4 py-2 text-sm font-medium tracking-wide text-red-600 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-red-600 dark:text-red-600 dark:focus-visible:outline-red-600">
                            <i class="fa-duotone fa-paper-plane mr-2"></i> Voir le projet
                        </button>
                    </article>
                </a>
            @endforeach
        </div>


        <div class="max-w-7xl mx-auto grid grid-cols-1 mt-5 lg:mt-32">
        <div class="items-center lg:col-span-4 grid grid-cols-1 md:col-span-2 col-span-2">
            <h2 class="text-5xl text-extrabold font-title py-5 col-span-2 font-semibold dark:text-zinc-50">En bref, je suis ...</h2>
        </div>

        <div class="mx-auto grid lg:grid-cols-6 gap-5 rounded-xl md:grid-cols-2 grid-cols-2 lg:rounded-xl md:rounded-none mt-6  justify-between">
            
                @foreach($qualities as $quality)
                    <div class="bg-white dark:bg-zinc-800 rounded-md p-5 flex flex-col">
                        <span class="dark:hidden text-center"><i
                                class="text-red-600 block my-3 text-center text-3xl fa-duotone fa-{{ $quality['icon'] }}"></i></span>
                        <span class="hidden dark:block text-center"><i
                                class="my-6 text-red-600 text-center text-3xl fa-duotone fa-{{ $quality['icon'] }}"></i></span>
                        <h3 class="text-center font-title font-semibold text-lg py-3  dark:text-zinc-50 px-6">{{ $quality['title'] }}</h3>
                    </div>
                @endforeach

        </div>
    </div>

    </div>

@endsection
