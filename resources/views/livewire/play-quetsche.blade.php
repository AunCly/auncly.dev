<div>
    @if(is_null($word))
        <a wire:click="play" class="max-w-fit cursor-pointer whitespace-nowrap bg-transparent rounded-2xl border border-blue-700 p-4 text-sm font-medium tracking-wide text-blue-700 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-blue-300 dark:text-blue-300 dark:focus-visible:outline-blue-300">
            <i class="fa-duotone fa-download mr-2"></i> Jouer
        </a>
    @endif

    @if(!is_null($word))
        <input wire:model="answer" wire:keydown.enter="try" type="text" class="mt-4 w-full bg-zinc-100 dark:bg-zinc-800 border border-zinc-300 dark:border-zinc-700 rounded-lg p-4 text-lg font-medium text-zinc-900 dark:text-zinc-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    @endif

    @if($best)
        <h2 class="dark:text-blue-300">Meilleur mot trouvé : {{ $best }}</h2>
    @endif

    @if(session()->has('message'))
        <div class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg" role="alert">
            {{ session('message') }}
        </div>
    @endif
</div>
