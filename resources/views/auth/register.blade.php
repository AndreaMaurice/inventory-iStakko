@extends('layouts.app', ['class' => 'register-page', 'page' => 'Laravel Inventory', 'contentClass' => 'register-page', 'section' => 'auth'])

@section('content')
<div class="col-lg-5 col-md-6 ml-auto mr-auto">
                <form class="form" method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="card card-login card-white">
                        <div class="card-header mx-auto">
                            <a href="/login">
                            <img src="{{ asset('assets') }}/img/logo.png" alt="" width="300px">
                        </a>
                        </div>
                        <div class="mx-auto">
                            <p>REGISTER</p>
                        </div>
                    <div class="card-body">
                        <div class="{{ $errors->has('name') ? ' has-danger' : '' }} mb-2">
                            <p>Name:</p>
                            <input type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <div class="{{ $errors->has('email') ? ' has-danger' : '' }} mb-2">
                            <p>Email:</p>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                        <div class="{{ $errors->has('password') ? ' has-danger' : '' }} mb-2">
                            <p>Password:</p>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" >
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="mb-2">
                            <p>Confirm Password:</p>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                        <div class="form-check text-left {{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label class="form-check-label">
                                <input class="form-check-input {{ $errors->has('agree_terms_and_conditions') ? ' is-invalid' : '' }}" name="agree_terms_and_conditions"  type="checkbox"  {{ old('agree_terms_and_conditions') ? 'checked' : '' }}>
                                <span class="form-check-sign"></span>
                                I confirm that I am human.
                                @include('alerts.feedback', ['field' => 'agree_terms_and_conditions'])
                            </label>
                        </div>
                    </div>
                    <div class="card-footer mx-auto">
                        <button type="submit" class="btn-green btn-md">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
