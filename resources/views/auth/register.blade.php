@extends('layouts.app')

@section('content')
    @include('partials._breadcrumbs',['pageName' => 'Registration'])

    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="register-form">
                        <div class="title">
                            <h3>No Account? Register</h3>
                            <p>Registration takes less than a minute but gives you full control over your orders.</p>
                        </div>
                        <form class="row" method="post" action="{{ route('register') }}">
                            @csrf
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg-fn">Name</label>
                                    <input name="name" class="form-control" type="text" id="reg-fn" value="{{old('name')}}" required>
                                    @include('partials._error',['field' => 'name'])
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg-email">E-mail</label>
                                    <input name="email" class="form-control" type="email" id="reg-email" value="{{old('email')}}" required>
                                    @include('partials._error',['field' => 'email'])
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg-pass">Password</label>
                                    <input name="password" class="form-control" type="password" id="reg-pass" required>
                                    @include('partials._error',['field' => 'password'])
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg-pass-confirm">Confirm Password</label>
                                    <input name="password_confirmation" class="form-control" type="password" id="reg-pass-confirm" required>
                                </div>
                            </div>
                            <div class="button">
                                <button class="btn" type="submit">Register</button>
                            </div>
                            <p class="outer-link">Already have an account? <a href="{{route('login')}}">Login Now</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

