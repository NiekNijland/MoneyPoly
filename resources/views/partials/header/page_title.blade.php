<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0">
    <span id="page-title" class="text-dark fw-bolder my-0 ls-5" style="font-size: 2.5rem">
        {{ $page_title }}
    </span>

    @if(isset($breadcrumb))

    <ul class="breadcrumb fw-bold fs-base my-1">
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('dashboard') }}" class="text-muted">
                Home
            </a>
        </li>

        @foreach($breadcrumb as $element)

        <li class="breadcrumb-item text-muted">
            <a {{ $loop->last ? 'id=last-breadcrumb' : '' }} class="{{ $loop->last ? 'text-dark' : 'text-muted' }}" {{ $element->link === null ?: 'href=' . $element->link }} >
                {{ $element->text }}
            </a>
        </li>

        @endforeach

    </ul>

    @endif
</div>
