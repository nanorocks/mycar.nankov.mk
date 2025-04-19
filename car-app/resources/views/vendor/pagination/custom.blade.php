@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        <!-- Mobile Pagination -->
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <button class="btn btn-small m-1 btn-disabled">« Previous</button>
            @else
                <button wire:click="previousPage('{{ $paginator->getPageName() }}')" class="btn btn-small m-1 btn-primary">« Previous</button>
            @endif

            @if ($paginator->hasMorePages())
                <button wire:click="nextPage('{{ $paginator->getPageName() }}')" class="btn btn-small m-1 btn-primary">Next »</button>
            @else
                <button class="btn btn-small m-1 btn-disabled">Next »</button>
            @endif
        </div>

        <!-- Desktop Pagination -->
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700 dark:text-gray-400">
                    Showing
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    to
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    of
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    results
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex rounded-md shadow-sm">
                    <!-- Previous Page Link -->
                    @if ($paginator->onFirstPage())
                        <button class="btn btn-small m-1 btn-disabled">«</button>
                    @else
                        <button wire:click="previousPage('{{ $paginator->getPageName() }}')" class="btn btn-small m-1 btn-primary">«</button>
                    @endif

                    <!-- Pagination Elements -->
                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <button class="btn btn-small m-1 btn-disabled">{{ $element }}</button>
                        @endif

                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <button class="btn btn-small m-1 btn-active">{{ $page }}</button>
                                @else
                                    <button wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" class="btn btn-small m-1 btn-primary">{{ $page }}</button>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    <!-- Next Page Link -->
                    @if ($paginator->hasMorePages())
                        <button wire:click="nextPage('{{ $paginator->getPageName() }}')" class="btn btn-small m-1 btn-primary">»</button>
                    @else
                        <button class="btn btn-small m-1 btn-disabled">»</button>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif