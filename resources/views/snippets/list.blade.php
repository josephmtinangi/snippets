@foreach($snippets as $snippet)
    <article class="snippet">
        <div class="is-flex">
            <h4 class="title is-4 flex">
                <a href="/snippets/{{ $snippet->id }}">
                    {{ $snippet->title }}
                </a>
            </h4>

            <a href="/snippets/{{ $snippet->id }}/fork">Fork Me</a>
        </div>

        <pre>
            <code>{{ $snippet->body }}</code>
        </pre>


        @include('snippets._edit_link')

    </article>
@endforeach