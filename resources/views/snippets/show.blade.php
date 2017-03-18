@component('layout')
    @slot('title')
        {{ $snippet->title }}
    @endslot

    <div class="is-flex">
        <h1 class="title flex">
            {{ $snippet->title }}
        </h1>
        <a href="/snippets/{{ $snippet->id }}/fork">Fork Me</a>
    </div>

  <pre>
    <code>{{ $snippet->body }}</code>
  </pre>

  <p>
    <a href="/">Back</a>
  </p>
@endcomponent
