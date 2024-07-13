@extends('layouts.app')

@section('title', 'Register')

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
<div class="container"style="margin-top: 20px">
    <div class="div">
        <h2>{{ __('fields.signup.title') }}</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">{{ __('fields.signup.name.label') }}</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="{{ __('fields.signup.name.placeholder') }}" autofocus>
            </div>
            <div class="form-group">
                <label for="email">{{ __('fields.signup.email.label') }}</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="{{ __('fields.signup.email.placeholder') }}">
            </div>
            <div class="form-group">
                <label for="password">{{ __('fields.signup.password.label') }}</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="{{ __('fields.signup.password.placeholder') }}">
            </div>
            <div class="form-group">
                <label for="password_confirmation">{{ __('fields.signup.confirm_password.label') }}</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="{{ __('fields.signup.confirm_password.placeholder') }}" >
            </div>
            <br><br>
            <div class="form-group">
                <button type="submit" class="button button2">{{ __('fields.signup.submit') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection
@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
