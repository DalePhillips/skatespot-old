<form role="form" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name *" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email *" required>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

        <input id="password" type="password" class="form-control" name="password" placeholder="Password *" required>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">

        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password *" required>
        
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            Register
        </button>
    </div>
</form>
