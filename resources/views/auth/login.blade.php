@extends('layouts.applogin')

@section('content')

    <br>
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card center">
                    <br>
                    <h4 class="center">Sign Up</h4>
                    <br>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_box</i>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <label for="text" data-error="wrong" data-success="right">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">lock_outline</i>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <button type="submit" class="btn btn-primary green right">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="input-field col s6">
                                    <a class="waves-effect ble white-text btn left" href="{{ asset('/') }}">
                                        {{ __('Cancel') }}
                                    </a>
                                    @if (Route::has('password.request'))
                                        <a class="left-align" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
