@component('layouts.app')
@slot('title')
Snippets
@endslot
<h1 class="title">New Snippet</h1>

<form action="/snippets/{{ $snippet->id }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    @include('snippets._form', ['button_text' => 'Update'])

</form>

@endcomponent
