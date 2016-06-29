@if ($paginate->lastPage() > 1)
        <ul class="navPaging">
            <li>
                <a class="{{ ($paginate->currentPage() == 1) ? 'disabled' : '' }}" href="{{ $paginate->url(1) }}">Previous</a>
            </li>
            @for ($i = 1; $i <= $paginate->lastPage(); $i++)
                <li>
                    <a class="{{ ($paginate->currentPage() == $i) ? 'current' : '' }}" href="{{ $paginate->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li>
                <a class="{{ ($paginate->currentPage() == $paginate->lastPage()) ? 'disabled' : '' }}" href="{{ $paginate->url($paginate->currentPage()+1) }}" >Next</a>
            </li>
        </ul>
@endif

<div class="boxPaging">
    <ul class="navPaging">
        <li>
            <a href="" title="">««</a>
        </li>
        <li>
            <a href="" title="">«</a>
        </li>
        <li>
            <a class="current" href="" title="">1</a>
        </li>
        <li>
            <a href="" title="">2</a>
        </li>
        <li>
            <a href="" title="">3</a>
        </li>
        <li>
            <a href="" title="">4</a>
        </li>
        <li>
            <a href="" title="">5</a>
        </li>
        <li>
            <a href="" title="">»</a>
        </li>
        <li>
            <a href="" title="">»»</a>
        </li>
    </ul>
    <div class="clear"></div>
</div>