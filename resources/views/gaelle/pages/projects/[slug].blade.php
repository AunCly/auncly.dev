<?php

use App\Models\Project;
use function Laravel\Folio\name;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\FrontMatter\FrontMatterExtension;
use League\CommonMark\Extension\GithubFlavoredMarkdownExtension;
use League\CommonMark\Extension\Attributes\AttributesExtension;
use League\CommonMark\Extension\DefaultAttributes\DefaultAttributesExtension;
use Torchlight\Commonmark\V2\TorchlightExtension;
use League\CommonMark\MarkdownConverter;
use function Laravel\Folio\render;
use Illuminate\View\View;

name('project.show');

render(function (View $view, string $slug) {

    $environment = new Environment(config('markdown.gaelle.attributes'));
    $environment->addExtension(new CommonMarkCoreExtension());
    $environment->addExtension(new GithubFlavoredMarkdownExtension());
    $environment->addExtension(new TorchlightExtension());
    $environment->addExtension(new FrontMatterExtension());
    $environment->addExtension(new AttributesExtension());
    $environment->addExtension(new DefaultAttributesExtension());
    $converter = new MarkdownConverter($environment);

    $project = Project::where('slug', $slug)->with(['categories', 'tags'])->first();

    $project->html = $converter->convert($project->content);

    $view->with('project', $project);
});


?>

@extends('gaelle_layout')

@section('content')
    <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 mb-20">
        <div class="mt-10 max-w-7xl mx-auto lg:px-8">
            <div class="relative py-16 bg-white dark:bg-zinc-800 overflow-hidden">
                <div class="relative px-4 sm:px-6 lg:px-8">
                    <div class="text-lg max-w-prose mx-auto">
                        <div class="text-center">
                            <span class="text-base text-center text-red-700 font-semibold tracking-wide uppercase dark:text-red-600">{{ date('d/m/Y', strtotime($project->created_at)) }} - </span>
                            @foreach($project->technologies as $technologie)
                                <span class=" items-center mx-1 px-2.5 py-0.5 rounded-md text-sm font-medium dark:bg-red-600 dark:text-zinc-900 bg-red-100 text-red-700"> {{ $technologie }} </span>
                            @endforeach</div>
                        <h1>
                            <span class="mt-2 block font-title text-4xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl font-dosis dark:text-zinc-50">{{ $project->title }}</span>
                        </h1>
                        <p class="mt-8 text-center text-lg text-gray-500 leading-8 pb-5 dark:text-zinc-200 font-raleway">{{ $project->excerpt }}</p>
                        <img class="rounded-xl mb-5" src="{{ $project->getFirstMediaUrl('project_main') }}" alt="">
                        <div class="text-justify"></div>
                        {!! $project->html !!}

                        <div class="hidden md:block mt-10">
                            <livewire:carousel :medias="$project->getMedia('project_images')"></livewire:carousel>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


<style type="text/css">
    h2 {
        margin-top: 30px !important;
    }
</style>