@component('layouts.app')
    @slot('title')
        Snippets
    @endslot
    <h1 class="title">List of Snippets</h1>

    @if(count($snippets))
        @include('snippets.list')
    @endif

@endcomponent
