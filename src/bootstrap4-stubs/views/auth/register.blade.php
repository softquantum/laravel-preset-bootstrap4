@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8">
            <div class="card card-block">
                <div class="card-header">
                    Register
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="form-control-label" for="name">Name</label>
                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" id="name" name="name" value="{{ old('name') }}"
                                   placeholder="Enter your full name" required autofocus>
                            @if ($errors->has('name'))
                                <small class="form-control-feedback invalid-feedback">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="email">Email address</label>
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" id="email" name="email" value="{{ old('email') }}"
                                   placeholder="Enter your email" required>
                            @if ($errors->has('email'))
                                <small class="form-control-feedback invalid-feedback">{{ $errors->first('email') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="password">Password</label>
                            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" id="password" name="password" required aria-describedby="passwordHelp">
                            @if ($errors->has('password'))
                                <div class="form-control-feedback invalid-feedback">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" required>
                            <small class="form-text text-muted" id="passwordHelp">Keep your password from prying eyes.</small>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-primary btn-block">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
