@if ($paginator->hasPages())
<div class="blog-pagination mb-30">
    <div class="btn-toolbar justify-content-center mb-15">
        <div class="btn-group">

            <ul class="pagination" role="navigation">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <a href="#" class="btn btn-outline-primary prev disabled"><i class="fa fa-angle-double-left"></i></a>
                @else
                <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-outline-primary prev" rel="prev" aria-label="@lang('pagination.previous')"><i class="fa fa-angle-double-left"></i></a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <a href="" class="btn btn-outline-primary">{{ $element }}</a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <a href="#" class="btn btn-outline-primary active">{{ $page }}</a>
                @else
                <a href="{{ $url }}" class="btn btn-outline-primary">{{ $page }}</a>
                @endif
                @endforeach
                @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-outline-primary next"><i class="fa fa-angle-double-right"></i></a>
                @else                
                <a href="" class="btn btn-outline-primary next disabled"><i class="fa fa-angle-double-right"></i></a>                
                @endif
                
            </ul>
        </div>
    </div>
</div>
@endif