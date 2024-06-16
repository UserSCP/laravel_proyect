@extends('layouts.loyout')
@section('title','Subir productos')
@section('content')
@include('components.form',['route'=>route('products.store')])
@endsection