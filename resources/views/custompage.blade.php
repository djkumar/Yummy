@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>← Previous</span></li>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="previous button" rel="prev">← Previous</a>
        @endif


        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="next button pull-right">Next →</a>
        @else
            <li class="disabled"><span>Next →</span></li>
        @endif
    </ul>
@endif