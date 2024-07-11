@extends('layouts.app')

@section('title', 'Login')

@section('content')
<br>
@if ($errors->any())
    <div class="container">
        @foreach ($errors->all() as $error)
            <div class="alert4">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ $error }}
            </div>
            <br>
        @endforeach
    </div>
@endif
<br>
    <div class="container">
        <div class="div">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" id="remember" name="remember" class="form-check-input">
                <label for="remember" class="form-check-label">Remember me</label>
            </div><br><br>
            <div class="form-group">
                <button type="submit" class="button button2">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection
@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
