@extends('layouts.master')

@section('content')

<main>
    <div id="brand-banner">
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <a href="index.html" class="brand">Register</a>
                </div>
            </div>
        </div>
    </div>

    <div id="form-banner">
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <div class="card form-box">
                        <div class="card-content" style="padding: 25px;">
                            <span class="card-title login-title">Create your English Challenge account.</span>
                            <div class="row">
                                @if($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="white-text card-panel red darken-1">{{$error}}</div>
                                @endforeach
                                @endif
                                <form action="/register" method="POST">
                                    @csrf
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">person</i>
                                        <input id="name" type="text" name="name" value="{{old('name')}}">
                                        <label for="name">Full Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">mail</i>
                                        <input id="email" type="email" name="email" value="{{old('email')}}">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="password" type="password" name="password">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock_outline</i>
                                        <input id="confirm-password" type="password" name="confirm-password">
                                        <label for="confirm-password">Confirm Password</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <button class="col s12 btn waves-effect waves-light default" type="submit" name="action">Create your account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 center">
                    <div class="refer-form-page">
                        <a href="/login">Already have an account? <span>Login</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


@endsection
