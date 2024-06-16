@extends('loyouts.loyout')
@content('title','Editar Productos')
@section('content')
@include('components.form',['route'=>route('products.edit',$product), 'object'=>$product])
@endsection