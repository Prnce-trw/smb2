@if ($paginator->hasPages())
    <ul class="pagination justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        {{-- <li class="nav_arrow01">
            <a href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-chevron-left"></i></a>
        </li> --}}
            {{-- <li class="nav_arrow01"></li><a href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-chevron-left"></i></a></li> --}}
        @else
        {{-- <li class="page-item page-np">
            <a href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-chevron-left"></i></a>
        </li> --}}
        <li class="page-item page-np">
            <a href="{{ $paginator->previousPageUrl() }}" style="color: #ff8200;" rel="prev">
                Prev
            </a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><a>{{ $element }}</a></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item page-np active"><a style="color: black;">{{ $page }}</a></li>
                    @else
                        <li class="page-item page-np active"><a href="{{ $url }}" style="color: #ff8200;">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item page-np">
            <a href="{{ $paginator->nextPageUrl() }}" style="color: #ff8200;" rel="next">Next</a>
        </li>
            {{-- <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="nav_arrow02"></i></a></li> --}}
        @else
            <li><a><i class="nav_arrow02"></i></a></li>
        @endif
    </ul>
@endif