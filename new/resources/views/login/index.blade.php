@extends('layouts.master')

@section('content')

<main>
    <div id="brand-banner">
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <a href="index.html" class="brand">Login</a>
                </div>
            </div>
        </div>
    </div>

    <div id="form-banner">
        <div class="section">
            <div class="row">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="col s12">
                    <div class="card form-box">
                        <div class="card-content">
                            <span class="card-title login-title">Welcome back&#33;</span>
                            <div class="row">

                                @if(session()->has('loginError'))
                                <div style="margin:15px" class="white-text card-panel red darken-1">{{session('loginError')}}</div>
                                @endif
                                <form action="/login" method="post">
                                    @csrf
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">mail</i>
                                        <input id="email" type="email" name="email" placeholder="Email" autofocus required value="{{old('email')}}">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="password" type="password" name="password" required>
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="col s12 extra-info-link">
                                        <span class="rem-pass">
                                            <input type="checkbox" id="checkbox1" checked="checked" class="filled-in default">
                                            <label for="checkbox1">Remember me</label>
                                        </span>
                                        <span class="ref-form-link right-float"><a href="reset.html">Forgot your password?</a></span>
                                    </div>
                                    <div class="input-field col s12">
                                        <button class="col s12 btn waves-effect waves-light default" type="submit" name="action">Sign in to your account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 center">
                    <div class="refer-form-page">
                        <a href="/register">Don't have an account? <span>Sign up</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection
