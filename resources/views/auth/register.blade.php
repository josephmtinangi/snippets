@component('layouts.app')

@slot('title')
Join
@endslot

<form role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}

    <div class="control">
        <label for="name" class="label">Name</label>

        <input id="name" type="text" class="input" name="name"
               value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
        @endif
    </div>

    <div class="control">
        <label for="email" class="label">E-Mail Address</label>

        <div class="col-md-6">
            <input id="email" type="email" class="input" name="email"
                   value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </div>
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

    <div class="form-group">
        <label for="password-confirm" class="label">Confirm Password</label>

        <input id="password-confirm" type="password" class="input"
               name="password_confirmation" required>
    </div>
    <br>
    <div class="control">
        <button type="submit" class="button is-primary">
            Register
        </button>
    </div>
</form>

@endcomponent
