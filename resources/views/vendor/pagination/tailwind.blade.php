@if ($paginator->hasPages())
<style>
    #pre:hover {
        background-color: red;

    }
</style>
<nav id="kk" style="justify-content: center;display:flex;font-size:30px;width:100%; margin-top:20px;">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <div> <a id="pre" class="pagination-previous" style=" margin-top:14px;position:absolute;margin-left:-170px;background-image: linear-gradient(to bottom right, black, white );padding:0px 9px;border-radius:10px;width:160px ;color:whitesmoke " disabled>@lang('pagination.previous')</a></div>
    @else
    <div> <a id="pre" class="pagination-previous" style=" margin-top:14px;position:absolute;margin-left:-170px;background-image: linear-gradient(to bottom right, white,black,blue);color:white;padding:0px 9px;border-radius:10px;width:160px " href="{{ $paginator->previousPageUrl() }}">@lang('pagination.previous')</a></div>
    @endif
    <div> {{-- Pagination Elements --}}
        <ul class="pagination-list" style="list-style: none;">
            @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            <div style="display:flex;color:blue;width:auto">
                @if (is_string($element))
                <div>
                    <li><span class="pagination-ellipsis">&hellip;</span></li>
                </div>
                @endif
                {{-- Array Of Links --}}
                @if (is_array($element))


                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <div style="display:flex;color:red">
                    <li><a style="display:flex;height:50px;width:50px;background-image: linear-gradient(to bottom right, white,black);;text-align:center;justify-content: center;text-decoration: none;align-items: center;width:50px;margin:3px;margin-top:0;border-radius:50%;color:white" class="pagination-link is-current" aria-label="Goto page {{ $page }}">{{ $page }}</a></li>
                </div>
                @else
                <div >

                    <li><a style="display:flex;height:50px;width:50px;background-image: linear-gradient(to bottom right, white,black,blue);;text-align:center;justify-content: center;text-decoration: none;align-items: center;margin:3px;margin-top:0;border-radius:50%;color:whitesmoke" href="{{ $url }}" class="pagination-link" style="color:blue;text-decoration: none;display:flex; font-size:30px;" aria-label="Goto page {{ $page }}">{{ $page }}</a></li>
                </div>
                @endif
                @endforeach

            </div>
            @endif
            @endforeach
        </ul>
    </div>

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <div> <a class="pagination-next" style=" background-image: linear-gradient(to bottom right, white,black,blue);margin-top:14px;position:absolute;text-decoration: none; color:white;padding:0px 9px;border-radius:10px;width:150px  ; text-align:center;margin-left:40px" href="{{ $paginator->nextPageUrl() }}">@lang('pagination.next')</a></div>
    @else
    <div> <a class="pagination-next" style="background-image: linear-gradient(to bottom right, black, white );margin-top:14px;position:absolute;text-decoration: none; color:white;padding:0px 9px;border-radius:10px;width:150px ; text-align:center;margin-left:40px " disabled>@lang('pagination.next')</a></div>
    @endif



</nav>
@endif