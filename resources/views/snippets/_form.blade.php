@if($snippet->id && Request::segment(3) != 'edit')
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
    <button type="submit" class="button is-primary">{{ $button_text }}</button>
</div>