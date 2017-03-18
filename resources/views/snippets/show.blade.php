@component('layout')
    @slot('title')
        {{ $snippet->title }}
    @endslot
  <h1 class="title">
    {{ $snippet->title }}
  </h1>

  <pre>
    <code>{{ $snippet->body }}</code>
  </pre>

  <p>
    <a href="/">Back</a>
  </p>
@endcomponent
