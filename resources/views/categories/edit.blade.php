@extends('loyouts.loyout')
@content('title','Editar Categorias')
@section('content')
@include('components.form',['route'=>route('categories.edit',$categorie), 'object'=>$categorie])
@endsection