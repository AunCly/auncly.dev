<?php

use App\Models\Article;
use function Laravel\Folio\name;

name('articles');

$articles = Article::all();

?>

@extends('layout')

@section('content')

    <div class="max-w-7xl lg:mx-auto mx-auto grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5 md:mx-5 p-5">
        <div class="lg:col-span-3 md:col-span-2 col-span-1">
            <h3 class="text-5xl font-dosis py-5 font-semibold text-center lg:text-left dark:text-zinc-50">Articles</h3>
        </div>

        @foreach($articles as $article)
            <a class="bg-white hover:shadow-md rounded-xl p-5 hover:cursor-pointer dark:bg-zinc-800 dark:hover:bg-zinc-700"
               href="{{ route('post.show', ['slug' => Str::slug($article->title) ]) }}">
                <article class="flex flex-col">
                    <img class="rounded-xl h-150" src="{{ $article->getFirstMediaUrl('article_main') }}" alt="">
                    <div class="my-2">
                        <span
                            class="dark:text-zinc-50 text-sm text-zinc-400 font-dosis mr-5">{{ date('d/m/Y', strtotime($article->created_at)) }}</span>
                        @foreach($article->categories as $category)
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium dark:bg-sky-200 dark:text-zinc-900 bg-blue-100 text-blue-800"> {{ $category->name }} </span>
                        @endforeach
                    </div>
                    <h3 class="dark:text-zinc-50 text-xl font-bold mt-5 font-dosis">{{ $article->title }}</h3>
                    <p class="dark:text-zinc-50 mt-5 font-raleway">{{ $article->excerpt }}</p>
                    <div class="mt-5">
                        <span
                            class="font-bold text-xl font-dosis text-indigo-600 dark:text-indigo-300">Lire l'article</span>
                    </div>
                </article>
            </a>
        @endforeach
    </div>

@endsection
