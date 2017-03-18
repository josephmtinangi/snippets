@component('layout')
    @slot('title')
        Snippets
    @endslot
    <h1 class="title">List of Snippets</h1>

    @if(count($snippets))
        @foreach($snippets as $snippet)
            <article class="snippet">
                <h4 class="title is-4">
                    <a href="/snippets/{{ $snippet->id }}">
                        {{ $snippet->title }}
                    </a>
                </h4>

                <pre>
                    <code>{{ $snippet->body }}</code>
                </pre>

            </article>
        @endforeach
    @endif

@endcomponent
