@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container"style="margin-top: 20px">
    <div class="div">
        <h2>Register</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required autofocus>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
            </div>
            <br><br>
            <div class="form-group">
                <button type="submit" class="button button2">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
