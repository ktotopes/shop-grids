@extends('layouts.app')

@section('content')
    @include('partials._breadcrumbs',['pageName' => 'Login'])

    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <form class="card login-form" method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="card-body">
                            <div class="title text-center">
                                <h3>Login Now</h3>
                            </div>
                            <div class="form-group input-group">
                                <label for="reg-fn">Email</label>
                                <input name="email" class="form-control" type="email" id="reg-email"
                                       value="{{old('email')}}" required>
                                @include('partials._error',['field' => 'email'])
                            </div>
                            <div class="form-group input-group">
                                <label for="reg-fn">Password</label>
                                <input name="password" class="form-control" type="password" id="reg-pass" required>
                                @include('partials._error',['field' => 'password'])
                            </div>
                            <div class="d-flex flex-wrap justify-content-between bottom-content">
                                <div class="form-check">
                                    <input name="remember" type="checkbox" class="form-check-input width-auto"
                                           id="exampleCheck1">
                                    <label class="form-check-label">Remember me</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="lost-pass" href="{{route('password.request')}}">Forgot password?</a>
                                @endif
                            </div>
                            <div class="button">
                                <button class="btn" type="submit">Login</button>
                            </div>
                            <p class="outer-link">Don't have an account? <a href="{{route('register')}}">Register
                                    here </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
