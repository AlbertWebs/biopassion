@if ($paginator->hasPages())
    <nav class="custom-pagination-nav" role="navigation" aria-label="Pagination Navigation">
        <ul class="custom-pagination-list">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="custom-pagination-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="custom-pagination-link disabled-link">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="pagination-text">Previous</span>
                    </span>
                </li>
            @else
                <li class="custom-pagination-item">
                    <a href="{{ $paginator->previousPageUrl() }}" class="custom-pagination-link" rel="prev" aria-label="@lang('pagination.previous')">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="pagination-text">Previous</span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="custom-pagination-item disabled" aria-disabled="true">
                        <span class="custom-pagination-link dots">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="custom-pagination-item active" aria-current="page">
                                <span class="custom-pagination-link active-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="custom-pagination-item">
                                <a href="{{ $url }}" class="custom-pagination-link">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="custom-pagination-item">
                    <a href="{{ $paginator->nextPageUrl() }}" class="custom-pagination-link" rel="next" aria-label="@lang('pagination.next')">
                        <span class="pagination-text">Next</span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 4L10 8L6 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </li>
            @else
                <li class="custom-pagination-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="custom-pagination-link disabled-link">
                        <span class="pagination-text">Next</span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 4L10 8L6 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </li>
            @endif
        </ul>
        
        {{-- Results Info --}}
        <div class="pagination-info">
            <p>
                Showing <strong>{{ $paginator->firstItem() }}</strong> to <strong>{{ $paginator->lastItem() }}</strong> 
                of <strong>{{ $paginator->total() }}</strong> results
            </p>
        </div>
    </nav>
@endif
