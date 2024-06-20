<?php

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

render(function(View $view, string $slug) {

    $environment = new Environment(config('markdown.attributes'));
    $environment->addExtension(new CommonMarkCoreExtension());
    $environment->addExtension(new GithubFlavoredMarkdownExtension());
    $environment->addExtension(new TorchlightExtension());
    $environment->addExtension(new FrontMatterExtension());
    $environment->addExtension(new AttributesExtension());
    $environment->addExtension(new DefaultAttributesExtension());
    $converter = new MarkdownConverter($environment);

    foreach(glob(base_path() . '/projects/*.md') as $project) {
        $convertion = $converter->convert(file_get_contents($project));

        $projects[] = [
            'title' => basename($project, '.md'),
            'content' => file_get_contents($project),
            'html' => $convertion,
            'extra' => $convertion->getFrontMatter(),
        ];
    }

    $project = collect($projects)->filter(function($project, $index) use ($slug){
        return Str::slug($project['extra']['title']) === $slug;
    })->first();

    $view->with('project', $project);
});


?>

@extends('layout')

@section('content')
	<main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 mb-20">
		<div class="mt-10 max-w-7xl mx-auto lg:px-8">
			<div class="relative py-16 bg-white dark:bg-zinc-800 overflow-hidden">
				<div class="relative px-4 sm:px-6 lg:px-8">
					<div class="text-lg max-w-prose mx-auto">
						<h1>
							<span class="block text-base text-center text-indigo-600 font-semibold tracking-wide uppercase dark:text-indigo-300">Projet</span>
							<span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl font-dosis dark:text-zinc-50">{{ $project['extra']['title'] }}</span>
						</h1>
						<p class="mt-8 text-center text-xl text-gray-500 leading-8 pb-5 dark:text-zinc-200 font-raleway">{{ $project['extra']['excerpt'] }}</p>
						<img class="rounded-xl mb-5" src="{{ $project['extra']['image'] }}" alt="">
						{!! $project['html'] !!}

						<div class="hidden md:block">
							<livewire:lightbox :images="$project['extra']['images']"></livewire:lightbox>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection
