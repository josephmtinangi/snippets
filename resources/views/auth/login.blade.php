@component('layouts.app')

@slot('title')
Login
@endslot


<form role="form" method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}

    <div class="control">
        <label for="email" class="label">E-Mail Address</label>

        <input id="email" type="email" class="input" name="email"
               value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>

    <div class="control">
        <label for="password" class="label">Password</label>

        <input id="password" type="password" class="input" name="password" required>

        @if ($errors->has('password'))
            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
    </div>

    <div class="control">
        <div class="checkbox">
            <label>
                <input type="checkbox"
                       name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
        </div>
    </div>

    <div class="control">
        <button type="submit" class="button is-primary">
            Login
        </button>

        <a class="btn btn-link" href="{{ url('/password/reset') }}">
            Forgot Your Password?
        </a>
    </div>
</form>


@endcomponent
