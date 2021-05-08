@extends('layouts.app', ['class' => 'login-page', 'page' => 'Laravel Inventory', 'contentClass' => 'login-page', 'section' => 'auth'])

@section('content')
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf

            <div class="card card-login card-white">
                <div class="card-header ml-4 mt-4">
                    <img src="{{ asset('assets') }}/img/logo.png" alt="" width="300px">
                </div>
                <div class="mx-auto">
                    <p>LOGIN</p>
                </div>
                <div class="card-body">
                    <div class="{{ $errors->has('email') ? ' has-danger' : '' }}">
                       <p>Email:</p>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="{{ $errors->has('password') ? ' has-danger' : '' }} mt-2">
                        <p>Password:</p>
                        <input type="password" placeholder="Clave" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                <div class="card-footer mx-auto">
                    <button type="submit" href="" class="btn-green btn-md btn-block mb-1">LOG IN</button>
                    <div>
                        <a href="{{ route('register') }}" class="green">CREATE ACCOUNT</a>                     
                    </div>
                    {{-- <div class="pull-right">
                        <h6>
                            <a href="{{ route('password.request') }}" class="link footer-link">I forgot the passwod</a>
                        </h6>
                    </div> --}}
                </div>
            </div>
        </form>
    </div>
@endsection
