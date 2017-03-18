@component('layouts.app')
    @slot('title')
        Snippets
    @endslot
    <h1 class="title">New Snippet</h1>

    <form action="/snippets" method="POST">
        {{ csrf_field() }}

        @if($snippet->id)
            <input type="hidden" name="forked_id" value="{{ $snippet->id }}">
        @endif

        <div class="control">
            <label for="title" class="label">Title:</label>
            <input type="text" id="title" name="title" value="{{ $snippet->title }}" class="input" autofocus>
        </div>

        <div class="control">
            <label for="body" class="label">Body:</label>
            <textarea name="body" id="body" class="textarea">{{ $snippet->body }}</textarea>
        </div>

        <div class="control">
            <button type="submit" class="button is-primary">Publish Snippet</button>
        </div>

    </form>

@endcomponent
