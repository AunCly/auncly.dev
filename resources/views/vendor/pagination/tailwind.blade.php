@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">

        <div class="flex justify-between flex-1 sm:hidden">
            <ul class="flex shrink-0 items-center gap-2 text-sm font-medium">
                @if ($paginator->onFirstPage())
                    <li>
                    <span class="flex items-center rounded-2xl p-1 text-gray-500 dark:text-slate-300 dark:hover:text-blue-800" aria-label="previous page">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-6">
                            <path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                        </svg>
                        Précédent
                    </span>
                    </li>
                @else
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}" class="flex items-center rounded-2xl p-1 text-slate-700 hover:text-blue-700 dark:text-slate-300 dark:hover:text-blue-800" aria-label="previous page">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-6">
                                <path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                            </svg>
                            Précédent
                        </a>
                    </li>
                @endif

                @if ($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}" class="flex items-center rounded-2xl p-1 text-slate-700 hover:text-blue-700 dark:text-slate-300 dark:hover:text-blue-800" aria-label="next page">
                            Suivant
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-6">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                @else
                    <li>
                    <span class="flex items-center rounded-2xl p-1 text-gray-500 hover:text-blue-700 dark:text-slate-300 dark:hover:text-blue-800" aria-label="next page">
                        Suivant
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-6">
                            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    </li>
                @endif
            </ul>
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <ul class="flex shrink-0 items-center gap-2 text-sm font-medium">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li>
                        <span class="flex items-center rounded-2xl p-1 text-gray-500 dark:text-slate-300 dark:hover:text-blue-800" aria-label="previous page">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-6">
                                <path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                            </svg>
                            Précédent
                        </span>
                    </li>
                @else
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}" class="flex items-center rounded-2xl p-1 text-slate-700 hover:text-blue-700 dark:text-slate-300 dark:hover:text-blue-800" aria-label="previous page">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-6">
                                <path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                            </svg>
                            Précédent
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li>
                            <span class="flex size-6 items-center justify-center rounded-2xl p-1 text-slate-700 hover:text-blue-700 dark:text-slate-300 dark:hover:text-blue-800" aria-label="more pages">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" aria-hidden="true" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                            </span>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li><span class="flex size-6 items-center justify-center rounded-2xl bg-blue-700 p-1 font-bold text-slate-100 dark:bg-blue-800 dark:text-white" aria-current="page" aria-label="page 2">{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}" class="flex size-6 items-center justify-center rounded-2xl p-1 text-slate-700 hover:text-blue-700 dark:text-slate-300 dark:hover:text-blue-800" aria-label="page 1">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}" class="flex items-center rounded-2xl p-1 text-slate-700 hover:text-blue-700 dark:text-slate-300 dark:hover:text-blue-800" aria-label="previous page">
                            Suivant
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                @else
                    <li>
                        <span class="flex items-center rounded-2xl p-1 text-gray-500 dark:text-slate-300 dark:hover:text-blue-800" aria-label="previous page">
                            Suivant
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
@endif
