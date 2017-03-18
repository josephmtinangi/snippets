@component('layouts.app')

@slot('title')
Reset Password
@endslot

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form role="form" method="POST" action="{{ url('/password/email') }}">
    {{ csrf_field() }}

    <div class="control">
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>


        <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>

    <div class="control">
        <button type="submit" class="button is-primary">
            Send Password Reset Link
        </button>

    </div>
</form>

@endcomponent
