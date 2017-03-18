@component('layouts.app')
@slot('title')
Snippets
@endslot
<h1 class="title">New Snippet</h1>

<form action="/snippets" method="POST">
    {{ csrf_field() }}

    @include('snippets._form', ['button_text' => 'Create'])

</form>

@endcomponent
