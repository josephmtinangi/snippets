@component('layouts.app')

@slot('title')
Home
@endslot

<h1 class="title">Your Snippets</h1>

@if(count($snippets))
    @include('snippets.list')
@endif

@endcomponent
