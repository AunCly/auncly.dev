<?php

use App\Models\Article;
use App\Models\Project;
use function Laravel\Folio\name;

name('home');

$articles = Article::where('is_published', 1)->orderBy('published_at', 'desc')->get();
$projects = Project::all();

?>

@extends('layout')

@section('content')
    <div class="bg-[linear-gradient(to_bottom,rgba(250,250,250,0),rgba(250,250,250,1)),url('/public/images/bg.jpg')] dark:bg-[linear-gradient(to_bottom,rgba(24,24,27,0),rgba(24,24,27,1)),url('/public/images/bg-dark.png')]">
        <div class="container mx-auto py-10">
            <div class="bg-max-w-7xl mx-auto flex flex-col justify-center sm:py-5 lg:py-60 md:py-30">
                <h1 class="text-7xl font-title font-semibold mb-20 text-center lg:text-left">
                    <span class="hidden md:block lg:inline dark:text-zinc-50">Hello ! </span>
                    <span class="hidden md:block lg:inline dark:text-zinc-50">Je suis </span>
                    <span class="dark:text-zinc-50">Aurélien Clugery,</span>
                    <x-typing/>
                    <span class="hidden md:block lg:inline dark:text-zinc-50">d'origine Pyrénéene vivant</span>
                    <span class="dark:text-zinc-50">à</span>
                    <span class="underline decoration-wavy decoration-blue-800 dark:decoration-blue-300 block lg:inline dark:text-zinc-50">La Rochelle</span>
                </h1>

                <div class="flex items-center justify-center gap-5 flex-col md:flex-row">
                    <button type="button" class="hidden max-w-fit cursor-pointer whitespace-nowrap bg-transparent rounded-2xl border border-blue-700 p-4 text-sm font-medium tracking-wide text-blue-700 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-blue-300 dark:text-blue-300 dark:focus-visible:outline-blue-300"><i class="fa-duotone fa-download mr-2"></i> Télécharger mon CV</button>
                    <ol class="flex gap-6 max-w-fit">
                        <li>
                            <a href="https://twitter.com/AunCly">
                                <i class="dark:text-blue-300 text-blue-800 text-3xl fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/AunCly">
                                <i class="dark:text-blue-300 text-blue-800 text-3xl fa-brands fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/clugery-aurelien-697746b0/">
                                <i class="dark:text-blue-300 text-blue-800 text-3xl fa-brands fa-linkedin"></i>
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="md:justify-center max-w-7xl mx-auto grid grid-cols-3 p-5 gap-5">
        <div class="col-span-1 h-80 rounded-lg bg-[url('/public/images/larochelle.jpeg')] bg-cover bg-center relative hover:rotate-2 ease-in-out transition-all duration-300 hover:before:ease-in-out hover:before:transition-all hover:before:duration-300 before:absolute before:rounded-lg before:left-0 before:right-0 before:top-0 before:z-10 before:h-full before:w-full hover:before:bg-transparent dark:hover:before:bg-transparent dark:before:bg-blue-300 before:bg-blue-800 before:opacity-60"></div>
        <div class="col-span-2 h-80 rounded-lg bg-[url('/public/images/climb.jpg')] bg-cover bg-center relative hover:rotate-3 ease-in-out transition-all duration-300 hover:before:ease-in-out hover:before:transition-all hover:before:duration-300 before:absolute before:rounded-lg before:left-0 before:right-0 before:top-0 before:z-10 before:h-full before:w-full hover:before:bg-transparent dark:hover:before:bg-transparent dark:before:bg-blue-300 before:bg-blue-800 before:opacity-60"></div>
        <div class="col-span-2 h-80 rounded-lg bg-[url('/public/images/mountain.jpg')] bg-cover bg-center relative hover:rotate-2 ease-in-out transition-all duration-300 hover:before:ease-in-out hover:before:transition-all hover:before:duration-300 before:absolute before:rounded-lg before:left-0 before:right-0 before:top-0 before:z-10 before:h-full before:w-full hover:before:bg-transparent dark:hover:before:bg-transparent dark:before:bg-blue-300 before:bg-blue-800 before:opacity-60"></div>
        <div class="col-span-1 h-80 rounded-lg bg-[url('/public/images/moi.jpeg')] bg-cover bg-center relative hover:rotate-2 ease-in-out transition-all duration-300 hover:before:ease-in-out hover:before:transition-all hover:before:duration-300 before:absolute before:rounded-lg before:left-0 before:right-0 before:top-0 before:z-10 before:h-full before:w-full hover:before:bg-transparent dark:hover:before:bg-transparent dark:before:bg-blue-300 before:bg-blue-800 before:opacity-60"></div>
        <div class="col-span-3 h-80 rounded-lg bg-[url('/public/images/computer.jpg')] bg-cover bg-center relative hover:rotate-2 ease-in-out transition-all duration-300 hover:before:ease-in-out hover:before:transition-all hover:before:duration-300 before:absolute before:rounded-lg before:left-0 before:right-0 before:top-0 before:z-10 before:h-full before:w-full hover:before:bg-transparent dark:hover:before:bg-transparent dark:before:bg-blue-300 before:bg-blue-800 before:opacity-60"></div>
    </div>

    <div class="max-w-7xl mx-auto mt-32 p-5">
        <div class="flex justify-between">
            <h2 class="text-5xl font-title font-semibold dark:text-zinc-50">Derniers articles</h2>
            <button type="button" class="hidden md:block cursor-pointer whitespace-nowrap bg-transparent rounded-2xl border border-blue-700 px-4 py-2 text-sm font-medium tracking-wide text-blue-700 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-blue-300 dark:text-blue-300 dark:focus-visible:outline-blue-800"><i class="fa-duotone fa-arrow-right"></i> Voir tout les articles</button>
        </div>
        <div class="mt-20">
            @foreach($articles->take(3) as $article)
                <a href="{{ route('post.show', ['slug' => $article->slug]) }}">
                    <article class="grid pb-10 mt-10 lg:grid-cols-3 md:gap-20 grid-cols-1 lg:col-span-2 md:col-span-1 sm:mt-10 border-b-zinc-200 dark:border-b-zinc-800 border-b-2">
                        <div class="col-span-1 hidden lg:block ">
                            <span class="text-sm uppercase dark:text-zinc-50 text-zinc-400 text-left">{{ date('d/m/Y', strtotime($article->published_at)) }}</span>
                            @foreach($article->categories as $category)
                                <p class="text-sm uppercase dark:text-zinc-50 text-zinc-400 text-left"> {{ $category->name }} </p>
                            @endforeach
                        </div>
                        <div class="col-span-2">
                            <span class="flex flex-col dark:text-zinc-50 text-left">
                                <span class="text-4xl font-title font-semibold">{{ $article['title'] }}</span>
                                <span class="text-lg md:text-left mt-5">{{ $article->excerpt }}</span>
                                <button type="button" class="mt-5 max-w-fit cursor-pointer whitespace-nowrap bg-transparent rounded-2xl border border-blue-700 px-4 py-2 text-sm font-medium tracking-wide text-blue-700 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-blue-300 dark:text-blue-300 dark:focus-visible:outline-blue-800"><i class="fa-duotone fa-paper-plane mr-2"></i> Lire l'article</button>
                            </span>
                        </div>
                    </article>

                </a>
            @endforeach
        </div>
        <div class="md:hidden mt-10">
            <button type="button" class="cursor-pointer whitespace-nowrap bg-transparent rounded-2xl border border-blue-700 px-4 py-2 text-sm font-medium tracking-wide text-blue-700 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-blue-300 dark:text-blue-300 dark:focus-visible:outline-blue-800"><i class="fa-duotone fa-arrow-right"></i> Voir tout les articles</button>
        </div>
    </div>

    <div class="max-w-7xl mx-auto mt-32 p-5">
        <div class="flex justify-between">
            <h2 class="text-5xl font-title font-semibold dark:text-zinc-50">Projets</h2>
            <button type="button" class="cursor-pointer whitespace-nowrap bg-transparent rounded-2xl border border-blue-700 px-4 py-2 text-sm font-medium tracking-wide text-blue-700 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-blue-300 dark:text-blue-300 dark:focus-visible:outline-blue-800"><i class="fa-duotone fa-arrow-right"></i> Voir tout les projets</button>
        </div>

        <div class="grid grid-cold-1 md:grid-cols-2 gap-5 mt-20">
            @foreach($projects->take(2) as $project)
                <a class="dark:bg-zinc-800 hover:transition-all hover:duration-300 bg-white hover:shadow-xl hover:shadow-blue-800/10 rounded-xl p-5 hover:cursor-pointer" href="{{ route('project.show', ['slug' => $project->slug]) }}">
                    <article class="flex flex-col">
                        <div class="rounded-xl col-span-1 relative ease-in-out transition-all duration-300 hover:before:ease-in-out hover:before:transition-all hover:before:duration-300 before:absolute before:rounded-lg before:left-0 before:right-0 before:top-0 before:z-10 before:h-full before:w-full dark:hover:before:bg-transparent hover:before:bg-transparent dark:before:bg-blue-300 before:bg-blue-800 before:opacity-60">
                            <img alt="" src="{{ $project->getFirstMediaUrl('project_main') }}" class="rounded-xl w-auto h-auto">
                        </div>
                        <h3 class="dark:text-zinc-50 font-title text-4xl mt-5">{{ $project->title }}</h3>
                        <div class="mt-5">
                            <p class="font-title uppercase font-bold text-blue-800 dark:text-blue-300 mb-2">Date</p>
                            <p class="dark:text-zinc-50">{{ date('d/m/Y', strtotime($project->created_at)) }}</p>
                        </div>
                        <div class="mt-5">
                            <p class="font-title font-bold uppercase text-blue-800 dark:text-blue-300 mb-2">Technologies</p>
                            @foreach($project->technologies as $technologie)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium dark:bg-blue-300 dark:text-zinc-900 bg-blue-100 text-blue-800"> {{ $technologie }} </span>
                            @endforeach
                        </div>
                        <p class="dark:text-zinc-50 mt-5">{{ $project->excerpt }}</p>
                        <button type="button" class="self-end mt-5 max-w-fit cursor-pointer whitespace-nowrap bg-transparent rounded-2xl border border-blue-700 px-4 py-2 text-sm font-medium tracking-wide text-blue-700 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-blue-300 dark:text-blue-300 dark:focus-visible:outline-blue-800"><i class="fa-duotone fa-paper-plane mr-2"></i> Voir le projet</button>
                    </article>
                </a>
            @endforeach
        </div>
    </div>

@endsection
