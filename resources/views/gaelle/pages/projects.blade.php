<?php

use App\Models\Project;
use function Laravel\Folio\name;

name('projects');

$projects = Project::with('user')->whereHas('user', function($query){
    $query->where('email', 'gaelle.henaf@gmail.com');
})->get();

?>

@extends('gaelle_layout')

@section('content')

    <div class="max-w-7xl mx-auto mt-12 lg:mt-32 p-5">
        <div class="flex justify-between">
            <h2 class="text-5xl font-title font-semibold dark:text-zinc-50">Projets</h2>
        </div>

        <div class="grid grid-cold-1 md:grid-cols-2 gap-5 mt-20">
            @foreach($projects->take(2) as $project)
                <a class="dark:bg-zinc-800 hover:transition-all hover:duration-300 bg-white hover:shadow-xl hover:shadow-red-700/10 dark:hover:shadow-red-600/10 rounded-xl p-5 hover:cursor-pointer"
                   href="{{ url('/projects/' . $project->slug) }}">
                    <article class="flex flex-col">
                        <div class="rounded-xl col-span-1 relative ease-in-out transition-all duration-300 hover:before:ease-in-out hover:before:transition-all hover:before:duration-300 before:absolute before:rounded-lg before:left-0 before:right-0 before:top-0 before:z-10 before:h-full before:w-full dark:hover:before:bg-transparent hover:before:bg-transparent dark:before:bg-red-600 before:bg-red-700 before:opacity-60">
                            <img alt="" src="{{ $project->getFirstMediaUrl('project_main') }}"
                                 class="rounded-xl w-auto h-auto">
                        </div>
                        <h3 class="dark:text-zinc-50 font-title text-4xl mt-5">{{ $project->title }}</h3>
                        <div class="mt-5">
                            <p class="font-title uppercase font-bold text-red-700 dark:text-red-600 mb-2">Date</p>
                            <p class="dark:text-zinc-50">{{ date('d/m/Y', strtotime($project->created_at)) }}</p>
                        </div>
                        <div class="mt-5">
                            <p class="font-title font-bold uppercase text-red-700 dark:text-red-600 mb-2">
                                Technologies</p>
                            @foreach($project->technologies as $technologie)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium dark:bg-red-600 dark:text-zinc-900 bg-red-100 text-red-700"> {{ $technologie }} </span>
                            @endforeach
                        </div>
                        <div class="mt-5">
                            <p class="font-title font-bold uppercase text-red-700 dark:text-red-600 mb-2">
                                    Résumé</p>
                            <p class="dark:text-zinc-50">{{ $project->excerpt }}</p>
                        </div>
                        <button type="button"
                                class="self-end mt-5 max-w-fit cursor-pointer whitespace-nowrap bg-transparent rounded-2xl border border-red-700 px-4 py-2 text-sm font-medium tracking-wide text-red-700 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-red-600 dark:text-red-600 dark:focus-visible:outline-red-700">
                            <i class="fa-duotone fa-paper-plane mr-2"></i> Voir le projet
                        </button>
                    </article>
                </a>
            @endforeach
        </div>
    </div>

@endsection
