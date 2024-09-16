<?php

use App\Models\Article;
use function Laravel\Folio\name;

name('articles');

$articles = Article::where('is_published', 1)->orderBy('published_at', 'desc')->paginate(10);

?>

@extends('layout')

@section('content')

    <div class="max-w-7xl mx-auto mt-12 lg:mt-32 p-5">
        <div class="flex">
            <h2 class="text-5xl font-title font-semibold dark:text-zinc-50">Articles</h2>
        </div>
        <div class="mt-20">
            @foreach($articles as $article)
                <a href="{{ route('post.show', ['slug' => $article->slug]) }}">
                    <article class="grid pb-10 mt-10 lg:grid-cols-3 md:gap-20 grid-cols-1 lg:col-span-2 md:col-span-1 sm:mt-10 border-b-zinc-200 dark:border-b-zinc-800 border-b-2">
                        <div class="col-span-1 hidden lg:block ">
                            <span class="text-sm uppercase dark:text-zinc-50 text-zinc-400 text-left">{{ date('d/m/Y', strtotime($article->created_at)) }}</span>
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
    </div>
    <div class="max-w-7xl mx-auto mt-12">
        <div class="flex justify-end">
            {{ $articles->links() }}
        </div>
    </div>

@endsection
