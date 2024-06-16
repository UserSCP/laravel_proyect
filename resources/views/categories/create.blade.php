@extends('layouts.loyout')
@section('title','Subir Categorias')
@section('content')
@include('components.form',['route'=>route('categories.store')])
@endsection