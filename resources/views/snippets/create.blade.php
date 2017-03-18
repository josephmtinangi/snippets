@component('layout')
    @slot('title')
        Snippets
    @endslot
    <h1 class="title">Create a snippet</h1>

    <form action="/snippets" method="POST">
        {{ csrf_field() }}

        <div class="control">
            <label for="title" class="label">Title:</label>
            <input type="text" id="title" name="title" class="input">
        </div>

        <div class="control">
            <label for="body" class="label">Body:</label>
            <textarea name="body" id="body" class="textarea"></textarea>
        </div>

        <div class="control">
            <button type="submit" class="button is-primary">Publish Snippet</button>
        </div>

    </form>

@endcomponent
