@component('layouts.app')

@slot('title')
Reset Password
@endslot

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form role="form" method="POST" action="{{ url('/password/reset') }}">
    {{ csrf_field() }}

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="control">
        <label for="email" class="label">E-Mail Address</label>

        <input id="email" type="email" class="input" name="email" value="{{ $email or old('email') }}"
               required autofocus>

        @if ($errors->has('email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>

    <div class="control}">
        <label for="password" class="label">Password</label>

        <div class="col-md-6">
            <input id="password" type="password" class="input" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="control">
        <label for="password-confirm" class="label">Confirm Password</label>
        <div class="col-md-6">
            <input id="password-confirm" type="password" class="input" name="password_confirmation" required>

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="control">

        <button type="submit" class="button is-primary">
            Reset Password
        </button>
    </div>
</form>

@endcomponent
