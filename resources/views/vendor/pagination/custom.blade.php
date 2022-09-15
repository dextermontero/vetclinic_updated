

@if ($paginator->hasPages())
<ul class="flex justify-center py-5 items-center">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <li><a class="bg-gray-300 rounded-l-lg text-2xl p-3 disabled">←</a></li>
    @else
        <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="text-2xl p-3 rounded-l-lg bg-gray-400 hover:bg-green-800 hover:text-white">←</a></li>
    @endif

    @if($paginator->currentPage() > 3)
        <li class="hidden-xs"><a href="{{ $paginator->url(1) }}" class="bg-white text-2xl p-3 disabled hover:bg-green-800 hover:text-white">1</a></li>
    @endif
    @if($paginator->currentPage() > 4)
        <li><a class="bg-white p-3 text-2xl">...</a></li>
    @endif
    @foreach(range(1, $paginator->lastPage()) as $i)
        @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
            @if ($i == $paginator->currentPage())
                <li class="active"><a class="bg-green-800 text-white p-3 text-2xl">{{ $i }}</a></li>
            @else
                <li><a href="{{ $paginator->url($i) }}" class="bg-white p-3 text-2xl hover:bg-green-800 hover:text-white">{{ $i }}</a></li>
            @endif
        @endif
    @endforeach
    @if($paginator->currentPage() < $paginator->lastPage() - 3)
        <li><a class="bg-white p-3 text-2xl">...</a></li>
    @endif
    @if($paginator->currentPage() < $paginator->lastPage() - 2)
        <li class="hidden-xs"><a href="{{ $paginator->url($paginator->lastPage()) }}" class="bg-white text-2xl p-3 disabled hover:bg-green-800 hover:text-white">{{ $paginator->lastPage() }}</a></li>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="text-2xl p-3 rounded-r-lg bg-gray-400 hover:bg-green-800 hover:text-white">→</a></li>
    @else
        <li class="bg-gray-300 text-2xl p-3 rounded-r-lg disabled"><a>→</a></li>
    @endif
</ul>
@endif