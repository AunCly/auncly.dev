<?php

use App\Models\Article;
use function Laravel\Folio\name;

name('home');

$articles = Article::all();

?>

@extends('layout')

@section('content')
    <div class="container mx-auto py-10">
        <div class="bg-max-w-7xl mx-auto flex flex-col justify-center lg:py-60 md:py-30">
            <h1 class="text-7xl font-dosis font-semibold mb-20 text-center lg:text-left">
                <span class="hidden md:block lg:inline dark:text-zinc-50">Hello ! </span>
                <span class="hidden md:block lg:inline dark:text-zinc-50">Je suis </span>
                <span class="dark:text-zinc-50">Aurélien Clugery,</span>
                <span class="text-indigo-600 dark:text-indigo-300">développeur web et mobile</span>
                <span class="hidden md:block lg:inline dark:text-zinc-50">d'origine Pyrénéene vivant</span>
                <span class="dark:text-zinc-50">à</span>
                <span class="underline decoration-wavy block lg:inline dark:text-zinc-50">La Rochelle</span>
            </h1>

            <div class="flex items-center justify-center gap-5 flex-col md:flex-row">
                <button
                    class="border border-2 text-indigo-600 dark:text-indigo-300 dark:border-indigo-300 border-indigo-600 rounded-xl max-w-fit p-4">
                    <i class="fa-duotone fa-download"></i> Télécharger mon CV
                </button>
                <ol class="flex gap-6 max-w-fit">
                    <li><a class="" href="https://twitter.com/AunCly"><i
                                class="dark:text-indigo-300 text-indigo-600 text-3xl fa-brands fa-twitter"></i></a></li>
                    <li><a class="" href="https://github.com/AunCly"><i
                                class="dark:text-indigo-300 text-indigo-600 text-3xl fa-brands fa-github"></i></a></li>
                    <li><a class="" href="https://www.linkedin.com/in/clugery-aurelien-697746b0/"><i
                                class="dark:text-indigo-300 text-indigo-600 text-3xl fa-brands fa-linkedin"></i></a>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div
        class="md:my-20 flex md:justify-center max-w-8xl md:grid-cols-5 overflow-hidden mx-auto grid grid-cols-2 p-5 gap-5">
        <div
            class="lg:h-64 lg:w-64 md:w-32 md:h-32 h-48 rounded-3xl md:rotate-2 bg-[url('/public/images/larochelle.jpeg')] bg-cover bg-center"></div>
        <div
            class="lg:h-64 lg:w-64 md:w-32 md:h-32 h-48 rounded-3xl md:-rotate-2 bg-[url('/public/images/climb.jpg')] bg-cover bg-center"></div>
        <div
            class="lg:h-64 lg:w-64 md:w-32 md:h-32 h-48 rounded-3xl md:rotate-2 bg-[url('/public/images/moi.jpeg')] bg-cover bg-center"></div>
        <div
            class="lg:h-64 lg:w-64 md:w-32 md:h-32 h-48 rounded-3xl md:rotate-3 bg-[url('/public/images/mountain.jpg')] bg-cover bg-center"></div>
        <div
            class="lg:h-64 lg:w-64 md:w-32 md:h-32 h-48 rounded-3xl md:-rotate-2 bg-[url('/public/images/computer.jpg')] bg-cover bg-center"></div>
    </div>

    <div class="lg:my-40 md:my-20 max-w-7xl mx-auto grid lg:grid-cols-3 gap-5 md:grid-cols-2 grid-cols-1 px-5">
        <div class="col-span-3 lg:col-span-3 md:col-span-2 col-span-1">
            <h3 class="text-5xl font-dosis py-5 font-semibold text-center lg:text-left">Articles</h3>
        </div>

        @foreach($articles as $article)
            <a class="dark:bg-zinc-800 bg-white hover:shadow-md rounded-xl p-5 hover:cursor-pointer dark:hover:bg-zinc-700"
               href="#">
                <article class="flex flex-col">
                    <img class="rounded-xl h-150" src="{{ $article->getMedia('main') }}" alt="">
                    <div class="my-2">
                        <span
                            class="dark:text-zinc-50 text-sm text-zinc-400">{{ date('d/m/Y', strtotime($article->created_at)) }}</span>
                        @foreach($article->categories as $category)
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium dark:bg-indigo-300 dark:text-zinc-900 bg-blue-100 text-blue-800"> {{ $category }} </span>
                        @endforeach
                    </div>
                    <h3 class="dark:text-zinc-50 text-xl font-bold mt-5">{{ $article->title }}</h3>
                    <p class="dark:text-zinc-50 mt-5">{{ $article->excerpt }}</p>
                    <div class="mt-5">
                        <span class="text-indigo-600 dark:text-indigo-300 text-xl font-bold">Lire l'article</span>
                    </div>
                </article>
            </a>
        @endforeach
        <div class="mt-5 lg:col-span-3 md:col-span-2 col-span-1 flex justify-center">
            <a href="/articles"
               class="max-w-fit dark:text-zinc-900 dark:bg-indigo-300 bg-indigo-600 rounded-xl max-w-fit p-4 text-white"><i
                    class="fa-duotone fa-paper-plane mr-2"></i> Voir tous les articles</a>
        </div>
    </div>

    <div class="lg:my-40 md:my-20 my-10 max-w-7xl mx-auto grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5 px-5">
        <div class="col-span-1 md:col-span-2 lg:col-span-3">
            <h3 class="text-5xl text-center font-dosis py-5 font-semibold lg:text-left dark:text-zinc-50">Projets</h3>
        </div>

        <a class="hover:cursor-pointer col-span-1 lg:col-span-3 h-96 rounded-xl bg-[url('/public/images/projects/eloyot.png')] bg-cover"></a>
        <a class="hover:cursor-pointer col-span-1 rounded-xl h-96 bg-[url('/public/images/projects/guess-icon.png')] bg-cover bg-center"></a>
        <a class="hover:cursor-pointer col-span-1 lg:col-span-2 h-96 rounded-xl bg-[url('/public/images/projects/do_u_rly_knw_fa.png')] bg-cover"></a>
        <a class="hover:cursor-pointer col-span-1 lg:col-span-2 h-96 rounded-xl bg-[url('/public/images/projects/kordokou.png')] bg-cover"></a>
        <a class="hover:cursor-pointer col-span-1 rounded-xl h-96 bg-[url('/public/images/projects/guess-word.png')] bg-cover bg-center"></a>

    </div>

@endsection
