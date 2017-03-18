@if(!Auth::guest())
    @if($snippet->user_id == Auth::user()->id)
        <p>
            <a href="/snippets/{{ $snippet->id }}/edit">Edit</a>
        </p>
    @endif
@endif