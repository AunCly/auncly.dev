<?php
use function Laravel\Folio\name;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\FrontMatter\FrontMatterExtension;
use League\CommonMark\Extension\GithubFlavoredMarkdownExtension;
use Torchlight\Commonmark\V2\TorchlightExtension;
use League\CommonMark\MarkdownConverter;

name('projects');

$environment = new Environment();
$environment->addExtension(new CommonMarkCoreExtension());
$environment->addExtension(new GithubFlavoredMarkdownExtension());
$environment->addExtension(new TorchlightExtension());
$environment->addExtension(new FrontMatterExtension());
$converter = new MarkdownConverter($environment);

$projects = [];

foreach(glob(base_path() . '/projects/*.md') as $project) {
    $convertion = $converter->convert(file_get_contents($project));

    $projects[] = [
        'title' => basename($project, '.md'),
        'content' => file_get_contents($project),
        'html' => $convertion,
        'extra' => $convertion->getFrontMatter(),
    ];
}

$projects = collect($projects)->sortByDesc(function($project, $key){
    return $project['extra']['date'];
})->toArray();

?>

@extends('layout')

@section('content')

	<div class="max-w-7xl mx-auto grid lg:grid-cols-2 grid-cols-1 gap-5 md:grid-cols-1 p-5">
		<div class="lg:col-span-2 col-span-1">
			<h3 class="text-5xl font-dosis py-5 font-semibold text-center lg:text-left dark:text-zinc-50">Projets</h3>
		</div>

		@foreach($projects as $project)
			<a class="bg-white hover:shadow-md rounded-xl p-5 hover:cursor-pointer dark:bg-zinc-800 dark:hover:bg-zinc-700" href="{{ route('project.show', ['slug' => Str::slug($project['extra']['title']) ]) }}">
				<article class="flex flex-col">
					<div class="rounded-xl h-96 bg-[url('/public{{ $project['extra']['image'] }}')] bg-cover bg-center"></div>
					<div class="my-2">
						<span class="dark:text-zinc-50 text-sm text-zinc-400 mr-5 font-dosis">{{ date('d/m/Y', strtotime($project['extra']['date'])) }}</span>
						@foreach($project['extra']['categories'] as $category)
							<span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium dark:bg-sky-200 dark:text-zinc-900 bg-blue-100 text-blue-800"> {{ $category }} </span>
						@endforeach
					</div>
					<h3 class="dark:text-zinc-50 text-xl font-bold mt-5 font-dosis">{{ $project['extra']['title'] }}</h3>
					<p class="dark:text-zinc-50 mt-5 font-raleway">{{ $project['extra']['excerpt'] }}</p>
					<div class="mt-5">
						<span class="text-indigo-600 dark:text-indigo-300 font-dosis font-bold text-xl">Voir le projet</span>
					</div>
				</article>
			</a>
		@endforeach
	</div>


@endsection
