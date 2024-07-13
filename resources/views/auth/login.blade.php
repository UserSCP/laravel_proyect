@extends('layouts.app')

@section('title', 'Login')

@section('content')
<br>
@if ($errors->any())
    <div class="container">
        @foreach ($errors->all() as $error)
            <div class="alert4">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ __($error) }}
            </div>
            <br>
        @endforeach
    </div>
@endif
<br>
    <div class="container">
        <div class="div">
        <h2>{{ __('fields.login.title') }}</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">{{ __('fields.login.email.label') }}</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="{{ __('fields.login.email.placeholder') }}" autofocus>
            </div>
            <div class="form-group">
                <label for="password">{{ __('fields.login.password.label') }}</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="{{ __('fields.login.password.placeholder') }}">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" id="remember" name="remember" class="form-check-input">
                <label for="remember" class="form-check-label">{{ __('fields.login.remember_me') }}</label>
            </div><br><br>
            <div class="form-group">
                <button type="submit" class="button button2">{{ __('fields.login.submit') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection
@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
