@extends('layouts.admin')

@section('content')

    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col s12 z-depth-6 card-panel center">
                    <form class="login-form">
                        <h4>Sign Up</h4>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_box</i>
                                <input class="validate" id="user" type="text">
                                <label for="text" data-error="wrong" data-success="right">User</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="password" type="password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <a href="#" class="btn waves-effect waves-light">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
@endsection